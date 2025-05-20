<div class="hero container">
  <div class="row">

    <div class="col-lg-6 p-0">
      <div class="hero__content">
        <a href="" class="hero__logo"><img src="<?php echo bloginfo('template_directory'); ?>/assets/images/svg/swirl66-logo-badge.svg"></a>
        <h2 class="h5"><?php echo get_field('hero_headline', 'option') ?></h2>
        <ul class="hero__buttons mb-4">
          <?php
            $button1 = get_field('hero_button_1', 'option');
            $button2 = get_field('hero_button_2', 'option');
          ?>

          <?php if($button1) : { ?>
            <li><a class="btn btn--solid btn--solid-berry" href="<?php echo $button1['url'] ?>"><?php echo $button1['title'] ?></a></li>
          <?php } endif ?>

          <?php if($button2) : { ?>
            <li><a class="btn btn--solid btn--solid-berry" href="<?php echo $button2['url'] ?>"><?php echo $button2['title'] ?></a></li>
			<?php } endif ?>
        </ul>
        <a href="#menu-section" class="btn btn--arrow"><i class="icon-circle-arrow-down"></i>View Our Menu</a>
      </div>
    </div>

    <div class="col-lg-6 p-0 bg-yellow position-relative">

      <div class="swiper hero__slider">
		<div class="slider-pagination">
			<div class="slider-pagination__left"><i class="icon-arrow-left"></i></div>
			<div class="slider-pagination__right"><i class="icon-arrow-right"></i></div>
		</div>

        <div class="swiper-wrapper">
		<?php while ( have_rows('slider', 'option') ) : the_row(); ?>
          <div class="swiper-slide">
            <div class="slide" style="background-image: url(<?php echo get_sub_field('slide_image') ?>)"></div>
          </div>
		<?php endwhile ?>
        </div>

        <div class="swiper-pagination"></div>
      </div>
    </div>

  </div>
</div>
