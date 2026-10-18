const revealObserver = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add('is-visible');
      revealObserver.unobserve(entry.target);
    }
  });
}, { threshold: 0.12 });

document.querySelectorAll('.reveal').forEach((element) => revealObserver.observe(element));

const menuButton = document.querySelector('.menu-toggle');
const menu = document.querySelector('.site-nav__links');

menuButton?.addEventListener('click', () => {
  const isOpen = menu.classList.toggle('is-open');
  menuButton.setAttribute('aria-expanded', String(isOpen));
});

menu?.querySelectorAll('a').forEach((link) => {
  link.addEventListener('click', () => {
    menu.classList.remove('is-open');
    menuButton?.setAttribute('aria-expanded', 'false');
  });
});

document.querySelectorAll('.nav-dropdown__trigger').forEach((trigger) => {
  trigger.addEventListener('click', (event) => {
    event.stopPropagation();
    const dropdown = trigger.closest('.nav-dropdown');
    const willOpen = !dropdown.classList.contains('is-open');

    document.querySelectorAll('.nav-dropdown.is-open').forEach((item) => {
      item.classList.remove('is-open');
      item.querySelector('.nav-dropdown__trigger')?.setAttribute('aria-expanded', 'false');
    });

    dropdown.classList.toggle('is-open', willOpen);
    trigger.setAttribute('aria-expanded', String(willOpen));
  });
});

document.addEventListener('click', () => {
  document.querySelectorAll('.nav-dropdown.is-open').forEach((item) => {
    item.classList.remove('is-open');
    item.querySelector('.nav-dropdown__trigger')?.setAttribute('aria-expanded', 'false');
  });
});

document.querySelector('.subscribe')?.addEventListener('submit', (event) => event.preventDefault());

const CART_STORAGE_KEY = 'berryCart';

const readCart = () => {
  try {
    return JSON.parse(localStorage.getItem(CART_STORAGE_KEY)) || null;
  } catch {
    return null;
  }
};

const writeCart = (item) => {
  if (item) localStorage.setItem(CART_STORAGE_KEY, JSON.stringify(item));
  else localStorage.removeItem(CART_STORAGE_KEY);
  updateCartBadges();
};

const formatPrice = (value) => `${Number(value).toLocaleString('ru-RU')} ₽`;

const updateCartBadges = () => {
  const item = readCart();
  document.querySelectorAll('.cart-count').forEach((badge) => {
    badge.hidden = !item;
    badge.textContent = item ? String(item.quantity) : '0';
  });
};

updateCartBadges();

const catalogGrid = document.querySelector('#catalog-grid');

if (catalogGrid) {
  const cards = [...catalogGrid.querySelectorAll('.catalog-card')];
  const count = document.querySelector('.product-count');
  const empty = document.querySelector('.catalog-empty');
  const sort = document.querySelector('#catalog-sort');
  const categoryFromUrl = new URLSearchParams(window.location.search).get('category');

  const updateCatalog = () => {
    cards.forEach((card) => {
      card.hidden = Boolean(categoryFromUrl) && card.dataset.category !== categoryFromUrl;
    });

    const visibleCards = cards.filter((card) => !card.hidden);
    const sortedCards = [...visibleCards].sort((a, b) => {
      if (sort.value === 'price-asc') return Number(a.dataset.price) - Number(b.dataset.price);
      if (sort.value === 'price-desc') return Number(b.dataset.price) - Number(a.dataset.price);
      if (sort.value === 'name') return a.querySelector('h3').textContent.localeCompare(b.querySelector('h3').textContent, 'ru');
      return cards.indexOf(a) - cards.indexOf(b);
    });
    sortedCards.forEach((card) => catalogGrid.append(card));

    count.textContent = `${visibleCards.length} ${visibleCards.length === 1 ? 'товар' : visibleCards.length < 5 ? 'товара' : 'товаров'}`;
    empty.hidden = visibleCards.length !== 0;
  };

  sort?.addEventListener('change', updateCatalog);
  updateCatalog();
}

const productPage = document.querySelector('.product-detail');

