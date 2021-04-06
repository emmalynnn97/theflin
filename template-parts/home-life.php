<div class="life">
	<div class="triangle triangle-1"></div>
	<div class="content">
		<h3><?php echo get_field('home_life_heading'); ?></h3>
		<p><?php echo get_field('home_life_top_copy'); ?></p>
	</div>
	<?php get_template_part('template-parts/content', 'home-life-options'); ?>
	<!--<div class="content">
		<img src='<?php echo get_field('home_life_image'); ?>' alt="life image" class="life-image"/>
		<p><?php echo get_field('home_life_bottom_copy'); ?></p>
	</div>-->
	<div class="triangle triangle-2"></div>
</div>