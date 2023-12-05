<?php
$consult_btn = get_field('consult_btn', 'option');
if( $consult_btn ):
	$consult_btn_url = $consult_btn['url'];
	$consult_btn_title = $consult_btn['title'];
	$consult_btn_target = $consult_btn['target'] ? $consult_btn['target'] : '_self';
	?>
	<a class="btn-2" href="<?php echo esc_url( $consult_btn_url ); ?>" target="<?php echo esc_attr( $consult_btn_target ); ?>"><?php echo esc_html( $consult_btn_title ); ?></a>
<?php endif; ?>
