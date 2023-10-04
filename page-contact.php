<?php

/*
Template: Page
Template Name: Contact
*/

get_header();



?>
<main id="primary" class="site-main">
	<div class="contact_section container">
		<div class="left">
			<h1 class="title-2"><?php the_field('title'); ?></h1>
			<div class="intro_text"><?php the_field('text'); ?></div>
			<div class="pfs_form"><?php echo do_shortcode(get_field('form_shortcode')); ?></div>
		</div>
		<div class="right">
			<h2 class="title-2"><?php the_field('right_title'); ?></h2>
			<div class="address"><?php the_field('adresss'); ?></div>
			<div class="work_hours"><?php the_field('work_hours'); ?></div>
			<div class="phone">
				<span class="tel">
					<?php
					$phone = get_field('phone');
					if( $phone ):
						$phone_url = $phone['url'];
						$phone_title = $phone['title'];
						$phone_target = $phone['target'] ? $phone['target'] : '_self';
						?>
						<a class="phone" href="<?php echo esc_url( $phone_url ); ?>" target="<?php echo esc_attr( $phone_target ); ?>"><?php echo esc_html( $phone_title ); ?></a>
					<?php endif; ?>
				</span>
				<span class="fax"><?php the_field('fax'); ?></span>
			</div>

			<div class="email">
			<a href="<?php echo esc_url( 'mailto:' . antispambot( get_field('email') ) ); ?>"><?php echo esc_html( antispambot( get_field('email' ) ) ); ?></a>
			</div>
		</div>
	</div>
</main>


<?php
get_footer();
