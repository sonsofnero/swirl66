<div class="location container">
  <div class="row">

    <div class="col-lg-5 bg-sugar chocolate">
      <div class="location__hours">
        <div class="symbols"><img src="<?php echo bloginfo('template_directory'); ?>/assets/images/svg/swirl66-mascot.svg"></div>

        <h4 class="h4 mb-4"><?php echo get_field('hours_headline', 'option') ?></h4>

        <ul class="hours">
		<?php while ( have_rows('hours', 'option') ) : the_row(); ?>
			<li class="h5"><?php echo get_sub_field('days') ?> <span class="h6"><?php echo get_sub_field('times') ?></span></li>
		<?php endwhile ?>
        </ul>
      </div>
    </div>

    <div class="col-lg-7 bg-cream">
      <div class="location__content">
        <h4 class="h4 d-block mb-4"><?php echo get_field('location_headline', 'option') ?></h4>
        <h3 class="h3 d-block mb-4"><?php echo get_field('location_subheadline', 'option') ?></h3>
        <div class="address h5 d-block mb-5">
          <?php echo get_field('address', 'option') ?>
        </div>

        <ul class="location__buttons">
          <li><a class="h6 black underline" href="tel:<?php echo get_field('phone_number', 'option') ?>"><?php echo get_field('phone_number', 'option') ?></a></li>
          <li><a class="btn btn--solid btn--solid-berry" href="<?php echo get_field('map_link', 'option') ?>">Map It!</a></li>
        </ul>
      </div>
    </div>

  </div>
</div>
