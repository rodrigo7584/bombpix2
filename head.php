<?php
$lang = isset($_GET['lang']) ? $_GET['lang'] : 'pt';

$translations = include 'lang/' . $lang . '.php';

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Primary Meta Tags -->
  <title>
    <?php echo isset($translations['header']['page-title']) ? $translations['header']['page-title'] : '404' ?>
  </title>
  <meta name="title" content="BOMB PIX - Detone. enriqueça. domine. " />
  <meta name="description" content="O jogo explosivo que transforma suas vitórias em riquezas reais!" />

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website" />
  <meta property="og:url" content="#" />
  <meta property="og:title" content="BOMB PIX - Detone. enriqueça. domine. " />
  <meta property="og:description" content="O jogo explosivo que transforma suas vitórias em riquezas reais!" />
  <meta property="og:image" content="./img/logo.png" />

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image" />
  <meta property="twitter:url" content="#" />
  <meta property="twitter:title" content="BOMB PIX - Detone. enriqueça. domine. " />
  <meta property="twitter:description" content="O jogo explosivo que transforma suas vitórias em riquezas reais!" />
  <meta property="twitter:image" content="./img/logo.png" />

  <!-- Meta Tags Generated with https://metatags.io -->

  <link rel="icon" type="image/png" href="./img/favicon-32.png" sizes="32x32" />
  <link rel="icon" type="image/png" href="./img/favicon-16.png" sizes="16x16" />

  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
  <link rel="stylesheet" href="./styles/styles.css" />
</head>

<body>
  <div class="loader-wrapper">
    <img src="./img/logo-loader.png" alt="" />
    <div class="loader"></div>
  </div>