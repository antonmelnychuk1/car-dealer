<?php 
$car_id = get_the_ID();
$car_price = carbon_get_post_meta($car_id, 'car_price');
$car_manufacture = carbon_get_post_meta($car_id, 'car_manufacture');
$car_capacity = carbon_get_post_meta($car_id, 'car_capacity');
$car_fuel = carbon_get_post_meta($car_id, 'car_fuel');
$car_gear = carbon_get_post_meta($car_id, 'car_gear');
$car_mileage = carbon_get_post_meta($car_id, 'car_mileage');

$car_img_src = get_the_post_thumbnail_url($car_id,  'full' );

?>


        <li class="item">
        <a class="product-link" href="<?php the_permalink(); ?>" rel="external">
                <div class="box">
                    <div class="slide-img">
                        <source type="image/webp" data-srcset="<?php echo $car_img_src_webp; ?>">
                        <img src="<?php echo $car_img_src; ?>" alt="">
                    </div>
                    <div class="detail-box">
                          
                        <h4 class="slider-title" id="sliderTitle1"><?php the_title(); ?></h4>
                        <p class="slider-price"><span id="sliderPrice1"><?php echo $car_price ?></span> $</p>
                        <div class="slider-desc-container">
                            <div class="slider-year-container">
                                <p class="year" id="sliderManufacture1"><?php echo $car_manufacture ?></p>
                            </div>
                        <div class="fuel" id="sliderFuel1">
                            <p><?php echo $car_capacity ?> <?php echo $car_fuel ?></p>
                        </div>
                            <div class="gear" id="sliderGear1">
                                <p><?php echo $car_gear ?></p>
                            </div>
                        </div>
                      
                    </div>
                </div>
            </a>
        </li>             