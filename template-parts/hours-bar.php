<?php $alert_bar = get_field('alert_bar_text', 'option'); ?>

<?php if ($alert_bar) : { ?>
<div class="hours-bar container">
	<!-- <span>Today's Hours: <div id="hours"></div></span> -->
  	<span><?php echo $alert_bar ?></span>
</div>
<?php } endif ?>
