<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Ягоды и пончики в шоколаде — свежие подарочные наборы ручной работы.">
  <title>Berry — ягоды в шоколаде</title>
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
            <a href="/catalog">Смотреть всё</a>
            <a href="/catalog?category=strawberry">Клубника в шоколаде</a>
            <a href="/catalog?category=raspberry">Малина в шоколаде</a>
            <a href="/catalog?category=blueberry">Черника в шоколаде</a>
            <a href="/catalog?category=donuts">Ягодные пончики</a>
            <a href="/catalog?category=candies">Корпусные конфеты</a>
          </div>
        </div>
        <a href="#delivery">Доставка</a>
        <a href="/contact">Контакты</a>
      </div>
      <div class="site-nav__tools">
        <a class="cart-button" href="/cart" aria-label="Корзина">
          <svg viewBox="0 0 32 32" aria-hidden="true">
            <path d="M8.5 11.5h15l-1 14h-13l-1-14Z"></path>
            <path d="M12 12V9a4 4 0 0 1 8 0v3"></path>
          </svg>
          <span class="cart-count" hidden>0</span>
        </a>
      </div>
    </nav>

    <div class="hero">
      <div class="hero__visual" role="img" aria-label="Подарочный набор клубники в шоколаде"><img src="assets/images/strawberry-bouquet.jpg" alt="" fetchpriority="high" decoding="async"></div>
      <div class="hero__copy">
        <p class="eyebrow">Сделано для красивых моментов</p>
        <h1>Ягоды, которые хочется дарить</h1>
        <p>Клубника, малина и черника в шоколаде — собираем свежие наборы к вашему празднику.</p>
        <a class="button" href="/catalog">Смотреть коллекцию</a>
      </div>
    </div>
  </header>

  <main>
    <section class="section shell reveal" id="catalog">
      <div class="section-heading">
        <p class="eyebrow">Любимые вкусы</p>
        <h2>Наши бестселлеры</h2>
      </div>
      <div class="product-grid">
        <article class="product-card">
          <a class="product-card__visual" href="/product" aria-label="Клубника в молочном шоколаде"><img src="assets/images/strawberry-classic.jpg" alt="" loading="lazy" decoding="async"></a>
          <h3><a href="/product">Клубника в молочном</a></h3>
          <p>от 1 490 ₽</p>
        </article>
        <article class="product-card">
          <a class="product-card__visual" href="#" aria-label="Малина в белом шоколаде"><img src="assets/images/raspberry-chocolate.jpg" alt="" loading="lazy" decoding="async"></a>
          <h3><a href="#">Малина в белом</a></h3>
          <p>от 1 290 ₽</p>
        </article>
        <article class="product-card">
          <a class="product-card__visual" href="#" aria-label="Черника в тёмном шоколаде"><img src="assets/images/blueberry-skewer.jpg" alt="" loading="lazy" decoding="async"></a>
          <h3><a href="#">Черника в тёмном</a></h3>
          <p>от 1 190 ₽</p>
        </article>
        <article class="product-card">
          <a class="product-card__visual" href="#" aria-label="Шоколадно-ягодные пончики"><img src="assets/images/donuts-berry.jpg" alt="" loading="lazy" decoding="async"></a>
          <h3><a href="#">Ягодные пончики</a></h3>
          <p>от 990 ₽</p>
        </article>
      </div>
    </section>

    <section class="statement shell reveal" aria-label="О бренде">
      <div class="statement__inner">
        <p>Сладость, которая превращает день в праздник.</p>
      </div>
    </section>

    <section class="section shell reveal" id="collections">
      <div class="category-grid">
        <a class="category-card" href="#">
          <span class="category-card__visual"><img src="assets/images/strawberry-assorted.jpg" alt="" loading="lazy" decoding="async"></span>
          <strong>Ягоды в шоколаде <i>→</i></strong>
        </a>
        <a class="category-card" href="#">
          <span class="category-card__visual"><img src="assets/images/donuts-berry.jpg" alt="" loading="lazy" decoding="async"></span>
          <strong>Пончики <i>→</i></strong>
        </a>
        <a class="category-card" href="#">
          <span class="category-card__visual"><img src="assets/images/gift-box.jpg" alt="" loading="lazy" decoding="async"></span>
          <strong>Подарочные наборы <i>→</i></strong>
        </a>
      </div>
    </section>

    <section class="craft shell reveal" id="about">
      <h2>Собираем вручную</h2>
      <div class="craft__grid">
        <div class="craft__visual" role="img" aria-label="Ягоды и шоколад для набора"><img src="assets/images/strawberry-party.jpg" alt="" loading="lazy" decoding="async"></div>
        <div class="craft__copy">
          <h3>Свежие ягоды, хороший шоколад и внимание к каждой детали.</h3>
          <p>Готовим небольшими партиями и оформляем набор только перед отправкой. Цвет, надпись и декор можно подобрать под ваш повод.</p>
          <a class="text-link" href="#">Узнать больше <span>→</span></a>
        </div>
        <div class="craft__visual" role="img" aria-label="Подарочная коробка шоколадных конфет"><img src="assets/images/gift-box.jpg" alt="" loading="lazy" decoding="async"></div>
      </div>
    </section>
  </main>
  <?php require __DIR__ . '/footer.php'; ?>
</body>
</html>
