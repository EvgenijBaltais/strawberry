<?php
$variant = $_GET['variant'] ?? 'bold';
if (!is_string($variant) || !in_array($variant, ['bold', 'sport', 'festive', 'bubbles'], true)) {
  $variant = 'bold';
}
?>
<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#fffdfb">
  <title>Скоро открытие! — Berry</title>
  <link rel="icon" href="/assets/favicon.ico?v=20261022a" sizes="any">
  <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicon-32.png?v=20261022a">
  <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicon-180.png?v=20261022a">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&amp;family=Lobster&amp;family=Rubik+Bubbles&amp;family=Russo+One&amp;display=swap" rel="stylesheet">
  <style>
    * { box-sizing: border-box; }
    body {
      min-height: 100vh;
      min-height: 100svh;
      margin: 0;
      display: grid;
      place-items: center;
      background: #fffdfb;
      font-family: Arial, sans-serif;
    }
    .launch {
      width: 100%;
      padding: 32px 20px;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      gap: clamp(16px, 3vh, 28px);
      text-align: center;
    }
    .launch__logo {
      display: block;
      width: min(460px, 76vw);
      max-height: 65svh;
      height: auto;
      object-fit: contain;
    }
    .launch__title {
      margin: 0;
      max-width: 100%;
      font-size: 40px;
      line-height: 1.22;
      text-wrap: balance;
      color: #b7343b;
      background-size: 280% 100%;
      background-clip: text;
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      animation: color-flow 14s ease-in-out infinite alternate;
    }
    .theme-bold .launch__title {
      font-family: 'Dela Gothic One', Arial, sans-serif;
      letter-spacing: -.035em;
      background-image: linear-gradient(105deg, #a0145a 0%, #e74624 28%, #bb7900 55%, #087f8b 80%, #a0145a 100%);
      filter: drop-shadow(0 5px 0 rgba(106, 28, 55, .18));
    }
    .theme-sport .launch__title {
      font-family: 'Russo One', Arial, sans-serif;
      letter-spacing: .015em;
      background-image: linear-gradient(105deg, #5c2b29 0%, #bf1f45 34%, #c87900 68%, #5c2b29 100%);
      filter: drop-shadow(0 4px 0 rgba(92, 43, 41, .18));
    }
    .theme-festive .launch__title {
      font-family: Lobster, Georgia, serif;
      letter-spacing: .01em;
      background-image: linear-gradient(105deg, #b60f69 0%, #e14e35 30%, #a36100 60%, #087a9b 85%, #b60f69 100%);
      filter: drop-shadow(0 4px 0 rgba(159, 26, 82, .18));
    }
    .theme-bubbles .launch__title {
      font-family: 'Rubik Bubbles', Arial, sans-serif;
      letter-spacing: .01em;
      background-image: linear-gradient(100deg, #8c3e30 0%, #db3153 28%, #bd7b10 54%, #168b91 78%, #8c3e30 100%);
      animation-duration: 20s;
    }
    @keyframes color-flow {
      from { background-position: 0% 50%; }
      to { background-position: 100% 50%; }
    }
    @media (max-width: 600px) {
      .launch { padding: 24px 16px; }
      .launch__logo { width: min(380px, 82vw); max-height: 60svh; }
      .launch__title { font-size: clamp(24px, 6.5vw, 34px); }
    }
    @media (prefers-reduced-motion: reduce) {
      .launch__title { animation: none; }
    }
  </style>
</head>
<body class="theme-<?= $variant ?>">
  <main class="launch">
    <img class="launch__logo" src="assets/logo-strawberry-chocolate-wave-short.png" alt="Весёлая клубника на серфборде и короткой шоколадной волне">
    <h1 class="launch__title">Скоро открытие!</h1>
  </main>
</body>
</html>
