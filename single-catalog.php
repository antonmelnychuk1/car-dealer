<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     
    <meta name="google-site-verification" content="A41bhwEdOu_dsksMSjuvPT-W7MXJ3ISK1Ya2Pg2O_7E" />
    <meta name="description" content="MAX-CAR - Автомайданчик">
    <meta name="keywords" content="автомобілі">

    <meta property="og:title" content="MAX-CAR - Автомайданчик" />
    <meta property="og:description" content="MAX-CAR - Автомайданчик" />
    <meta property="og:image" content="image/backgrounds/intro1.jpg" />
    
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/icons/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffc40d">
    <meta name="theme-color" content="#ffffff">
    
    <title><?php the_title(); ?></title>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/header-bw.css?v=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/car-page.css?v=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/footer.css?v=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive-car-page.css?v=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/preloader.css?v=1.0">
    <link rel="stylesheet" type="text/css" media="print" href="<?php echo get_template_directory_uri(); ?>/assets/css/print.css?v=1.0">    
    
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;600&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">   
    <link  href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">    				
</head>

<body>

    <!-- HEADER <-----------------------------------------------------------< -->

    <header class="header">
        
        <div class="header-body-logo">
            <a class="header-logo-catalog" href="https://www.max-car.com.ua/">
                <img src="<?php echo wp_get_attachment_image_url( carbon_get_theme_option('site_logo2'), 'full' ); ?>">
            </a>
        </div>
            
                
        <ul class="header-nav">
            <li><a class="header-nav-link" href="https://www.max-car.com.ua">Головна</a></li>
            <li><a class="header-nav-link" href="https://www.max-car.com.ua#service">Послуги</a></li>
            <li><a class="header-nav-link" href="<?php echo get_site_url() . '/catalog'; ?>">Автомобілі</a></li>
            <li><a class="header-nav-link" href="https://www.max-car.com.ua#calculator">Калькулятор</a></li>
            <li><a class="header-nav-link" href="https://www.max-car.com.ua#contacts">Контакти</a></li>
        </ul>

         <div class="burger-menu">
            <a href="" class="burger-menu_button">
                <span class="burger-menu_lines"></span>
            </a>
            <nav class="burger-menu_nav">
                <a href="https://www.max-car.com.ua" class="burger-menu_link">Головна</a>
                <a href="https://www.max-car.com.ua#service" class="burger-menu_link">Послуги</a>
                <a href="<?php echo get_site_url() . '/catalog'; ?>" class="burger-menu_link">Автомобілі</a>
                <a href="https://www.max-car.com.ua#calculator" class="burger-menu_link">Калькулятор</a>
                <a href="https://www.max-car.com.ua#contacts" class="burger-menu_link">Контакти</a>
            </nav>
            <div class="burger-menu_overlay"></div>
        </div>
                 
    </header>

    <!-- MAIN <-----------------------------------------------------------< -->

    <div class="main" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/backgrounds/background-white.png);">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <?php echo get_template_part('product-car'); ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
    
    <!-- FOOTER <----------------------------------------------------------------------< -->

    <footer id="footer" class="footer">
        <div class="footer-content">
            <div class="intro-icons-footer anchor">
                <a href="<?php echo carbon_get_theme_option( 'site_inst_url') ?>" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="<?php echo carbon_get_theme_option( 'site_tl_url') ?>" target="_blank"><i class="fab fa-telegram-plane"></i>
                <a href="<?php echo carbon_get_theme_option( 'site_vb_url') ?>" target="_blank"><i class="fab fa-viber"></i></a>
                </div>
            <div><p><?php echo carbon_get_theme_option( 'site_text_footer') ?></p></div>
        </div>
    </footer>

    <!-- PRELOADER <-----------------------------------------------------------< -->

    <div id="preloader" class="preloader">
        <div class="loading-window">
            <div class="car">
                <div class="strike"></div>
                <div class="strike strike2"></div>
                <div class="strike strike3"></div>
                <div class="strike strike4"></div>
                <div class="strike strike5"></div>
                <div class="car-detail spoiler"></div>
                <div class="car-detail back"></div>
                <div class="car-detail center"></div>
                <div class="car-detail center1"></div>
                <div class="car-detail front"></div>
                <div class="car-detail wheel"></div>
                <div class="car-detail wheel wheel2"></div>
            </div>
            <div class="text">
                <span class="loading">Завантаження</span><span class = "dots">...</span>
            </div>
        </div>
    </div> 

    <!-- ENDPAGE <-----------------------------------------------------------< -->
    
    <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/js/jquery.js?v=1.0'></script>
    <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/js/anchor.js?v=1.0'></script>
    <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/js/preloader.js?v=1.0'></script>
    <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/js/burger-menu.js?v=1.0'></script>
    <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/js/get-currencies.js?v=1.0'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script> 
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-6157a30b29383046"></script>
    
</body>
</html>