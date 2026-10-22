<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Связаться с Berry — вопросы о заказах, доставке и индивидуальном оформлении.">
  <title>Контакты — Berry</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;1,500&amp;family=Manrope:wght@400;500;600&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="styles.css?v=20261022a">
  <script src="script.js?v=20261021d" defer></script>
</head>
<body>
  <?php require __DIR__ . '/announcement.php'; ?>
  <header class="site-header shell" id="top">
    <nav class="site-nav" aria-label="Основная навигация">
      <a class="brand" href="/" aria-label="На главную"><img src="/assets/logo.png" alt=""></a>
      <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="menu">Меню</button>
      <div class="site-nav__links" id="menu">
        <a href="/">Главная</a>
        <div class="nav-dropdown">
          <button class="nav-dropdown__trigger" type="button" aria-expanded="false">Каталог <span class="chevron" aria-hidden="true"></span></button>
          <div class="nav-dropdown__panel">
            <a href="/catalog">Смотреть всё</a><a href="/catalog?category=strawberry">Клубника в шоколаде</a><a href="/catalog?category=raspberry">Малина в шоколаде</a><a href="/catalog?category=blueberry">Черника в шоколаде</a><a href="/catalog?category=donuts">Ягодные пончики</a><a href="/catalog?category=candies">Корпусные конфеты</a>
          </div>
        </div>
        <a href="/#delivery">Доставка</a>
        <a href="/contact" aria-current="page">Контакты</a>
      </div>
      <div class="site-nav__tools">
        <a class="cart-button" href="/cart" aria-label="Корзина"><svg viewBox="0 0 32 32" aria-hidden="true"><path d="M8.5 11.5h15l-1 14h-13l-1-14Z"></path><path d="M12 12V9a4 4 0 0 1 8 0v3"></path></svg><span class="cart-count" hidden>0</span></a>
      </div>
    </nav>
  </header>

  <main class="contact-main shell reveal">
    <section class="contact-content" aria-labelledby="contact-title">
      <p class="eyebrow">Давайте знакомиться</p>
      <h1 id="contact-title">Контакты</h1>
      <p>Есть вопрос или особенная идея для подарка? Напишите нам — всё обсудим и поможем выбрать набор.</p>
      <div class="contact-details">
        <h2>Контакты для связи</h2>
        <p><strong>ИП БАЛТАЙС ЕВГЕНИЙ АЛЕКСАНДРОВИЧ</strong><br>Московская область<br>ИНН: 502479223455 · ОГРН: 321508100241350</p>
        <p>Телефон: <a href="tel:+79057383987">+7 (905) 738-39-87</a><br>Email: <a href="mailto:mailto@stars-box.ru">mailto@stars-box.ru</a><br>Telegram: <a href="https://t.me/evgeniyblts" target="_blank" rel="noopener noreferrer">Написать в Telegram</a></p>
      </div>

      <form class="contact-form" action="/contact-submit.php" method="post">
        <label><span>Имя</span><input type="text" name="name" placeholder="Имя" autocomplete="name" maxlength="120"></label>
        <label><span>Email</span><input type="email" name="email" placeholder="Email" autocomplete="email" maxlength="254"></label>
        <label class="contact-form__wide"><span>Телефон</span><input type="tel" name="phone" placeholder="Телефон *" autocomplete="tel" required maxlength="32"></label>
        <label class="contact-form__wide"><span>Сообщение</span><textarea name="message" rows="5" placeholder="Сообщение *" required minlength="3" maxlength="5000"></textarea></label>
        <fieldset class="contact-preference contact-form__wide">
          <legend>Какой способ связи для вас предпочтительнее?</legend>
          <div class="contact-preference__options">
            <label><input type="radio" name="contact_method" value="Telegram" checked><span>Telegram</span></label>
            <label><input type="radio" name="contact_method" value="Телефон"><span>Телефон</span></label>
            <label><input type="radio" name="contact_method" value="Не важно"><span>Не важно</span></label>
          </div>
          <div class="contact-preference__options contact-preference__options--secondary" aria-label="Формат ответа">
            <label><input type="radio" name="contact_type" value="Сообщение" checked><span>Сообщение</span></label>
            <label><input type="radio" name="contact_type" value="Звонок"><span>Звонок</span></label>
          </div>
        </fieldset>
        <div class="contact-consent contact-form__wide">
          <label><input type="checkbox" name="consent" value="1" required><span>Согласен с <a href="/policy" target="_blank" rel="noopener">правилами обработки персональных данных</a>.</span></label>
        </div>
        <button class="button" type="submit">Отправить</button>
        <p class="contact-form__status" hidden role="status" aria-live="polite"></p>
      </form>
    </section>
  </main>
  <?php require __DIR__ . '/footer.php'; ?>
</body>
</html>
