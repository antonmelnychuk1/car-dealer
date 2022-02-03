<?php

if (!defined('ABSPATH')) {
    exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'theme_options', 'Налаштування сайту' )
  ->add_tab( 'Загальні налаштування', [
      Field::make( 'image', 'site_logo', 'Логотип' ),
      Field::make( 'image', 'site_logo2', 'Логотип 2' ),
      Field::make( 'text', 'site_text_footer', 'Текст в підвалі' ),
  ])

  ->add_tab( 'Контакти', [
    Field::make( 'text', 'site_phone', 'Телефон(як буде відображатись)' ),
    Field::make( 'text', 'site_phone_digits', 'Телефон без відступів в форматі +380999999999' ),
    Field::make( 'text', 'site_address', 'Адреса' ),
    Field::make( 'text', 'site_map_coordinates', 'Координати карти( Google карта > поставити точку > поділитися > вставити карту > скопіювати https://...)' ),
    Field::make( 'text', 'site_inst_url', 'Інстаграм' ),
    Field::make( 'text', 'site_tl_url', 'Телеграм' ),
    Field::make( 'text', 'site_vb_url', 'Вайбер' ),
    
  ]);
  

