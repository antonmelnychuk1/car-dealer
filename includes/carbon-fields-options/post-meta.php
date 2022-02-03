<?php

if (!defined('ABSPATH')) {
  exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'post_meta', 'Головна фонова фотографія сторінки' )
  ->show_on_page(10)

  ->add_tab( 'Інтро', [
      Field::make( 'text', 'intro_title', 'Заголовок' ),
      Field::make( 'image', 'intro_img', 'Фонове зображення' ),
  ]);


  Container::make( 'post_meta', 'Послуги' )
  ->show_on_page(10)
  ->add_tab( 'Поле 1', [
    Field::make( 'text', 'title_customs', 'Заголовок' ),
    Field::make( 'rich_text', 'text_customs', 'Текст' ),
    Field::make( 'image', 'img_customs1', 'Фото1' )
    ->set_width(15),
    Field::make( 'image', 'img_customs2', 'Фото2' )
    ->set_width(85),
  ])
  ->add_tab( 'Поле 2', [
    Field::make( 'text', 'title_sertifications', 'Заголовок' ),
    Field::make( 'rich_text', 'text_sertifications', 'Текст' ),
    Field::make( 'image', 'img_sertifications', 'Фото' ),
  ])
  ->add_tab( 'Поле 3', [
    Field::make( 'text', 'title_registration', 'Заголовок' ),
    Field::make( 'rich_text', 'text_registration', 'Текст' ),
    Field::make( 'image', 'img_registration1', 'Фото1' )
    ->set_width(15),
    Field::make( 'image', 'img_registration2', 'Фото2' )
    ->set_width(85),
  ])
  ->add_tab( 'Поле 4', [
    Field::make( 'text', 'title_delivery', 'Заголовок' ),
    Field::make( 'rich_text', 'text_delivery', 'Текст' ),
    Field::make( 'image', 'img_delivery1', 'Фото1' )
    ->set_width(15),
    Field::make( 'image', 'img_delivery2', 'Фото2' )
    ->set_width(85),
  ]);


  Container::make( 'post_meta', 'Калькулятор' )
  ->show_on_page(10)
  ->add_tab( 'Про калькулятор', [
    Field::make( 'text', 'title_modal_calc', 'Заголовок' ),
    Field::make( 'rich_text', 'text_calc', 'Текст' ),
  ]);

  Container::make( 'post_meta', 'Слайдер' )
  ->show_on_page(10)
  ->add_tab( 'Слайдер', [
    Field::make( 'text', 'slider_title', 'Заголовок' ),
    Field::make( 'text', 'btn_text', 'Текст кнопки' ),
    Field::make( 'association', 'catalog_products', 'Автомобілі' )
    ->set_types( [
        [
            'type'      => 'post',
            'post_type' => 'catalog',
        ]
     ] )
        
  ]);

  Container::make( 'post_meta', __( 'Фотографії', 'crb' ) )
  ->show_on_post_type('catalog')
      ->add_tab( 'Галерея', [
        Field::make( 'media_gallery', 'car_gallery', 'Галерея'  )
      ]);  
        

  Container::make( 'post_meta', 'Дані транспортного засобу' )
  ->show_on_post_type('catalog')

  ->add_tab( 'Інформація', [
    Field::make( 'text', 'car_price', 'Ціна' ),
    Field::make( 'text', 'phone_number', 'Номер телефону(+380999999999)' ),   
  ])
  ->add_tab( 'Коротка інформація', [
    Field::make( 'text', 'car_manufacture', 'Рік випуску' ),
    Field::make( 'text', 'car_mileage', 'Пробіг' ),
    Field::make( 'text', 'car_type', 'Тип кузова' ),
    Field::make( 'text', 'car_exterior', "Екстер'єр" ),
    Field::make( 'text', 'car_color', 'Колір' ),
    Field::make( 'text', 'car_capacity', 'Обєм(наприклад 2.2)' ),
    Field::make( 'text', 'car_power', 'Потужність(к.с/кВт)' ),
    Field::make( 'text', 'car_fuel', 'Паливо' ),
    Field::make( 'text', 'car_gear', 'Коробка' ),
    Field::make( 'text', 'car_wheel_drive', 'Привід' ),
    Field::make( 'text', 'car_vin', 'VIN номер' ),
  ])
  ->add_tab( 'Опис', [
    Field::make( 'rich_text', 'car_description', 'Детальніший опис' ),
    Field::make( 'rich_text', 'car_features', 'Комплектація' ),
  ]);
  
  