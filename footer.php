<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package s-tier
 */


$phone = get_field('phone_number', 'option');

?>

	<footer id="colophon" class="site-footer space_1">
		<div class="footer_inner container">
			<div class="col">
				<?php
				$button = get_field('button', 'option');
				if( $button ):
					$button_url = $button['url'];
					$button_title = $button['title'];
					$button_target = $button['target'] ? $button['target'] : '_self';
					?>
					<a class="btn-1" href="<?php echo esc_url( $button_url ); ?>" target="<?php echo esc_attr( $button_target ); ?>"><?php echo esc_html( $button_title ); ?></a>
				<?php endif; ?>
				<?php get_template_part('template-parts/cunsult-btn'); ?>

			</div>
			<div class="col">
				<div class="footer_logos">
					<?php
					$logo = get_field('logo', 'option');
					$size = 'full';
					if( $logo ) {
						echo wp_get_attachment_image( $logo, $size, "", array( "class" => "logo" ) );
					} ?>
					<span>by</span>
						<?php
					$logo_small = get_field('logo_small', 'option');
					if( $logo_small ) {
						echo wp_get_attachment_image( $logo_small, $size, "", array( "class" => "logo_small" ) );
					} ?>
				</div>
				<span class="copy"><?php the_field('copy', 'option'); ?></span>
			</div>
			<div class="col">
				<a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a>
				<div><?php the_field('address', 'option'); ?></div>
				<div class="footer_small_text"><?php the_field('small_text', 'option'); ?></div>
			</div>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
