<?php

/*
Template: Page
Template Name: Product
*/

get_header();



?>
<main id="primary" class="site-main">
	<div class="product_hero space_2">
		<div class="product_hero_inner container">
			<?php

			if( have_rows('info_boxes') ): ?>

				<?php while( have_rows('info_boxes') ) : the_row(); ?>

					<?php
					$title = get_sub_field('title');
					$text = get_sub_field('text');
					$hover_image = get_sub_field('hover_image'); ?>
					<div class="hover_box">
						<strong class="box_title"><?php echo $title; ?></strong>
						<p><?php echo $text; ?></p>
					</div>
					<img class="ib_image"src="<?php echo $hover_image; ?>" alt="">
				<?php endwhile; ?>

			<?php endif; ?>
			<?php
			$main_image = get_field('main_image');
			$size = 'full';
			if( $main_image ) {
				echo wp_get_attachment_image( $main_image, $size, "", array( "class" => "main_image" ) );
			} ?>
		</div>
	</div>
	<div class="product_sec_1" id="applications">
		<div class="product_sec_1_inner">
			<div class="left">
				<?php
				$sec1_image = get_field('sec1_image');
				if( $sec1_image ) {
					echo wp_get_attachment_image( $sec1_image, $size, "", array( "class" => "sec1_image" ) );
				} ?>
			</div>
			<div class="right space_1">
			<h3 class="sec_1_title title-3"><?php the_field('sec1_title'); ?></h3>

				<?php

				if( have_rows('columns') ): ?>

					<?php while( have_rows('columns') ) : the_row(); ?>

					<div class="col">
						<?php

						if( have_rows('column') ): ?>
							<?php while( have_rows('column') ) : the_row(); ?>

								<?php
								$list_title = get_sub_field('list_title'); ?>
								<h4><?php echo $list_title; ?></h4>
								<ul>
								<?php

								if( have_rows('list_item') ): ?>

									<?php while( have_rows('list_item') ) : the_row(); ?>

										<?php
										$item = get_sub_field('item'); ?>
										<li><?php echo $item; ?></li>
									<?php endwhile; ?>
								</ul>
								<?php endif; ?>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
					<?php endwhile; ?>

				<?php endif; ?>
			</div>
		</div>
	</div>
	<div class="product_sec_2" id="sizing">
		<div class="product_sec_2_inner">
			<div class="ps2_inner_left space_1">
				<div class="ps2_left_inner">
					<h2 class="sec_2_title title-3"><?php the_field('sec2_title'); ?></h2>
					<div class="sec_2_intro">
						<div class="left">
						<?php
						if( have_rows('intro_list') ): ?>
							<ol>
							<?php while( have_rows('intro_list') ) : the_row(); ?>

								<?php
								$item = get_sub_field('list_item'); ?>
								<li><?php echo $item; ?></li>
							<?php endwhile; ?>
							</ol>
						<?php endif; ?>
						</div>
						<div class="right">
							<?php
							$intro_button = get_field('intro_button');
							if( $intro_button ):
								$intro_button_url = $intro_button['url'];
								$intro_button_title = $intro_button['title'];
								$intro_button_target = $intro_button['target'] ? $intro_button['target'] : '_self';
								?>
								<a class="btn-1" href="<?php echo esc_url( $intro_button_url ); ?>" target="<?php echo esc_attr( $intro_button_target ); ?>"><?php echo esc_html( $intro_button_title ); ?></a>
							<?php endif; ?>
						</div>
					</div>
					<?php

					if( have_rows('table') ): ?>
						<div class="sizing_table">
						<div class="table_head">
							<div class="size">
								Size
							</div>
							<div class="calf">
								Calf length
							</div>
							<div class="height">
								Height
							</div>
							<div class="shoe_size">
								Unisex Shoe size
							</div>
						</div>
						<?php while( have_rows('table') ) : the_row(); ?>

							<?php
							$size = get_sub_field('size');
							$calf_lenght = get_sub_field('calf_lenght');
							$height = get_sub_field('height');
							$shoe_size = get_sub_field('shoe_size');  ?>
							<div class="table_row">
								<div class="size">
									<?php echo $size; ?>
								</div>
								<div class="calf">
									<?php echo $calf_lenght; ?>
								</div>
								<div class="height">
									<?php echo $height; ?>
								</div>
								<div class="shoe_size">
									<?php echo $shoe_size; ?>
								</div>
							</div>
						<?php endwhile; ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
			<div class="ps2_inner_right space_1">
				<?php
				$sec2_image = get_field('sec2_image');
				if( $sec2_image ) {
					echo wp_get_attachment_image( $sec2_image, $size, "", array( "class" => "sec2_image" ) );
				} ?>
			</div>
		</div>
	</div>

	<div class="product_sec_3 space_1_2" id="customization">
		<div class="container">
			<h2 class="title-3"><?php the_field('sec3_title'); ?></h2>
			<h3 class="title-4"><?php the_field('sec3_subtitle'); ?></h3>
			<div class="sec3_intro">
				<?php the_field('sec3_intro'); ?>
			</div>
			<div class="sec3_info_boxes">
				<?php

				if( have_rows('sec3_info_boxes') ): ?>

					<?php while( have_rows('sec3_info_boxes') ) : the_row(); ?>
					<?php
					$title = get_sub_field('title');
					$text = get_sub_field('text'); ?>
					<div class="info_box">
						<?php
						$image = get_sub_field('image');
						$size = 'full';
						if( $image ) {
							echo wp_get_attachment_image( $image, $size, "", array( "class" => "image" ) );
						} ?>
						<h4><?php echo $title; ?></h4>
						<div><?php echo $text; ?></div>
					</div>
					<?php endwhile; ?>

				<?php endif; ?>
			</div>
		</div>
	</div>

	<div class="product_sec_4" id="optional">
		<div class="container">
			<div class="left space_2">
				<h2 class="title-3"><?php the_field('sec4_title_left'); ?></h2>
				<?php

				if( have_rows('sec4_info_boxes') ): ?>
				<div class="ps4_boxes">
					<?php while( have_rows('sec4_info_boxes') ) : the_row(); ?>
						<div class="ps4_box">
						<?php
						$text = get_sub_field('text'); ?>
						<?php
						$image = get_sub_field('image');
						$size = 'full';
						if( $image ) {
							echo wp_get_attachment_image( $image, $size, "", array( "class" => "image" ) );
						} ?>
						<div><?php echo $text; ?></div>
						</div>
					<?php endwhile; ?>
				</div>
				<?php endif; ?>
			</div>
			<div class="right space_2">
			<h2 class="title-3"><?php the_field('sec4_title_right'); ?></h2>
			<h3><?php the_field('row1_title'); ?></h3>
			<?php

			if( have_rows('row1_instructions') ): ?>
				<div class="instructions">
				<?php while( have_rows('row1_instructions') ) : the_row(); ?>
					<div class="col">
					<?php
					$text = get_sub_field('text'); ?>
					<figure>
						<?php
						$image = get_sub_field('image');
						$size = 'full';
						if( $image ) {
							echo wp_get_attachment_image( $image, $size, "", array( "class" => "image" ) );
						} ?>
					</figure>
					<div><?php echo $text; ?></div>
					</div>
				<?php endwhile; ?>
				</div>
			<?php endif; ?>
			<h3><?php the_field('row2_title'); ?></h3>

			<?php

			if( have_rows('row2_instructions') ): ?>
				<div class="instructions">
				<?php while( have_rows('row2_instructions') ) : the_row(); ?>
					<div class="col">
					<?php
					$text = get_sub_field('text'); ?>
					<figure>
						<?php
						$image = get_sub_field('image');
						$size = 'full';
						if( $image ) {
							echo wp_get_attachment_image( $image, $size, "", array( "class" => "image" ) );
						} ?>
					</figure>
					<div><?php echo $text; ?></div>
					</div>
				<?php endwhile; ?>
				</div>
			<?php endif; ?>
			<div><?php the_field('contact_us'); ?></div>
		</div>
		</div>
	</div>

	<div class="product_sec_5 space_1" id="instructions">
		<div class="container">
			<h2 class="title-3"><?php the_field('sec5_title'); ?></h2>
			<div><?php the_field('sec5_text'); ?></div>

			<?php
			$sec5_btn = get_field('sec5_btn');
			if( $sec5_btn ):
				$sec5_btn_url = $sec5_btn['url'];
				$sec5_btn_title = $sec5_btn['title'];
				$sec5_btn_target = $sec5_btn['target'] ? $sec5_btn['target'] : '_self';
				?>
				<a class="btn-1" href="<?php echo esc_url( $sec5_btn_url ); ?>" target="<?php echo esc_attr( $sec5_btn_target ); ?>"><?php echo esc_html( $sec5_btn_title ); ?></a>
			<?php endif; ?>
		</div>
	</div>

	<div class="product_sec_6">
		<div class="ps6_top container">
			<h2 class="title-3"><?php the_field('sec6_title'); ?></h2>
		</div>
		<div class="ps6_bottom container">
			<div class="ps6_left">
				<div class="left">
					<?php
					$sec6_img_1 = get_field('sec6_img_1');
					$size = 'full';
					if( $sec6_img_1 ) {
						echo wp_get_attachment_image( $sec6_img_1, $size, "", array( "class" => "sec6_img_1" ) );
					} ?>
				</div>
				<div class="right">
					<h3 class="title-4"><?php the_field('sec6_left_subtitle'); ?></h3>
					<div class="ps6_text"><?php the_field('sec6_left_text'); ?></div>
					<?php
					$sec6_img_2 = get_field('sec6_img_2');
					$size = 'full';
					if( $sec6_img_2 ) {
						echo wp_get_attachment_image( $sec6_img_2, $size, "", array( "class" => "sec6_img_2" ) );
					} ?>
					<span class="caption"><?php the_field('sec6_img_2_cap'); ?></span>
					<h4><?php the_field('sec6_list_title'); ?></h4>
					<div><?php the_field('content_list'); ?></div>
				</div>
			</div>
			<div class="ps6_right">
				<?php

				if( have_rows('row') ): ?>

					<?php while( have_rows('row') ) : the_row(); ?>
					<div class="ps6_right_row">

						<?php
						$title = get_sub_field('title');
						$text = get_sub_field('text'); ?>
						<div class="left">
							<?php
							$image = get_sub_field('image');
							$size = 'full';
							if( $image ) {
								echo wp_get_attachment_image( $image, $size, "", array( "class" => "image" ) );
							} ?>
						</div>
						<div class="right">
							<h3 class="title-4"><?php echo $title; ?></h3>
							<div class="ps6_text"><?php echo $text; ?></div>
						</div>
					</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>

</main>


<?php
get_footer();
