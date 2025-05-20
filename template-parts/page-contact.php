<div class="contact container bg-cone">
  <div class="row">

    <div class="col-lg-5 p-0">
      <div class="img-container">
        <img src="<?php echo get_field('contact_image', 'option') ?>">
      </div>
    </div>

    <div class="col-lg-7">
      <div class="contact__content black">
        <div class="contact__hdr text-center">
          <span class="h4 d-block mb-4">Got a Question?</span>
          <h3 class="h1">Contact Us</h3>
        </div>

        <?php echo get_field('contact_form', 'option') ?>
      </div>
    </div>

  </div><!--row-->
</div><!--container-->