if (productPage) {
  const priceOutput = document.querySelector('[data-product-price]');
  const quantityInput = document.querySelector('#product-quantity');
  const addButton = document.querySelector('.add-to-cart');
  const buyButton = document.querySelector('.buy-now');
  const mediaButton = document.querySelector('.product-media');
  const lightbox = document.querySelector('.product-lightbox');
  const lightboxClose = document.querySelector('.product-lightbox__close');

  document.querySelectorAll('input[name="product-size"]').forEach((option) => {
    option.addEventListener('change', () => {
      priceOutput.textContent = `от ${Number(option.dataset.price).toLocaleString('ru-RU')} ₽`;
    });
  });

  document.querySelectorAll('[data-quantity-action]').forEach((button) => {
    button.addEventListener('click', () => {
      const direction = button.dataset.quantityAction === 'plus' ? 1 : -1;
      const nextValue = Math.min(20, Math.max(1, Number(quantityInput.value || 1) + direction));
      quantityInput.value = String(nextValue);
    });
  });

  quantityInput?.addEventListener('change', () => {
    quantityInput.value = String(Math.min(20, Math.max(1, Number(quantityInput.value || 1))));
  });

  const addCurrentProduct = () => {
    const selectedSize = document.querySelector('input[name="product-size"]:checked');
    const previousItem = readCart();
    const chosenQuantity = Number(quantityInput.value || 1);
    const quantity = previousItem?.size === selectedSize.value
      ? Math.min(20, previousItem.quantity + chosenQuantity)
      : chosenQuantity;

    writeCart({
      title: 'Клубника «Классика»',
      size: `${selectedSize.value} ${selectedSize.value === '24' ? 'ягоды' : 'ягод'}`,
      price: Number(selectedSize.dataset.price),
      quantity,
    });
    addButton.classList.add('is-added');
    addButton.textContent = 'Добавлено ✓';
  };

  addButton?.addEventListener('click', addCurrentProduct);
  buyButton?.addEventListener('click', () => {
    addCurrentProduct();
    window.location.href = '/cart';
  });

  const closeLightbox = () => {
    lightbox.hidden = true;
    document.body.style.overflow = '';
    mediaButton?.focus();
  };

  mediaButton?.addEventListener('click', () => {
    lightbox.hidden = false;
    document.body.style.overflow = 'hidden';
    lightboxClose?.focus();
  });
  lightboxClose?.addEventListener('click', closeLightbox);
  lightbox?.addEventListener('click', (event) => {
    if (event.target === lightbox) closeLightbox();
  });
  document.addEventListener('keydown', (event) => {
    if (event.key === 'Escape' && !lightbox.hidden) closeLightbox();
  });
}

const cartContent = document.querySelector('[data-cart-content]');

if (cartContent) {
  const emptyState = document.querySelector('[data-cart-empty]');
  const quantity = document.querySelector('[data-cart-quantity]');

  const renderCart = () => {
    const item = readCart();
    cartContent.hidden = !item;
    emptyState.hidden = Boolean(item);
    if (!item) return;

    document.querySelector('[data-cart-size]').textContent = item.size;
    document.querySelector('[data-cart-unit-price]').textContent = formatPrice(item.price);
    quantity.value = String(item.quantity);
    document.querySelector('[data-cart-line-total]').textContent = formatPrice(item.price * item.quantity);
    document.querySelector('[data-cart-total]').textContent = formatPrice(item.price * item.quantity);
  };

  document.querySelectorAll('[data-cart-action]').forEach((button) => {
    button.addEventListener('click', () => {
      const item = readCart();
      if (!item) return;
      const direction = button.dataset.cartAction === 'plus' ? 1 : -1;
      item.quantity = Math.min(20, Math.max(1, item.quantity + direction));
      writeCart(item);
      renderCart();
    });
  });

  quantity?.addEventListener('change', () => {
    const item = readCart();
    if (!item) return;
    item.quantity = Math.min(20, Math.max(1, Number(quantity.value || 1)));
    writeCart(item);
    renderCart();
  });

  document.querySelector('[data-cart-remove]')?.addEventListener('click', () => {
    writeCart(null);
    renderCart();
  });

  document.querySelector('.cart-checkout')?.addEventListener('click', (event) => {
    event.currentTarget.textContent = 'Оформление скоро появится';
  });

  renderCart();
}

document.querySelector('.contact-form')?.addEventListener('submit', (event) => {
  event.preventDefault();
  event.currentTarget.querySelector('.contact-form__status').hidden = false;
  event.currentTarget.reset();
});

// Уведомление о cookie: повторно показывается через 30 дней,
// как на исходном сайте starsboxru.
(() => {
  const getCookie = (name) => document.cookie
    .split('; ')
    .find((row) => row.startsWith(`${name}=`))
    ?.split('=')[1];

  if (getCookie('cookie_info') === '1') return;

  document.body.insertAdjacentHTML('beforeend', `
    <aside class="cookie-warning" aria-label="Уведомление о cookie">
      <p class="cookie-text">Мы используем файлы cookie для улучшения работы сайта. Оставаясь на сайте, вы соглашаетесь с нашей <a href="/policy" target="_blank" rel="noopener">политикой обработки данных</a>.</p>
      <button class="cookie-submit" type="button">Отлично!</button>
    </aside>
  `);

  document.querySelector('.cookie-submit')?.addEventListener('click', (event) => {
    document.cookie = 'cookie_info=1; max-age=2592000; path=/; SameSite=Lax';
    event.currentTarget.closest('.cookie-warning')?.remove();
  });
})();
