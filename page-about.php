<?php

/*
Template: Page
Template Name: About
*/

get_header();



?>
<main id="primary" class="site-main">
	<div class="about_hero">
		<div class="container space_1">
			<h1 class="title-1 inner_title"><?php the_field('title'); ?></h1>
		</div>
	</div>
	<div class="about_main container">
		<div class="left">
			<?php
			$main_image = get_field('main_image');
			$size = 'full';
			if( $main_image ) {
				echo wp_get_attachment_image( $main_image, $size, "", array( "class" => "main_image" ) );
			} ?>
		</div>
		<div class="right space_1">
			<h2><?php the_field('subtitle'); ?></h2>
			<div><?php the_field('main_text'); ?></div>
		</div>
	</div>
	<div class="about_bottom space_1">
		<div class="container">
			<div class="left">
				<?php
				$logo_image = get_field('logo_image');
				$size = 'full';
				if( $logo_image ) {
					echo wp_get_attachment_image( $logo_image, $size, "", array( "class" => "logo_image" ) );
				} ?>
			</div>
			<div class="right">
				<h2><?php the_field('about_title'); ?></h2>
				<div><?php the_field('about_text'); ?></div>
			</div>
		</div>
	</div>
</main>


<?php
get_footer();
