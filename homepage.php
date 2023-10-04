<?php

/*
Template: Page
Template Name: Homepage
*/

get_header();

$hero_video = get_field('video')


?>
<main id="primary" class="site-main">
<div class="home_hero">
	<div class="left">
		<div class="left_content">
			<h1 class="hh_title title-1 t_space_1"><?php the_field('title_solid'); ?> <span><?php the_field('title_outline'); ?></span></h1>
			<h3 class="hh_subtitle"><?php the_field('subtitle'); ?></h3>
			<div class="hh_text"><?php the_field('text'); ?></div>
			<?php
			$button = get_field('button');
			if( $button ):
				$button_url = $button['url'];
				$button_title = $button['title'];
				$button_target = $button['target'] ? $button['target'] : '_self';
				?>
				<a class="btn-2" href="<?php echo esc_url( $button_url ); ?>" target="<?php echo esc_attr( $button_target ); ?>"><?php echo esc_html( $button_title ); ?></a>
			<?php endif; ?>
 		</div>
	</div>
	<div class="right">
		<?php if( $hero_video ) { ?>
			<video width="960" height="620" autoplay="autoplay" muted onclick="this.paused ? this.play() : this.pause(); arguments[0].preventDefault();" playsinline>
				<source src="<?php echo $hero_video;?>" type="video/mp4" >
			</video>
		<?php } ?>
		<button class="video-control playing">
		<span class="video-control-play">
		</span>
		<span class="video-control-pause">
		</span>
	</button>
	</div>
</div>

<div class="home_sec_1 space_1">
	<div class="home_sec_1_inner container">
		<h2 class="title-2"><?php the_field('sec1_title'); ?></h2>
		<div class="home_sec_1_text"><?php the_field('sec1_text'); ?></div>
	</div>
</div>

<div class="home_sec_2">
	<div class="home_sec_2_inner container">
		<div class="left">
			<?php
			$sec2_image = get_field('sec2_image');
			$size = 'full';
			if( $sec2_image ) {
				echo wp_get_attachment_image( $sec2_image, $size, "", array( "class" => "sec2_image" ) );
			} ?>
		</div>
		<div class="right">
			<blockquote><?php the_field('quote'); ?></blockquote>
			<p class="person"><strong><?php the_field('person'); ?>, </strong><?php the_field('location'); ?></p>

			<p class="list_title"><?php the_field('lists_title'); ?></p>
			<?php

			if( have_rows('list') ): ?>
				<?php while( have_rows('list') ) : the_row(); ?>
					<ul>
					<?php
					$list_title = get_sub_field('list_title'); ?>
					<li><?php echo $list_title; ?></li>
					<?php

					if( have_rows('list_item') ): ?>

						<?php while( have_rows('list_item') ) : the_row(); ?>

							<?php
							$item = get_sub_field('item'); ?>
							<li><?php echo $item; ?></li>
						<?php endwhile; ?>

					<?php endif; ?>
					</ul>
				<?php endwhile; ?>
			<?php endif; ?>
			<strong class="footnote"><em><?php the_field('footnote'); ?></em></strong>
		</div>
	</div>
</div>
</main>


<?php
get_footer();
