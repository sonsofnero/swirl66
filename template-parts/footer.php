
<footer class="container bg-chocolate gx-0">
  <div class="footer">
    <div class="footer__left">
      <a href="" class="footer__logo">Maple Ridge Grocer</a>
    </div>

    <div class="footer__right">
      <ul class="footer__nav">
        <li><a href="tel:<?php echo the_field('phone_number',
            'option') ?>" class="phone-number"><?php echo the_field('phone_number',
            'option') ?></a></li>
        <li><a href="<?php echo the_field('instagram', 'option') ?>">Instagram</a></li>
        <!-- <li><a href="<?php echo the_field('facebook', 'option') ?>">Facebook</a></li> -->
      </ul>
      <span class="body--sm">Copyright © <?php echo date('Y') ?> Bishop Quigley</span>
    </div>
  </div>
</footer>

<div class="container location-bar">
  <div class="location-bar__container">
    <span class="heading sans--bold">More Entities:</span>

    <div class="swiper location-bar-swiper">
      <div class="swiper-wrapper">
        <a href="https://fasslerhall.com/" class="swiper-slide slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/fassler-sm.svg"></a>
        <a href="https://dustbowllounge.com/" class="swiper-slide slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/dustbowl-sm.svg"></a>
        <a href="https://yokozunasushi.com/" class="swiper-slide slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/yokozuna-sm.svg"></a>
        <a href="https://dillydiner.com/" class="swiper-slide slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/dillydiner-sm.svg"></a>
        <a href="https://howdyburger.com/" class="swiper-slide slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/howdy-sm.svg"></a>
        <a href="https://taverntulsa.com/" class="swiper-slide slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/tavern-sm.svg"></a>
        <a href="https://wildforktulsa.com//" class="swiper-slide slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/wildfork-sm.svg"></a>
        <a href="https://elginparkbrewery.com/" class="swiper-slide slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/elgin-sm.svg"></a>
        <a href="https://mcnellies.com/" class="swiper-slide slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/mcnellies-sm.svg"></a>
        <a href="https://bullinthealley.com/" class="swiper-slide slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/bull-sm.svg"></a>
        <a href="http://fantasticmrkims.com/" class="swiper-slide slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/mrkims-sm.svg"></a>
        <a href="https://bishopquigley.com/" class="swiper-slide slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/bishopquigley-sm.svg"></a>
        <a href="https://mapleridgegrocer.com/" class="swiper-slide slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/mapleridge-sm.svg"></a>
        <a href="http://redlightchicken.com/" class="swiper-slide slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/redlightchicken-sm.svg"></a>
        <a href="https://barserra.com/" class="swiper-slide slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/barserra-sm.svg"></a>
        <a href="https://jimmyschophouse.com/" class="swiper-slide slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/jimmys-sm.svg"></a>
        <a href="https://cityhallsteak.com/" class="swiper-slide slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/cityhall-sm.svg"></a>
        <a href="https://malfienoteca.com/" class="swiper-slide slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/malfi-sm.svg"></a>
        <a href="https://mcnelliesgroup.com/" class="swiper-slide slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/group-sm.svg"></a>
      </div>
      <div class="location-btn-next hide-sm"></div>
      <div class="location-btn-prev hide-sm"></div>
      <div class="show-sm">
        <div class="location-btn-prev"></div>
        <div class="location-btn-next"></div>
      </div>
    </div>

  </div>

</div>
