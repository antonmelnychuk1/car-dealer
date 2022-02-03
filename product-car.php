<?php 
$car_id = get_the_ID();
$car_price = carbon_get_post_meta($car_id, 'car_price');
$car_manufacture = carbon_get_post_meta($car_id, 'car_manufacture');
$car_mileage = carbon_get_post_meta($car_id, 'car_mileage');
$car_type = carbon_get_post_meta($car_id, 'car_type');
$car_exterior = carbon_get_post_meta($car_id, 'car_exterior');
$car_color = carbon_get_post_meta($car_id, 'car_color');
$car_capacity = carbon_get_post_meta($car_id, 'car_capacity');
$car_power = carbon_get_post_meta($car_id, 'car_power');
$car_fuel = carbon_get_post_meta($car_id, 'car_fuel');
$car_gear = carbon_get_post_meta($car_id, 'car_gear');
$car_wheel_drive = carbon_get_post_meta($car_id, 'car_wheel_drive');
$car_vin = carbon_get_post_meta($car_id, 'car_vin');
$car_description = carbon_get_post_meta($car_id, 'car_description');
$car_features = carbon_get_post_meta($car_id, 'car_features');
$phone_number = carbon_get_post_meta($car_id, 'phone_number');

?> 

       <div class="main-content">
            <div class="arrow">
                <a class="arrow-back" href="<?php echo get_site_url() . '/catalog'; ?>"><i class="fas fa-arrow-alt-circle-left"></i>Повернутися до каталогу</a>
            </div>
            <div class="main-content-section">

                <div class="slider">
                    <div class="header-section">
                        <div class="slider-header">
                            <div class="arrow">
                                <a class="arrow-back" href="<?php echo get_site_url() . '/catalog'; ?>"><i class="fas fa-arrow-alt-circle-left"></i></a>
                            </div>
                            <div class="title-fotorama">
                                <div><h2><?php the_title(); ?></h2></div>
                                <span><?php echo $car_manufacture ?> • <?php echo $car_capacity ?> <?php echo $car_fuel ?> • <?php echo $car_gear ?></span> 
                            </div>
                        </div>
                    </div>
                    
                    <div class="fotorama"
                        data-allowfullscreen="true" data-nav="thumbs" data-loop="true" data-keyboard="true" data-arrows="true"
                        data-click="true" data-swipe="true" data-trackpad="true"> 
                            <?php $slides = carbon_get_post_meta($car_id, 'car_gallery');
                                foreach ($slides as $slide):
                            ?>
                            <img src="<?php echo wp_get_attachment_image_url($slide, 'full'); ?>" alt="Image">
                        <?php endforeach; ?>
                    </div>
                    <ul class="tabs" role="tablist">
                        <li>
                            <input type="radio" name="tabs" id="tab1" checked />
                            <label class="label-new" for="tab1" 
                                role="tab" 
                                aria-selected="true" 
                                aria-controls="panel1" 
                                tabindex="0">Опис</label>
                            <div id="tab-content1" 
                                class="tab-content" 
                                role="tabpanel" 
                                aria-labelledby="description" 
                                aria-hidden="false">
                                <div class="tabs-description">
                                    <?php echo $car_description ?>
                                </div>
                            </div>
                        </li>
                    
                        <li>
                            <input type="radio" name="tabs" id="tab2" />
                            <label class="label-new" for="tab2"
                                role="tab" 
                                aria-selected="false" 
                                aria-controls="panel2" 
                                tabindex="0">Комплектація</label>
                            <div id="tab-content2" 
                                class="tab-content"
                                role="tabpanel" 
                                aria-labelledby="specification" 
                                aria-hidden="true">
                                <div class="features-list">
                                    <div class="features-list-item">   
                                        <?php echo $car_features ?>
                                    </div> 
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="main-desctiption">
                    <div class="title-desc">
                        <h1 class="title car-title" id="carTitle"><?php the_title(); ?></h1>
                        <div class="subtitle">
                            <span><?php echo $car_manufacture ?></span> •
                            <span><?php echo $car_capacity ?> <?php echo $car_fuel ?></span> •
                            <span><?php echo $car_gear ?></span>
                        </div>  
                        <div class="car-prices">
                            <span class="price-dol"><span" id="exchangeDol"><?php echo $car_price ?></span><span class="symbol-dol"> $</span></span>
                            <br>
                            <span class="euro"><span id="exchangeEur">0000</span> €</span>
                            <span class="point">•</span>
                            <span class="hrn"><span id="exchangeHrn">0000</span> грн</span>			
                            <a id="exchange-rate" class="exchange-rate" href="https://bank.gov.ua/ua/markets/exchangerates" target="_blank" rel="external" class="hide-in-print get-currency open-popup-form dashed-link" data-type="exchange_rates"> Курс валют</a>
                        </div>
                        <div class="share">
                             <!-- Go to www.addthis.com/dashboard to customize your tools --> 
                             <div class="addthis_inline_share_toolbox_ky1b"></div>
                         </div>
                    </div>

                    <div class="about">  
                        <div class="sidebar-description">
                            <ul>
                                <li class="manufacture">
                                    <div>
                                        Рік випуску
                                    </div>
                                    <div>
                                        <?php echo $car_manufacture ?>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        Пробіг
                                    </div>
                                    <div id="carMileage">
                                        <?php echo $car_mileage ?> км
                                    </div>
                                </li>                          
                                <li>
                                    <div>
                                        Кузов
                                    </div>
                                    <div>
                                        <?php echo $car_type ?>
                                    </div>
                                </li>                                 
                                <li>
                                    <div>
                                        Екстер'єр
                                    </div>
                                    <div>
                                        <?php echo $car_exterior ?>
                                    </div>
                                </li>                                      
                                <li>
                                    <div>
                                        Колір
                                    </div>
                                    <div>
                                        <?php echo $car_color ?>
                                    </div>
                                </li>                                     
                                <li>
                                    <div>
                                        Об‘єм
                                    </div>
                                    <div>
                                        <?php echo $car_capacity ?> л
                                    </div>
                                </li> 
                                <li>
                                    <div>
                                        Потужність
                                    </div>
                                    <div>
                                        <?php echo $car_power ?>
                                    </div>
                                </li>                               
                                <li>
                                    <div>
                                       Паливо 
                                    </div>
                                    <div>
                                        <?php echo $car_fuel ?>
                                    </div>
                                </li>                                    
                                <li>
                                    <div>
                                        Коробка
                                    </div>
                                    <div>
                                        <?php echo $car_gear ?>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        Привід
                                    </div>
                                    <div>
                                        <?php echo $car_wheel_drive ?>
                                    </div>
                                </li>
                                <li class="vin">
                                    <div>
                                        VIN номер
                                    </div>
                                    <div>
                                        <?php echo $car_vin ?>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="call">
                            <a class="phone-number" id='phoneNumber' href="tel:<?php echo $phone_number ?>"><i class="fa fa-phone " aria-hidden="true"></i> <?php echo $phone_number ?> </a>
                        </div>
                    </div>

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
            </div>

            <!-- ////////////////////////////////// -->
      
            <div class="container-description">                        
                <div class="main-desctiption">
                    
                    <div class="title-desc">
                        <h1 class="title"><?php the_title(); ?></h1>
                        <div class="subtitle">
                            <span><?php echo $car_manufacture ?></span> •
                            <span><?php echo $car_capacity ?> <?php echo $car_fuel ?></span> •
                            <span><?php echo $car_gear ?></span>
                        </div>
                        
                        <div class="car-prices">
                            <span class="price-dol"><span id="exchangeDol2"><?php echo $car_price ?></span>  $</span>
                            <br>
                            <span class="euro"><span id="exchangeEur2">0000</span> €</span>
                            <span class="point">•</span>
                            <span class="hrn"><span id="exchangeHrn2">0000</span> грн</span>			
                            <a href="https://bank.gov.ua/ua/markets/exchangerates" target="_blank" rel="external" class="get-currency" data-type="exchange_rates"> Курс валют</a>
                        </div>

                        <div class="share">
                            <!-- Go to www.addthis.com/dashboard to customize your tools --> 
                            <div class="addthis_inline_share_toolbox_ky1b"></div>
                        </div>
                        <div class="call">
                            <a class="call-button" id='phoneNumber' href="tel:<?php echo $phone_number ?>"><i class="fa fa-phone " aria-hidden="true"></i> <?php echo $phone_number ?> </a>
                        </div>
                    </div>

                    <div class="about">
                        <div class="sidebar-description">
                            <ul>
                                <li class="manufacture">
                                    <div>
                                        Рік випуску
                                    </div>
                                    <div>
                                        <?php echo $car_manufacture ?>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        Пробіг
                                    </div>
                                    <div id="mileage">
                                        <?php echo $car_mileage ?> км
                                    </div>
                                </li>                          
                                <li>
                                    <div>
                                        Кузов
                                    </div>
                                    <div>
                                        <?php echo $car_type ?>
                                    </div>
                                </li>                                 
                                <li>
                                    <div>
                                        Екстер'єр
                                    </div>
                                    <div>
                                        <?php echo $car_exterior ?>
                                    </div>
                                </li>                                      
                                <li>
                                    <div>
                                        Колір
                                    </div>
                                    <div>
                                        <?php echo $car_color ?>
                                    </div>
                                </li>                                     
                                <li>
                                    <div>
                                        Об‘єм
                                    </div>
                                    <div>
                                        <?php echo $car_capacity ?> л
                                    </div>
                                </li> 
                                <li>
                                    <div>
                                        Потужність
                                    </div>
                                    <div>
                                        <?php echo $car_power ?>
                                    </div>
                                </li>                               
                                <li>
                                    <div>
                                       Паливо 
                                    </div>
                                    <div>
                                        <?php echo $car_fuel ?>
                                    </div>
                                </li>                                    
                                <li>
                                    <div>
                                        Коробка
                                    </div>
                                    <div>
                                        <?php echo $car_gear ?>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        Привід
                                    </div>
                                    <div>
                                        <?php echo $car_wheel_drive ?>
                                    </div>
                                </li>
                                <li class="vin">
                                    <div>
                                        VIN номер
                                    </div>
                                    <div>
                                        <?php echo $car_vin ?>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="call">
                            <a class="phone-number" id='phoneNumber' href="tel:<?php echo $phone_number ?>"><i class="fa fa-phone " aria-hidden="true"></i> <?php echo $phone_number ?> </a>
                        </div>
                    </div>
                </div>
                
                <div class="tabs">
                    <input type="radio" name="tab-btn" id="tab-btn-1" value="" checked>
                    <label for="tab-btn-1">ОПИС</label>
                    <input type="radio" name="tab-btn" id="tab-btn-2" value="">
                    <label for="tab-btn-2">КОМПЛЕКТАЦІЯ</label>
                    
                   
                    <div id="content-1">
                        <div class="tabs-description">
                            <?php echo $car_description ?>
                        </div>
                    </div>
                    <div id="content-2">
                        <div class="features-list">
                            <div class="features-list-item">   
                                <?php echo $car_features ?>
                            </div> 
                        </div>
                    </div>
                </div>

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
        </div>