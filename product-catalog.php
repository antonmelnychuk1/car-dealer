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

<li class="car-list-item">
    <a  href="<?php the_permalink();?>" rel="external">
        <div class="car-section">
            <div class="car-photo">
            <img src="<?php echo $car_img_src; ?>" alt="">
            </div>
            <div class="car-description">
                <div class="car-characteristic">
                    <h4><?php the_title(); ?></h4>
                    <p><?php echo $car_manufacture ?> рік &#8226; <?php echo $car_mileage ?> км</p>
                    <p><?php echo $car_capacity ?> <?php echo $car_fuel ?></p>
                </div>
                <div class="car-price">
                    <div>
                        <p class="price-dol"><span id="dol-catalog"><?php echo $car_price ?></span>$</p>
                    </div>
                </div>
            </div>
        </div>
    </a>   
</li>


