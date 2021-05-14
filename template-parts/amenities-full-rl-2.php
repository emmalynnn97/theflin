<div class="vision-amenities">
	<div class="row">
		<div class="triangle triangle-4"></div>
	</div>
	<div class="row">
		<div class="content slideable slideable-left">
			<h3><?php echo get_field('amenities_full_rl_heading_2'); ?></h3>
			<div class="rl-list">
				<?php echo get_field('amenities_full_rl_list_2'); ?>
			</div>
		</div>
		<img class="slideable slideable-right" src='<?php echo get_field('amenities_full_rl_image_2'); ?>' alt="highrise image"/>
	</div>
	<div class="row gallery-row">
		<?php get_template_part('template-parts/amenities', 'gallery'); ?>
	</div>
	<div class="amenities-image-row">
		<img alt="Amazon Hub Logo" src="/wp-content/uploads/2021/05/amazon-hub-horiz-logo-rgb-scaled.jpeg"/>
		<img alt="Savaya Logo" src="/wp-content/uploads/2021/05/logo-3.png"/>
		<img style="width:125px;" alt="Blink Logo" src="/wp-content/uploads/2021/05/Blink-logo.png"/>
	</div>
	<div class="row">
		<div class="triangle triangle-5"></div>
	</div>
</div>