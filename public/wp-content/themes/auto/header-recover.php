<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.4/jquery.rateyo.min.css"
    integrity="sha512-JEUoTOcC35/ovhE1389S9NxeGcVLIqOAEzlpcJujvyUaxvIXJN9VxPX0x1TwSo22jCxz2fHQPS1de8NgUyg+nA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" href="./css/reset.css">
  <link rel="stylesheet" href="./css/fonts.css">
  <link rel="stylesheet" href="./css/style.css"> -->
  <title>{finsweet</title>
</head>

<body id="body">
  <header class="header">
    <div class="container">
      <a href="" class="burger"><span></span></a>
      <div class="overlay__window"></div>
      <div class="header__top">
        <div class="header__logo">
          <?php the_custom_logo()?>
        </div>
        <div class="header__box">
          <nav class="header__nav">
            <a href="#body">Home</a>
            <a href="#about">About us</a>
            <a href="#services">Services</a>
            <a href="#blog">Blog</a>
            <a href="#contact">Contact</a>
          </nav>
          <span class="header__line"></span>
          <div class="header__contact">
            <span class="header__caption">Road Assistance</span>
            <?php 
$phone = get_field('phone', 8); // Получаем значение поля
$phone_number = intval(preg_replace('/\D/', '', $phone)); // Удаляем все символы, кроме цифр
?>
            <span class="header__phone"><a href="tel:<?php echo $phone_number ?>"><?php echo $phone?></a></span>
          </div>
        </div>
      </div>
    </div>
  </header>