<?php $about = get_field('about_section', 'option') ?>

<div class="about container bg-chocolate">
	<div class="row w-100">
		<div class="col-lg-6 d-lg-flex justify-content-center">
		<div class="about__img">
			<!-- <img src="<?php echo bloginfo('template_directory'); ?>/assets/images/svg/now-open.svg" class="now-open"> -->
			<img src="<?php echo $about['image'] ?>">
		</div>
		</div>

		<div class="col-lg-6">
		<div class="about__content black">
			<div class="text-wrapper">
			<span class="h4"><?php echo $about['pre_headline'] ?></span>
			<h1 class="h1"><?php echo $about['headline'] ?></h1>
			<h5 class="h5"><?php echo $about['sub_headline'] ?></h5>

			<div class="body-img">
				<!-- <img src="<?php echo bloginfo('template_directory'); ?>/assets/images/svg/now-open.svg" class="now-open__mobile"> -->
				<img src="<?php echo $about['image'] ?>">
			</div>

			<p class="body"><?php echo $about['content'] ?></p>
			</div>
		</div>
		</div>
	</div>
</div>
