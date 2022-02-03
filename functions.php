<?php

add_filter('show_admin_bar', '__return_false');

remove_action('wp_head',             'print_emoji_detection_script', 7 );
remove_action('admin_print_scripts', 'print_emoji_detection_script' );
remove_action('wp_print_styles',     'print_emoji_styles' );
remove_action('admin_print_styles',  'print_emoji_styles' );

remove_action('wp_head', 'wp_resource_hints', 2 ); //remove dns-prefetch
remove_action('wp_head', 'wp_generator'); //remove meta name="generator"
remove_action('wp_head', 'wlwmanifest_link'); //remove wlwmanifest
remove_action('wp_head', 'rsd_link'); // remove EditURI
remove_action('wp_head', 'rest_output_link_wp_head');// remove 'https://api.w.org/
remove_action('wp_head', 'rel_canonical'); //remove canonical
remove_action('wp_head', 'wp_shortlink_wp_head', 10); //remove shortlink
remove_action('wp_head', 'wp_oembed_add_discovery_links'); //remove alternate

remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );

add_action('wp_enqueue_scripts', 'site_scripts');
function site_scripts() {
  $version = '1.0.0.0';
  wp_dequeue_style( 'wp-block-library' );
  wp_deregister_script( 'wp-embed' );

  // Styles
  wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css', [], $version);
  wp_enqueue_style('footer', get_template_directory_uri() . '/assets/css/footer.css', [], $version);
  wp_enqueue_style('responsive-main', get_template_directory_uri() . '/assets/css/responsive-main.css', [], $version);
  wp_enqueue_style('lightslider', get_template_directory_uri() . '/assets/css/lightslider.css', [], $version);
  wp_enqueue_style('modal', get_template_directory_uri() . '/assets/css/modal.css', [], $version);
  
  wp_enqueue_style('google_fonts', 'https://fonts.googleapis.com/css2?family=Nunito:wght@300;600&display=swap', [], $version);
  wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css',  [], $version);
  

  // Scripts
  wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.js', [], $version, true);
  wp_enqueue_script('burger-menu', get_template_directory_uri() . '/assets/js/burger-menu.js', [], $version, true);
  wp_enqueue_script('anchor', get_template_directory_uri() . '/assets/js/anchor.js', [], $version, true);
  wp_enqueue_script('calculator', get_template_directory_uri() . '/assets/js/calculator.js', [], $version, true);
  wp_enqueue_script('lightslider', get_template_directory_uri() . '/assets/js/lightslider.js', [], $version, true);
  wp_enqueue_script('slider', get_template_directory_uri() . '/assets/js/slider.js', [], $version, true);
  wp_enqueue_script('modal', get_template_directory_uri() . '/assets/js/modal.js', [], $version, true);
 
}


add_action( 'after_setup_theme', 'theme_support' );
function theme_support() {
  add_theme_support('post-thumbnails');
  // add_image_size('product', 500, 313, true);
}


add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
    require_once( 'includes/carbon-fields/vendor/autoload.php' );
    \Carbon_Fields\Carbon_Fields::boot();
}

add_action('carbon_fields_register_fields', 'register_carbon_fields');
function register_carbon_fields() {
  require_once( 'includes/carbon-fields-options/theme-options.php' );
  require_once( 'includes/carbon-fields-options/post-meta.php' );
}
function convertToWebpSrc($src) {
  $src_webp = $src . '.webp';
  return str_replace('uploads', 'uploads-webpc', $src_webp);
}
add_action( 'init', 'register_post_types' );
function register_post_types() {
  register_post_type('catalog', [
    'labels' => [
      'name'               => 'Автомобілі', // основное название для типа записи
      'singular_name'      => 'Авто', // название для одной записи этого типа
      'add_new'            => 'Додати авто', // для добавления новой записи
      'add_new_item'       => 'Нове авто', // заголовка у вновь создаваемой записи в админ-панели.
      'edit_item'          => 'Редагування', // для редактирования типа записи
      'new_item'           => 'Нове авто', // текст новой записи
      'view_item'          => 'Подивитися авто', // для просмотра записи этого типа.
      'search_items'       => 'Шукати', // для поиска по этим типам записи
      'not_found'          => 'Не знайдено', // если в результате поиска ничего не было найдено
      'not_found_in_trash' => 'Не знайдено в корзині', // если не было найдено в корзине
      'menu_name'          => 'Каталог', // название меню
    ],
    'menu_icon'          => 'dashicons-car',
    'public'             => true,
    'menu_position'      => 5,
    'supports'           => ['title', 'thumbnail'],
    'has_archive'        => true,
    // 'rewrite'            => ['slug' => 'katalo']
   ] );
}


function sanitize_pagination($content) {
  // Remove h2 tag
  $content = preg_replace('#<h2.*?>(.*?)<\/h2>#si', '', $content);
  return $content;
}
add_action('navigation_markup_template', 'sanitize_pagination');


 