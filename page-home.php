<?php
/*
Template Name: Головна
*/
?>

<?php 
$page_id = get_the_ID();
$intro_id = carbon_get_post_meta( $page_id, 'intro_img' );
$intro_src = wp_get_attachment_image_url($intro_id, 'full');
$intro_src_webp = convertToWebpSrc($intro_src);
?>
 
<?php get_header(); ?>

<!-- MAIN_SECTION <------------------------------------------------------------------< -->

<div class="main-container">

  <!-- INTRO <----------------------------------------------------------------------< -->
  <div id="intro" class="intro" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/backgrounds/intro1.jpg)">
      <div class="intro-container">
        <div class="intro-logo"><img  src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/maxcar.png" alt="logo"></div>
        <h1 class="intro-logo-title"><?php echo carbon_get_post_meta( $page_id, 'intro_title' ); ?></h1>
        <div class="intro-icons">
            <div class="icon"><a href="<?php echo carbon_get_theme_option( 'site_inst_url') ?>" target="_blank"><i class="fab fa-instagram"></i></a></div>
            <div class="icon"><a href="<?php echo carbon_get_theme_option( 'site_tl_url') ?>" target="_blank"><i class="fab fa-telegram-plane"></i></a></div>
            <div class="icon"><a href="<?php echo carbon_get_theme_option( 'site_vb_url') ?>" target="_blank"><i class="fab fa-viber"></i></a></div>
        </div>
      </div>
  </div>
 
  <!-- SERVICE <----------------------------------------------------------------------< -->

  <div id="service" class="service-container" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/backgrounds/grunge-wall-texture.jpg) ;">
    <div class="service-block-title">
        <div class="service-container-title">
            <h2>Послуги</h2>
            <div>
                <hr>
            </div>
        </div>
    </div>
      <div class="service-block">

        <div class="service-logo">
          <div class="service-container-image">
            <a class="btn1 js-click-modal1"><img class="service-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/png-service/customs.png" alt=""></a>
          </div>
          <div class="service-title">
            <h3><?php echo carbon_get_post_meta( $page_id, 'title_customs' ); ?></h3>
          </div>
          <div class="modal1">
            <div class="header">
              <h3 class="modal-title">Розмитнення авто</h3>
              <a class="btn1 js-close-modal1 close-but"><p>Закрити</p></a>
            </div>
            <div class="body">
              <div class="delivery-text">
                  <?php echo carbon_get_post_meta( $page_id, 'text_customs' ); ?>
                </div>
                <div class="customs-photo">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modals/customs/photo_2021-09-10 13.03.20.jpeg" alt="image">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modals/customs/photo_2021-09-07 21.57.30.jpeg" alt="image">
                </div>
              </div>
          </div>
        </div>
      
        <div class="service-logo">
          <div class="service-container-image">
            <a class="btn2 js-click-modal2"><img class="service-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/png-service/certificarion.png" alt=""></a>
          </div>
          <div class="service-title">
            <h3><?php echo carbon_get_post_meta( $page_id, 'title_sertifications' ); ?></h3>
          </div>
          <div class="modal2">
            <div class="header">
              <h3 class="modal-title">Сертифікація</h3>
              <a class="btn2 js-close-modal2 close-but"><p>Закрити</p></a>
            </div>
            <div class="body">
              <div class="delivery-text">
                <?php echo carbon_get_post_meta( $page_id, 'text_sertifications' ); ?>
              </div> 
              <div class="certification-photo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modals/certification/photo_2021-09-14 00.46.34.jpeg" alt="image">
              </div>
            </div>
          </div>
        </div> 

        <div class="service-logo">
          <div class="service-container-image">
            <a class="btn3 js-click-modal3"><img class="service-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/png-service/registrationcar.png" alt=""></a>
          </div>
          <div class="service-title">
            <h3><?php echo carbon_get_post_meta( $page_id, 'title_registration' ); ?></h3>
          </div>
          <div class="modal3">
            <div class="header">
              <h3 class="modal-title">Постановка на облік</h3>
              <a class="btn3 js-close-modal3 close-but"><p>Закрити</p></a>
            </div>
            <div class="body">
              <div class="delivery-text">
              <?php echo carbon_get_post_meta( $page_id, 'text_registration' ); ?>
              </div>    
              <div class="registration-photo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modals/registration/photo_2021-09-10 12.46.27.jpeg" alt="image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modals/registration/photo_2021-09-10 12.46.40.jpeg" alt="image">
              </div>
            </div>
          </div>
        </div> 
      
        <div class="service-logo">
          <div class="service-container-image">
            <a class="btn4 js-click-modal4"><img class="service-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/png-service/delivery.png" alt=""></a>
          </div>
          <div class="service-title">
            <h3><?php echo carbon_get_post_meta( $page_id, 'title_delivery' ); ?></h3>
          </div>
          <div class="modal4">
            <div class="header">
              <h3 class="modal-title">Доставка</h3>
              <a class="btn4 js-close-modal4 close-but"><p>Закрити</p></a>
            </div>
            <div class="body">
              <div class="delivery-text">
              <?php echo carbon_get_post_meta( $page_id, 'text_delivery' ); ?>
              </div>    
              <div class="delivery-photo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modals/delivery/photo_2021-09-07 00.36.38.jpeg" alt="image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modals/delivery/photo_2021-09-07 00.36.59.jpeg" alt="image">
              </div>
            </div>
          </div>  
        </div>

      </div>
  </div>

  <!-- SLIDER <----------------------------------------------------------------------< -->

  <?php
    $catalog_products = carbon_get_post_meta($page_id, 'catalog_products');
    $catalog_products_ids = wp_list_pluck($catalog_products, 'id');

    $catalog_products_args = [
      'post_type' => 'catalog',
      'post__in' => $catalog_products_ids
    ];
    $catalog_products_query = new WP_Query($catalog_products_args);
    ?>
      <div id="slider-cars" class="slider">
        <h2><?php echo carbon_get_post_meta( $page_id, 'slider_title' ); ?></h2>
          <div class="slides-box">
            <ul id="autoWidth" class="cs-hidden">
              <?php if ( $catalog_products_query->have_posts() ) : ?>
    
                <?php while ( $catalog_products_query->have_posts() ) : $catalog_products_query->the_post(); ?>
                <?php echo get_template_part('product-slider'); ?>
                <?php endwhile; ?>

              <?php endif; ?>
            </ul>
          </div>
        <div class="button-container">
          <a href="<?php echo get_site_url() . '/catalog'; ?>"><button class="btn"><?php echo carbon_get_post_meta( $page_id, 'btn_text' ); ?></button></a>
        </div>
      </div>

  <!-- CALCULATOR <---------------------------------------------------------------------< -->

  <div id="calculator" class="container-calculator">
    <div class="calculator">
        
      <div class="calc-title">
          <h3>Калькулятор розмитнення</h3>
          <!-- MODAL ABOUT -->
            <a class="btn-open5 js-click-modal5"><p>?</p></a>

            <div class="container5"> 
              <div class="modal5">
                <div class="header">
                <h3 class="title-about-modal"><?php echo carbon_get_post_meta( $page_id, 'title_modal_calc' ); ?></h3>
                <a class="btn5 js-close-modal5 close-but5"><p>&#10006;</p></a>
                </div>
                <div class="body">
                  <div class="text-about-modal"><?php echo carbon_get_post_meta( $page_id, 'text_calc' ); ?></div>
                </div>
              </div>
            </div>
      </div>

      <div class="type-engine">
          <div class="type-engine-sectors">
              <div class="input-title">Тип двигуна</div>

              <div class="radio-input">
                  <input id="gasoline" checked="" type="radio" value="" class="form-check-input" data-engine-type="1" name="engine-type" tabindex="0">
                  <label for="gasoline">Бензиновий</label>
              </div>
              
              <div class="radio-input">    
                <input id="diesel" type="radio" value="" class="form-check-input" data-engine-type="2" name="engine-type" tabindex="0">
                <label for="diesel">Дизельний</label>
              </div>       

          </div>
      </div>

      <div class="year-manufacture">
          <div class="year-manufacture-sectors">
              <div class="input-title">Рік випуску</div>
              <div  class="input-group">
                  <select id="year" class="form-select" aria-label="" type="number" value="2021">
                      <option id="age" value="1">2021</option>
                      <option id="age" value="1">2020</option>
                      <option id="age" value="1">2019</option>
                      <option id="age" value="2">2018</option>
                      <option id="age" value="3">2017</option>
                      <option id="age" value="4">2016</option>
                      <option id="age" value="5">2015</option>
                      <option id="age" value="6">2014</option>
                      <option id="age" value="7">2013</option>
                      <option id="age" value="8">2012</option>
                      <option id="age" value="9">2011</option>
                      <option id="age" value="10">2010</option>
                      <option id="age" value="11">2009</option>
                      <option id="age" value="12">2008</option>
                      <option id="age" value="13">2007</option>
                      <option id="age" value="14">2006</option>
                      <option id="age" value="15">2005 та раніше</option>                   
                  </select>
              </div>
          </div>
      </div>

      <div class="engine-capacity">
          <div class="input-title">Об’єм двигуна</div>
          <div class="input-group">
              <input id="capacity" type="number" class=" form-control" value="0">
              <span class="input-group-text" id="basic-addon1">CM <sup>3</sup></span>
          </div>       
      </div>

      <div class="form-duty">
        <div class="input-title">Вартість авто</div> 
        <div class="input-group-duty">
          <input type="text" id="customsValue" name="customsValue"  class="form-control-duty" value="0" tabindex="0">
          <div class="input-group-append">
            <form action="formdata" class="form-currency" method="post" name="form1">
              <select id="currency" name="currency"  class="form-control-select" tabindex="0">  
                  <option id="eur" value="EUR" selected="selected">EUR</option>
                  <option id="usd" value="USD">USD</option>
                  <option id="pln" value="PLN">PLN</option>
                  <option id="chf" value="CHF">CHF</option>
                  
              </select>
            </form>  
          </div>
      </div>        
      </div>

      <div class="buttons-calc"> 
          <div class="buttons">
              <button id="calculate-button" class="to-calc" tabindex="0">Розрахувати</button> 
          </div>
      </div>

      <div class="price-customs">
          <div class="price">Вартість розмитнення * <span id="result" value="">0</span><sup>USD</sup></div>
      </div>
      
      <div class="note"> 
              <div class="notice">* - вартість орієнтовна (у вартість розмитнення включені
              брокерські послуги та інші витрати).
              </div>
      </div>

      <div class="container-modal-details">
        <a class="btn0 js-click-modal0">Детальніше</a>
        <div class="modal0">
          <div class="header-modal-calc">
            <h3>Результат розрахунку розмитнення</h3>
            <a class="btn0 js-close-modal0 close-but0"><p>Закрити</p></a>
          </div>
          <div class="container-result">
            <div class="body">
              <ul>
                  <li>
                      <div class="valute">Валюта</div>
                      <div class="result result-valute" id="result-valute">USD: 00.00 <br> EUR: 00.00</div>
                  </li>
                  <li>
                      <div>Митна вартість</div>
                      <div class="result"><span id="tax-price">0</span><span id="tax-price-valute"> USD</span></div>
                  </li>
                  <li>
                      <div>Мито</div>
                      <div class="result"><span id="tax">0</span> USD</div>
                  </li>
                  <!-- <li>
                      <div>Вік авто</div>
                      <div class="result"><span id="years-old">0</span> р.</div>
                  </li> -->
                  <li>
                      <div>Ставка</div>
                      <div class="result"><span id="tax-rate">0</span> EUR</div>
                  </li>
                  <li>
                      <div>Акциз</div>
                      <div class="result"><span id="excise-price">0</span> EUR</div>
                  </li>
                  <li>
                      <div>ПДВ</div>
                      <div class="result"><span id="tax-vat">0</span> EUR</div>
                  </li>
                  <li class="tax-sum">
                      <div>Сума платежів</div>
                      <div class="result"><span id="tax-sum">0</span> USD</div>
                  </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      
    </div>
    
    <div class="about-calc">
      <h3><?php echo carbon_get_post_meta( $page_id, 'title_modal_calc' ); ?></h3>
      <div><?php echo carbon_get_post_meta( $page_id, 'text_calc' ); ?></div>
    </div>
  </div>
      
  <!-- CONTACTS <-----------------------------------------------------------------------< -->

  <div id="contacts" class="contacts-block">
    <div class="contacts-container">
        <div class="contact-section"> 
                <h4>Звяжіться з нами</h4>
            <div class="contact-block">
                <div class="contact">
                    <span class="contacts-section-type"><i class="fa fa-phone-square" aria-hidden="true"></i></span>
                    <a class="contacts-section-link" href="tel:<?php echo carbon_get_theme_option( 'site_phone_digits') ?>"><?php echo carbon_get_theme_option( 'site_phone') ?></a> 
                </div>
        
                <div class="contact">
                    <span class="contacts-section-type"><i class="fa fa-envelope-square" aria-hidden="true"></i></span>
                    <a class="contacts-section-link" href="mailto:mcar.com.ua@gmail.com">mcar.com.ua@gmail.com</a> 
                </div>

                <div class="contact">
                    <span class="contacts-section-type"><i class="fa fa-road" aria-hidden="true"></i></span>
                    <p class="contacts-section-adress">
                    <?php echo carbon_get_theme_option( 'site_address') ?>
                    </p>
                </div>  
            </div>    
        </div>

        <div class="map"> 
            <iframe src="<?php echo carbon_get_theme_option( 'site_map_coordinates') ?>"  allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>   
  </div>

</div> 

<?php get_footer(); ?>


  <!-- ENDPAGE <----------------------------------------------------------------------< -->