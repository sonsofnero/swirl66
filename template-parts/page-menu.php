<div class="bg-white">
<div class="menu container" id="menu-section">

<!-- Start: Menu Header -->
  <div class="menu__hdr">
    <span class="h4 d-block mb-3">The Menu</span>
    <h3 class="h1">Swirl 66</h3>
    <hr class="divider">
    <ul class="menu__categories">
      <?php
        $diet_list = array(
          'option_all' => 'All',
          'taxonomy' => 'diet'
        );
        $diets = get_categories($diet_list);
      ?>

      <?php foreach ($diets as $diet) : { ?>
        <li><i class="diet-circle diet-circle--green"><?php echo $diet->slug ?></i> <?php echo $diet->name ?></li>
      <?php } endforeach ?>
    </ul>
  </div>
<!-- End: Menu Header -->

<!-- Start: Menu Mobile Select -->
  <div class="menu__select">
    <span>Choose:</span>
    <div class="select">
    <select class="form-control">
      <span></span>
      <option selected>Choose...</option>
      <?php
        $cat_args = array(
          'option_all' => 'All'
        );

        $categories = get_categories($cat_args);
      ?>

	  <?php foreach ($categories as $cat) : { ?>
        <option value="<?php echo $cat->slug ?>"><?php echo $cat->name ?></option>
	<?php } endforeach ?>
    </select>
    </div>
  </div>
  <!-- End: Menu Mobile Select -->

  <div class="menu__list">

	<!-- Start: Menu Left Category List -->
    <ul class="menu__items">
      <li>Choose:</li>
      <?php
        $cat_args = array(
          'option_all' => 'All'
        );

        $categories = get_categories($cat_args);
      ?>

	<?php foreach ($categories as $cat) : { ?>
        <option value="<?php echo $cat->slug ?>"><?php echo $cat->name ?></option>
	<?php } endforeach ?>
    </ul>
   <!-- End: Menu Left Category List -->

	<!-- Start: Menu Right Menu Items -->
    <div class="menu__posts">
      <?php $cats = get_categories(); ?>

      <?php foreach ($cats as $cat) : {

          $cat_id = $cat->term_id;

          $args = array(
            'posts_per_page' => -1,
            'post_type' => 'menu',
            'cat'=>$cat_id,
            'taxonomy' => 'diet'
          );

          query_posts($args);
        ?>

        <div class="cat-hdr">
          <h4 id="<?php echo $cat->slug ?>"><?php echo $cat->name ?></h4>
          <p><?php echo $cat->description ?></p>
        </div>

        <div class="row">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/menu-item' ); ?>
		  <?php endwhile ?>
        </div>
        <hr>
        <?php wp_reset_postdata(); ?>
	<?php } endforeach ?>
    </div>
    <!-- End: Menu Right Menu Items -->

  </div>

</div>
</div>
