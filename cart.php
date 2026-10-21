<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Корзина Berry — выбранные ягоды и сладости в шоколаде.">
  <title>Корзина — Berry</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;1,500&amp;family=Manrope:wght@400;500;600&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="styles.css?v=20261021k">
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
        <a href="/contact">Контакты</a>
      </div>
      <div class="site-nav__tools">
        <a class="cart-button" href="/cart" aria-label="Корзина"><svg viewBox="0 0 32 32" aria-hidden="true"><path d="M8.5 11.5h15l-1 14h-13l-1-14Z"></path><path d="M12 12V9a4 4 0 0 1 8 0v3"></path></svg><span class="cart-count" hidden>0</span></a>
      </div>
    </nav>
  </header>

  <main class="cart-main shell">
    <div class="cart-heading reveal">
      <h1>Корзина</h1>
      <a class="text-link" href="/catalog">Продолжить покупки <span>→</span></a>
    </div>

    <section class="cart-content reveal" data-cart-content aria-label="Товары в корзине">
      <div class="cart-labels"><span>Товар</span><span>Количество</span><span>Итого</span></div>
      <article class="cart-item">
        <a class="cart-item__visual" href="/product" aria-label="Клубника Классика"><img src="assets/images/strawberry-classic.jpg" alt="" loading="lazy" decoding="async"></a>
        <div class="cart-item__info">
          <h2><a href="/product">Клубника «Классика»</a></h2>
          <p data-cart-unit-price>1 490 ₽</p>
          <p>Размер: <span data-cart-size>6 ягод</span></p>
        </div>
        <div class="cart-item__actions">
          <div class="quantity-stepper cart-quantity">
            <button type="button" data-cart-action="minus" aria-label="Уменьшить количество">−</button>
            <input type="number" min="1" max="20" value="1" data-cart-quantity aria-label="Количество товара">
            <button type="button" data-cart-action="plus" aria-label="Увеличить количество">＋</button>
          </div>
          <button class="cart-remove" type="button" data-cart-remove aria-label="Удалить товар">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 7h14M9 7V4h6v3M8 10v8M12 10v8M16 10v8M7 7l1 14h8l1-14"></path></svg>
          </button>
        </div>
        <p class="cart-item__total" data-cart-line-total>1 490 ₽</p>
      </article>
      <div class="cart-summary">
        <p><strong>Итого</strong> <span data-cart-total>1 490 ₽</span></p>
        <small>Стоимость доставки рассчитывается при оформлении заказа.</small>
        <button class="button cart-checkout" type="button">Оформить заказ</button>
      </div>
    </section>

    <section class="cart-empty" data-cart-empty hidden>
      <h2>Корзина пока пуста</h2>
      <p>Выберите ягоды или сладкий набор — здесь появится ваш заказ.</p>
      <a class="button" href="/catalog">Перейти в каталог</a>
    </section>
  </main>
  <?php require __DIR__ . '/footer.php'; ?>
</body>
</html>
