<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Каталог ягод, пончиков и конфет в шоколаде ручной работы.">
  <title>Каталог — Berry</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;1,500&amp;family=Manrope:wght@400;500;600&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="styles.css?v=20261021k">
  <script src="script.js?v=20261021d" defer></script>
</head>
<body class="catalog-page">
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
        <a href="/#delivery">Доставка</a>
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
  </header>

  <main class="catalog-main shell">
    <section class="collection-intro reveal">
      <p class="eyebrow">Выберите свой повод для радости</p>
      <h1>Все сладости</h1>
      <p>Клубника, малина, черника и пончики в шоколаде — собираем вручную и красиво упаковываем.</p>
    </section>

    <section class="collection" aria-label="Каталог товаров">
      <div class="collection-toolbar">
        <div class="sort-group">
          <label for="catalog-sort">Сортировка:</label>
          <select id="catalog-sort">
            <option value="featured">По популярности</option>
            <option value="price-asc">Сначала дешевле</option>
            <option value="price-desc">Сначала дороже</option>
            <option value="name">По названию</option>
          </select>
          <span class="product-count" aria-live="polite">16 товаров</span>
        </div>
      </div>

      <div class="catalog-grid" id="catalog-grid">
        <article class="product-card catalog-card reveal" data-category="strawberry" data-price="1490" data-available="true">
          <a class="product-card__visual" href="/product" aria-label="Клубника Классика"><img src="assets/images/strawberry-classic.jpg" alt="" loading="lazy" decoding="async"></a>
          <h3><a href="/product">Клубника «Классика»</a></h3><p>от 1 490 ₽</p>
        </article>
        <article class="product-card catalog-card reveal" data-category="strawberry" data-price="1790" data-available="true">
          <a class="product-card__visual" href="#" aria-label="Клубника Розовый крем"><img src="assets/images/strawberry-pink.jpg" alt="" loading="lazy" decoding="async"></a>
          <h3><a href="#">Розовый крем</a></h3><p>от 1 790 ₽</p>
        </article>
        <article class="product-card catalog-card reveal" data-category="raspberry" data-price="1290" data-available="true">
          <a class="product-card__visual" href="#" aria-label="Малина в белом шоколаде"><img src="assets/images/raspberry-chocolate.jpg" alt="" loading="lazy" decoding="async"></a>
          <h3><a href="#">Малина в белом</a></h3><p>от 1 290 ₽</p>
        </article>
        <article class="product-card catalog-card reveal" data-category="blueberry" data-price="1190" data-available="true">
          <a class="product-card__visual" href="#" aria-label="Черника в темном шоколаде"><img src="assets/images/blueberry-skewer.jpg" alt="" loading="lazy" decoding="async"></a>
          <h3><a href="#">Черника в тёмном</a></h3><p>от 1 190 ₽</p>
        </article>
        <article class="product-card catalog-card reveal" data-category="donuts" data-price="990" data-available="true">
          <a class="product-card__visual" href="#" aria-label="Ягодные пончики Солнечные"><img src="assets/images/donuts-berry.jpg" alt="" loading="lazy" decoding="async"></a>
          <h3><a href="#">Пончики «Солнечные»</a></h3><p>от 990 ₽</p>
        </article>
        <article class="product-card catalog-card reveal" data-category="donuts" data-price="1090" data-available="true">
          <a class="product-card__visual" href="#" aria-label="Черничные пончики"><img src="assets/images/donut-single.jpg" alt="" loading="lazy" decoding="async"></a>
          <h3><a href="#">Черничные пончики</a></h3><p>от 1 090 ₽</p>
        </article>
        <article class="product-card catalog-card reveal" data-category="candies" data-price="1390" data-available="true">
          <a class="product-card__visual" href="#" aria-label="Конфеты Фисташка и малина"><img src="assets/images/truffles.jpg" alt="" loading="lazy" decoding="async"></a>
          <h3><a href="#">Фисташка и малина</a></h3><p>от 1 390 ₽</p>
        </article>
        <article class="product-card catalog-card reveal" data-category="candies" data-price="1590" data-available="false">
          <a class="product-card__visual" href="#" aria-label="Конфеты Соленая карамель"><img src="assets/images/chocolates-box.jpg" alt="" loading="lazy" decoding="async"></a>
          <h3><a href="#">Солёная карамель</a></h3><p>от 1 590 ₽</p>
        </article>
        <article class="product-card catalog-card reveal" data-category="strawberry" data-price="2190" data-available="true">
          <a class="product-card__visual" href="#" aria-label="Клубника Большой букет"><img src="assets/images/strawberry-bouquet.jpg" alt="" loading="lazy" decoding="async"></a>
          <h3><a href="#">Большой ягодный букет</a></h3><p>от 2 190 ₽</p>
        </article>
        <article class="product-card catalog-card reveal" data-category="raspberry" data-price="1490" data-available="true">
          <a class="product-card__visual" href="#" aria-label="Малиновое ассорти"><img src="assets/images/raspberry-chocolate.jpg" alt="" loading="lazy" decoding="async"></a>
          <h3><a href="#">Малиновое ассорти</a></h3><p>от 1 490 ₽</p>
        </article>
        <article class="product-card catalog-card reveal" data-category="blueberry" data-price="1390" data-available="true">
          <a class="product-card__visual" href="#" aria-label="Черника Ночное небо"><img src="assets/images/berry-chocolate.jpg" alt="" loading="lazy" decoding="async"></a>
          <h3><a href="#">Черника «Ночное небо»</a></h3><p>от 1 390 ₽</p>
        </article>
        <article class="product-card catalog-card reveal" data-category="donuts" data-price="1190" data-available="false">
          <a class="product-card__visual" href="#" aria-label="Клубничные пончики"><img src="assets/images/donuts-berry.jpg" alt="" loading="lazy" decoding="async"></a>
          <h3><a href="#">Клубничные пончики</a></h3><p>от 1 190 ₽</p>
        </article>
        <article class="product-card catalog-card reveal" data-category="candies" data-price="1690" data-available="true">
          <a class="product-card__visual" href="#" aria-label="Шоколадное ассорти"><img src="assets/images/chocolates-box.jpg" alt="" loading="lazy" decoding="async"></a>
          <h3><a href="#">Шоколадное ассорти</a></h3><p>от 1 690 ₽</p>
        </article>
        <article class="product-card catalog-card reveal" data-category="strawberry" data-price="1890" data-available="true">
          <a class="product-card__visual" href="#" aria-label="Клубника Праздник"><img src="assets/images/strawberry-party.jpg" alt="" loading="lazy" decoding="async"></a>
          <h3><a href="#">Клубника «Праздник»</a></h3><p>от 1 890 ₽</p>
        </article>
        <article class="product-card catalog-card reveal" data-category="raspberry" data-price="1590" data-available="true">
          <a class="product-card__visual" href="#" aria-label="Малина и лепестки"><img src="assets/images/raspberry-chocolate.jpg" alt="" loading="lazy" decoding="async"></a>
          <h3><a href="#">Малина и лепестки</a></h3><p>от 1 590 ₽</p>
        </article>
        <article class="product-card catalog-card reveal" data-category="candies" data-price="1990" data-available="true">
          <a class="product-card__visual" href="#" aria-label="Подарочная коллекция"><img src="assets/images/gift-box.jpg" alt="" loading="lazy" decoding="async"></a>
          <h3><a href="#">Подарочная коллекция</a></h3><p>от 1 990 ₽</p>
        </article>
      </div>

      <p class="catalog-empty" hidden>По выбранным параметрам пока ничего нет.</p>
      <nav class="pagination" aria-label="Страницы каталога"><span aria-current="page">1</span><a href="#">2</a><a href="#" aria-label="Следующая страница">→</a></nav>
    </section>
  </main>
  <?php require __DIR__ . '/footer.php'; ?>
</body>
</html>
