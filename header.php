
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     
    <meta name="google-site-verification" content="A41bhwEdOu_dsksMSjuvPT-W7MXJ3ISK1Ya2Pg2O_7E" />
    <meta name="description" content="Автомайданчик. Розмитнення. Сертифікація. Реєстрація. Доставка. Авто з Америки. Авто з Європи. Продаж авто привезених з-за кордону.">
    <meta name="keywords" content="Автомайданчик. Розмитнення. Сертифікація. Реєстрація. Доставка. Авто з Америки. Авто з Європи. Купити авто. Рівне.  ">

    <meta property="og:title" content="MAX-CAR Автомайданчик" >
    <meta property="og:description" content="Автомайданчик. Розмитнення. Сертифікація. Реєстрація. Доставка. Авто з Америки. Авто з Європи. Продаж авто привезених з-за кордону." >
    <meta property="og:image" content="image/backgrounds/intro1.jpg" >
    
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/icons/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffc40d">
    <meta name="theme-color" content="#ffffff">

    <title>MAX-CAR - Автомайданчик. Розмитнення. Сертифікація. Реєстрація. Доставка.</title>
    
    <?php wp_head(); ?>
</head>
<body>


<!-- HEADER <----------------------------------------------------------------------< -->

<header id="header" class="header">

      <div class="header-logo">
        <a href="https://www.max-car.com.ua/"><img src="<?php echo wp_get_attachment_image_url(carbon_get_theme_option( 'site_logo' )); ?>"></a>
      </div>

      <ul class="header-nav">
        <li><a class="header-nav-link" href="#intro">Головна</a></li>
        <li><a class="header-nav-link" href="#service">Послуги</a></li>
        <li><a class="header-nav-link" href="<?php echo get_site_url() . '/catalog'; ?>">Автомобілі</a></li>
        <li><a class="header-nav-link" href="#calculator">Калькулятор</a></li>
        <li><a class="header-nav-link" href="#contacts">Контакти</a></li>
      </ul>

      <div class="burger-menu">
        <a href="" class="burger-menu_button">
          <span class="burger-menu_lines"></span>
        </a>
        <nav class="burger-menu_nav">
          <a href="#intro" class="burger-menu_link">Головна</a>
          <a href="#service" class="burger-menu_link">Послуги</a>
          <a href="<?php echo get_site_url() . '/catalog'; ?>" class="burger-menu_link">Автомобілі</a>
          <a href="#calculator" class="burger-menu_link">Калькулятор</a>
          <a href="#contacts" class="burger-menu_link">Контакти</a>
        </nav>
        <div class="burger-menu_overlay"></div>
      </div>

</header>