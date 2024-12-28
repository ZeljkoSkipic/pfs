<?php

/*
Template: Page
Template Name: Practitioner
*/

get_header();

?>
<main id="primary" class="site-main">
	<div class="practitioner_hero">
		<div class="practitioner_hero_inner">
			<div class="ph_left space_1">
				<h1 class="title-3"><?php echo wp_kses_post( get_field('ka_title') ); ?></h1>
			<div class="ph_image_grid">
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
			<div class="ph_right space_1">
			<h2 class="sec_1_title title-3"><?php the_field('sec1_title'); ?></h2>

				<div class="ph_right_inner">
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
	</div>
	<div class="product_section product_sec_2" id="sizing">
		<div class="product_sec_2_inner container">
			<div class="ps2_inner_left space_1">
				<div class="ps2_left_inner">
					<h2 class="sec_2_title title-3"><?php the_field('sec2_title'); ?></h2>
					<div class="sec_2_intro">
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
					<?php

					if( have_rows('table') ): ?>
						<div class="sizing_table">
						<div class="table_head">
							<div class="height">
								Height
							</div>
							<div class="shoe_size">
								Unisex Shoe size
							</div>
							<div class="size">
								Size
							</div>
							<div class="item">
								Item #
							</div>
							<div class="calf">
								Calf length*
							</div>

						</div>
						<?php while( have_rows('table') ) : the_row(); ?>

							<?php
							$height = get_sub_field('height');
							$shoe_size = get_sub_field('shoe_size');
							$size = get_sub_field('size');
							$item = get_sub_field('item');
							$calf_lenght = get_sub_field('calf_lenght');
							?>
							<div class="table_row">
								<div class="height">
									<?php echo $height; ?>
								</div>
								<div class="shoe_size">
									<?php echo $shoe_size; ?>
								</div>
								<div class="size">
									<?php echo $size; ?>
								</div>
								<div class="calf">
									<?php echo $item; ?>
								</div>
								<div class="calf">
									<?php echo $item; ?>
								</div>

							</div>
						<?php endwhile; ?>
						</div>
					<?php endif; ?>
					<div class="table_disclaimer">
						<?php echo wp_kses_post( get_field('table_disclaimer') ); ?>
					</div>
				</div>
			</div>
			<div class="ps2_inner_right space_1">
				<?php
				$sec2_image = get_field('sec2_image');
				if( $sec2_image ) {
					echo wp_get_attachment_image( $sec2_image, $size, "", array( "class" => "sec2_image" ) );
				} ?>
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
	</div>

	<div class="product_section product_sec_3 space_1_2" id="customization">
		<div class="container">
			<h2 class="title-3"><?php the_field('sec3_title'); ?></h2>
			<h3 class="title-4"><?php the_field('sec3_subtitle'); ?></h3>
			<div class="sec3_intro">
				<div class="sec3_intro_text">
					<?php the_field('sec3_intro'); ?>
				</div>
				<?php get_template_part('template-parts/cunsult-btn-2'); ?>
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

	<div class="product_section product_sec_4">
		<div class="container">
			<div class="space_1_2" id="placement">
			<h2 class="title-3"><?php the_field('sec4_title'); ?></h2>
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
		</div>
	</div>

	<div class="product_section product_sec_4b space_2_1" id="buckles">
		<div class="product_sec_4b_inner container">
			<h2 class="title-3"><?php the_field('sec4_title_bottom'); ?></h2>
			<?php

			if( have_rows('row1_instructions') ): ?>
				<div class="instructions">
				<?php while( have_rows('row1_instructions') ) : the_row(); ?>
					<div class="ps4b_box">
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

			<?php
			$instructions_btn = get_field('instructions_btn');
			if( $instructions_btn ):
				$instructions_btn_url = $instructions_btn['url'];
				$instructions_btn_title = $instructions_btn['title'];
				$instructions_btn_target = $instructions_btn['target'] ? $instructions_btn['target'] : '_self';
				?>
				<a class="btn-1" href="<?php echo esc_url( $instructions_btn_url ); ?>" target="<?php echo esc_attr( $instructions_btn_target ); ?>"><?php echo esc_html( $instructions_btn_title ); ?></a>
			<?php endif; ?>
		</div>
	</div>

	<div class="product_section product_sec_5 space_2" id="instructions">
		<div class="container">
			<h2 class="title-3"><?php echo wp_kses_post( get_field('sec5_title') ); ?></h2>
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

	<div class="product_sec_6 space_1_2">
		<div class="container">
			<h2 class="title-3"><?php echo wp_kses_post( get_field('videos_title') ); ?></h2>
			<div class="product_videos_grid">
				<?php

				if( have_rows('videos') ): ?>

					<?php while( have_rows('videos') ) : the_row();

					$VimeoVideoId = get_sub_field('video_id');

					?>
						<div class="product_video">
							<figure>
								<a href="https://vimeo.com/<?php echo $VimeoVideoId ?>" aria-label="Watch Video" data-fancybox>
									<div class="play-overlay">
									<svg width="84" height="84" viewBox="0 0 84 84" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="42" cy="42" r="42" fill="white" fill-opacity="0.8"/><path d="M66.5 42L29.75 63.2176L29.75 20.7824L66.5 42Z" fill="#231F20"/></svg>
									</div>
									<?php
										$placeholder_image = get_sub_field('placeholder_image');
										$size = 'full';
										if( $placeholder_image ) {
											echo wp_get_attachment_image( $placeholder_image, $size, "", array( "class" => "placeholder_image" ) );
									} ?>
								</a>
							</figure>
							<div class="video_meta">
								<div class="video_description">
									<?php echo wp_kses_post( get_sub_field('description') ); ?>
								</div>
								<div class="video_run_time"><p>Run time: <time><?php echo wp_kses_post( get_sub_field('run_time') ); ?></time></p></div>
							</div>
						</div>
					<?php endwhile; ?>
				<script>
					Fancybox.bind("[data-fancybox]", {
					// Your custom options
					});
					</script>
				<?php endif; ?>
			</div>
		</div>

	</div>

	<div class="product_section product_sec_7 space_1" id="components">
		<div class="container">
			<h2 class="title-3"><?php the_field('sec6_title'); ?></h2>
		</div>
		<div class=" container">
			<div class="ps7_top">
				<div class="ps7_top_left">
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
						<div class="ps7_text"><?php the_field('sec6_left_text'); ?></div>

					</div>
				</div>
				<div class="ps7_top_right">
					<div class="left">
					<h4><?php echo wp_kses_post( get_field('sec6_list_title') ); ?></h4>
					<div><?php echo get_field('content_list'); ?></div>
					</div>
					<div class="right">
						<?php
						$sec6_img_2 = get_field('sec6_img_2');
						$size = 'full';
						if( $sec6_img_2 ) {
							echo wp_get_attachment_image( $sec6_img_2, $size, "", array( "class" => "sec6_img_2" ) );
						} ?>
					<span class="caption"><em><?php echo wp_kses_post( get_field('sec6_img_2_cap') ); ?></em></span>
					</div>


				</div>
			</div>
			<div class="ps7_bottom">
				<?php

				if( have_rows('row') ): ?>

					<?php while( have_rows('row') ) : the_row(); ?>
					<div class="ps7_right_row">

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
							<div class="ps7_text"><?php echo $text; ?></div>
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
