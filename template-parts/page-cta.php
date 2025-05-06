<?php
$cta_block = get_field('cta_block', 'option');
$cta_button = $cta_block['button'];
$cta_image = $cta_block['image'];
?>

<div class="about container bg-sugar">
	<div class="row w-100">
		<div class="col-lg-6 d-lg-flex justify-content-center">
		<div class="cta-block__img">
			<?php if($cta_image) : { ?>
				<img src="<?php echo $cta_block['image'] ?>">
			<?php } endif; ?>
		</div>
		</div>

		<div class="col-lg-6">
		<div class="about__content about__content-cta">
			<div class="text-wrapper">
			<span class="h4"><?php echo $cta_block['pre_headline'] ?></span>
			<h1 class="h2"><?php echo $cta_block['headline'] ?></h1>
			<h5 class="h5"><?php echo $cta_block['sub_headline'] ?></h5>

			<?php if($cta_image) : { ?>
				<div class="body-img"><img src="<?php echo $cta_block['image'] ?>"></div>
			<?php } endif; ?>

			<p class="body"><?php echo $cta_block['content'] ?></p>

			<?php if($cta_button) : { ?>
				<a class="btn btn--solid btn--solid-berry" href="<?php echo $cta_button['url'] ?>"><?php echo $cta_button['title'] ?></a>
			<?php } endif; ?>
			</div>
		</div>
		</div>
	</div>
</div>
