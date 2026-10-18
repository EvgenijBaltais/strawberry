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
  <link rel="stylesheet" href="styles.css">
  <script src="script.js" defer></script>
</head>
<body>
  <div class="announcement">Свежие ягоды · ручная работа · доставка по городу</div>
  <header class="site-header shell" id="top">
    <nav class="site-nav" aria-label="Основная навигация">
      <a class="brand" href="/" aria-label="На главную"><span></span></a>
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
      <p><strong>Мы на связи:</strong> ежедневно, с 9:00 до 20:00</p>

      <form class="contact-form">
        <label><span>Имя</span><input type="text" name="name" placeholder="Имя" autocomplete="name"></label>
        <label><span>Email</span><input type="email" name="email" placeholder="Email *" autocomplete="email" required></label>
        <label class="contact-form__wide"><span>Телефон</span><input type="tel" name="phone" placeholder="Телефон" autocomplete="tel"></label>
        <label class="contact-form__wide"><span>Сообщение</span><textarea name="message" rows="5" placeholder="Сообщение" required></textarea></label>
        <button class="button" type="submit">Отправить</button>
        <p class="contact-form__consent">Нажимая «Отправить», вы даёте <a href="/policy" target="_blank">согласие на обработку персональных данных</a>.</p>
        <p class="contact-form__status" hidden role="status">Спасибо! Сообщение подготовлено.</p>
      </form>
    </section>
  </main>

  <footer class="footer" id="delivery">
    <div class="shell footer__grid">
      <div><h2>Навигация</h2><a href="/">Главная</a><a href="/catalog">Каталог</a><a href="/#delivery">Доставка</a><a href="/contact">Контакты</a><a href="/policy">Согласие на обработку персональных данных</a></div>
      <div><h2>Наша идея</h2><p>Создаём сладкие подарки, которые радуют ещё до первого кусочка.</p></div>
      <a class="brand brand--footer" href="#top" aria-label="Наверх"><span></span></a>
      <form class="subscribe"><label for="footer-email">Письма о новых коллекциях</label><div><input id="footer-email" type="email" placeholder="Ваш email"><button type="submit" aria-label="Подписаться">→</button></div></form>
      <div class="socials"><a href="#">VK</a><a href="#">TG</a><a href="#">IN</a></div>
    </div>
    <div class="footer__bottom">© 2026 Berry · сделано с любовью</div>
  </footer>
</body>
</html>
