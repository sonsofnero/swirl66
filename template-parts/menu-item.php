<div class="col-6">
  <div class="d-flex align-items-start justify-content-between">
    <!-- menu item name -->
    <span class="item-title"><?php the_title() ?></span>

    <!-- menu item diet circle -->
    <?php $diets = get_the_terms( get_the_ID(), 'diet' ); ?>
    <?php if ( $diets ) :
      foreach ($diets as $diet) : {
         $diet_items = $diet->slug; ?>
        <i class="diet-circle diet-circle--sm diet-circle--green"><?php echo $diet_items ?></i>
      <?php } endforeach; endif; ?>
  </div>

  <!-- menu item description -->
  <div class="menu__desc">
    <?php the_content() ?>
  </div>
</div>
