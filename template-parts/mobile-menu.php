<div class="mobile-menu">

  <div class="mobile-menu__left">

    <div class="closebtn"></div>

    <div class="left-top text-center">
      <a href="<?php home_url('/') ?>" class="menu-logo"><img class="mascot" src="<?php echo bloginfo('template_directory'); ?>/assets/images/svg/swirl66-logo-badge.svg"></a>

      <div class="menu-desc">
        <p><?php echo get_field('hero_headline', 'option') ?></p>

        <ul class="buttons mb-4">
          <?php
            $button1 = get_field('hero_button_1', 'option');
            $button2 = get_field('hero_button_2', 'option');
          ?>
			<!-- @if($button1)
            <li><a class="btn btn--solid btn--solid-black" href="{{ $button1['url'] }}">{{ $button1['title'] }}</a></li>
          @endif

          @if($button2)
            <li><a class="btn btn--solid btn--solid-black" href="{{ $button2['url'] }}">{{ $button2['title'] }}</a></li>
          @endif -->

        </ul>
      </div>
    </div>

    <div class="left-bottom">
      <a href="#"><img src="<?php echo bloginfo('template_directory'); ?>/assets/images/svg/mcnellies-logo-white.svg"></a>
    </div>

  </div>

  <div class="mobile-menu__right">
    <div class="right-top">
			<span>Visit Other McNellie's Locations</span>
			<button class="closebtn"></button>
    </div>
		<ul class="restaurant-list">
    	<li>
				<a href="https://www.fasslerhall.com/">
					<img class="restaurant-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/png/logos/fassler-hall.png">
					<div class="bg-image bg-cover" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/png/fassler-hall.png"></div>
				</a>
			</li>
			<li>
				<a href="https://www.dustbowllounge.com/">
					<img class="restaurant-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/png/logos/dust-bowl.png">
					<div class="bg-image bg-cover" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/png/dust-bowl.png"></div>
				</a>
			</li>
			<li>
				<a href="https://www.yokozunasushi.com/">
					<img class="restaurant-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/png/logos/yokozuna.png">
					<div class="bg-image bg-cover" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/png/yokozuna.png"></div>
				</a>
			</li>
			<li>
				<a href="https://www.dillydiner.com/">
					<img class="restaurant-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/png/logos/dilly-diner.png">
					<div class="bg-image bg-cover" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/png/dilly-diner.png"></div>
				</a>
			</li>
			<li>
				<a href="https://howdyburger.com">
					<img class="restaurant-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/png/logos/howdy-logo.png">
					<div class="bg-image bg-cover" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/png/howdy.png"></div>
				</a>
			</li>
			<li>
				<a href="https://www.taverntulsa.com/">
					<img class="restaurant-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/png/logos/tavern.png">
					<div class="bg-image bg-cover" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/png/tavern.png"></div>
				</a>
					</li>
				<li>
				<a href="https://wildforktulsa.com/">
					<img class="restaurant-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/png/logos/wildfork-logo.png">
					<div class="bg-image bg-cover" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/png/wildfork.png"></div>
				</a>
			</li>
				<li>
				<a href="https://www.elginparkbrewery.com/">
					<img class="restaurant-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/png/logos/elgin-park.png">
					<div class="bg-image bg-cover" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/png/elgin-park.png"></div>
				</a>
			</li>
			<li>
				<a href="https://www.mcnellies.com/">
					<img class="restaurant-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/png/logos/mcnellies.png">
					<div class="bg-image bg-cover" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/png/mcnellies.png"></div>
				</a>
			</li>
			<li>
				<a href="https://www.bullinthealley.com/">
					<img class="restaurant-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/png/logos/bull.png">
					<div class="bg-image bg-cover" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/png/bull.png"></div>
				</a>
			</li>
					<li>
				<a href="http://fantasticmrkims.com/">
					<img class="restaurant-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/png/logos/mrkims-logo.png">
					<div class="bg-image bg-cover" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/png/mrkims.png"></div>
				</a>
			</li>
			<li>
			<a href="https://bishopquigley.com/">
				<img class="restaurant-logo" src="<?php echo bloginfo('template_directory'); ?>/assets/images/png/logos/bishopquigley-sm.svg">
				<div class="bg-image bg-cover" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/png/bishop.png"></div>
			</a>
			</li>
			<li>
				<a href="https://mapleridgegrocer.com/">
					<img class="restaurant-logo" src="<?php echo bloginfo('template_directory'); ?>/assets/images/png/logos/mapleridge-sm.svg">
					<div class="bg-image bg-cover" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/png/mapleridge.png"></div>
				</a>
			</li>
					<li>
				<a href="http://redlightchicken.com/">
					<img class="restaurant-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/png/logos/redlightchicken-logo.png">
					<div class="bg-image bg-cover" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/png/redlightchicken.png')"></div>
				</a>
			</li>
			<li>
				<a href="https://barserra.com/">
					<img class="restaurant-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/png/logos/barserra-logo.png">
					<div class="bg-image bg-cover" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/png/barserra.png"></div>
				</a>
			</li>
			<li>
				<a href="https://jimmyschophouse.com/">
					<img class="restaurant-logo" src="<?php echo bloginfo('template_directory'); ?>/assets/images/png/logos/jimmys-logo.svg">
					<div class="bg-image bg-cover" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/png/jimmys.jpg"></div>
				</a>
			</li>
			<li>
				<a href="https://cityhallsteak.com/">
					<img class="restaurant-logo" src="<?php echo bloginfo('template_directory'); ?>/assets/images/png/logos/cityhall-logo.svg">
					<div class="bg-image bg-cover" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/png/cityhall.jpg"></div>
				</a>
			</li>
			<li>
				<a href="https://malfienoteca.com/">
					<img class="restaurant-logo" src="<?php echo bloginfo('template_directory'); ?>/assets/images/png/logos/malfi-logo.svg">
					<div class="bg-image bg-cover" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/png/malfi.jpg"></div>
				</a>
			</li>
			<li>
				<a href="https://mcnelliesgroupcatering.com/">
					<img class="restaurant-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/png/logos/catering-logo.png">
					<div class="bg-image bg-cover" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/png/catering.png"></div>
				</a>
			</li>
			<li>
				<a href="https://mcnelliespubrun.com/">
					<img class="restaurant-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/png/logos/pubrun-logo.png">
					<div class="bg-image bg-cover" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/png/pubrun.png"></div>
				</a>
			</li>
			<li>
				<a href="https://mcnelliesgroup.com/">
					<img class="restaurant-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/png/logos/group-logo.png">
					<div class="bg-image bg-cover" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/png/group.png"></div>
				</a>
			</li>
		</ul>
  </div>

</div>
