<?php
/**
 * Template Name: Splash Page
 * Description: Coming Soon Page.
 *
 */

get_header();

the_post();
?>

<section class="splash">

	<div class="splash__content">

		<div class="splash__top">
			<img src="<?php echo bloginfo('template_directory'); ?>/assets/images/svg/bishopquigley-main.svg" class="logo">
		</div>

		<div class="splash__bottom">
			<p class="h4 black mb-5">Now Open!</p>
			<a href="https://workforcenow.adp.com/mascsr/default/mdf/recruitment/recruitment.html?cid=2a90e27c-ee23-4487-9396-3d3e55a45215&ccId=19000101_000001&type=MP&lang=en_US" class="btn btn--gold">Employment</a>
		</div>

	</div>

</section>


<?php
get_footer();
