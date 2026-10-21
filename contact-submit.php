<?php
declare(strict_types=1);

header('Content-Type: application/json; charset=utf-8');
header('Cache-Control: no-store');

function respond(int $status, string $message): void
{
    http_response_code($status);
    echo json_encode(['ok' => $status === 200, 'message' => $message], JSON_UNESCAPED_UNICODE);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Allow: POST');
    respond(405, 'Используйте форму на странице контактов.');
}

$origin = $_SERVER['HTTP_ORIGIN'] ?? '';
if ($origin !== '' && parse_url($origin, PHP_URL_HOST) !== parse_url('http://' . ($_SERVER['HTTP_HOST'] ?? ''), PHP_URL_HOST)) {
    respond(403, 'Не удалось проверить источник запроса.');
}

$name = trim((string) ($_POST['name'] ?? ''));
$email = trim((string) ($_POST['email'] ?? ''));
$phone = trim((string) ($_POST['phone'] ?? ''));
$message = trim((string) ($_POST['message'] ?? ''));
$method = (string) ($_POST['contact_method'] ?? '');
$type = (string) ($_POST['contact_type'] ?? '');
$consent = (string) ($_POST['consent'] ?? '');

if ($consent !== '1') {
    respond(422, 'Подтвердите согласие с правилами обработки персональных данных.');
}
if (strlen($name) > 360 || strlen($email) > 254 || strlen($phone) > 32 || strlen($message) < 3 || strlen($message) > 15000) {
    respond(422, 'Проверьте длину заполненных полей.');
}
if ($email !== '' && filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    respond(422, 'Проверьте адрес электронной почты.');
}
if (strlen((string) preg_replace('/\D/', '', $phone)) < 10 || strlen((string) preg_replace('/\D/', '', $phone)) > 15) {
    respond(422, 'Укажите корректный номер телефона.');
}
if (!in_array($method, ['Telegram', 'Телефон', 'Не важно'], true) || !in_array($type, ['Сообщение', 'Звонок'], true)) {
    respond(422, 'Выберите способ связи.');
}

$clean = static function (string $value): string {
    return trim((string) preg_replace('/[\x00-\x1F\x7F]+/u', ' ', strip_tags($value)));
};
$body = "Новое обращение с сайта Berry\n\n"
    . 'Имя: ' . $clean($name) . "\n"
    . 'Email: ' . $clean($email) . "\n"
    . 'Телефон: ' . $clean($phone) . "\n"
    . 'Способ связи: ' . $method . '; ' . $type . "\n\n"
    . "Сообщение:\n" . $clean($message) . "\n";
$headers = [
    'From' => 'Berry <mailto@stars-box.ru>',
    'Content-Type' => 'text/plain; charset=UTF-8',
];
if ($email !== '') {
    $headers['Reply-To'] = $email;
}
$subject = '=?UTF-8?B?' . base64_encode('Новое обращение с сайта Berry') . '?=';

if (!@mail('mailto@stars-box.ru', $subject, $body, $headers)) {
    respond(503, 'Сообщение не отправлено. Напишите нам на mailto@stars-box.ru.');
}

respond(200, 'Сообщение отправлено.');
