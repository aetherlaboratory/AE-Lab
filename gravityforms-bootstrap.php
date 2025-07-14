<?php
add_filter( 'gform_submit_button', 'form_submit_button', 10, 2 );
function form_submit_button( $button, $form ) {
	return "<button class='btn btn-warning' id='gform_submit_button_{$form['id']}'><span>Submit</span></button>";
}

add_filter( 'gform_field_content', 'bootstrap_styles_for_gravityforms_fields', 10, 5 );
function bootstrap_styles_for_gravityforms_fields( $content, $field, $value, $lead_id, $form_id ) {

	if ( is_admin() ) { return $content; }

	// Currently only applies to most common field types, but could be expanded to all
	if ( $field['type'] != 'hidden' && $field['type'] != 'list' && $field['type'] != 'checkbox' && $field['type'] != 'radio' && $field['type'] != 'html' && $field['type'] != 'multiselect' && $field['type'] != 'fileupload' && $field['type'] != 'consent' && $field['type'] != 'product' ) {
		$content = str_replace( 'class=\'medium', 'class=\'form-control medium', $content );
	}

	if ( $field['type'] == 'name' || $field['type'] == 'address' ) {
		$content = str_replace( '<input ', '<input class=\'form-control\' ', $content );
	}

	if ( $field['type'] == 'textarea' ) {
		$content = str_replace( 'class=\'textarea', 'class=\'form-control textarea', $content );
	}

	if ( $field['type'] == 'checkbox' ) {
		$content = str_replace( 'li class=\'', 'li class=\'form-check ', $content );
		$content = str_replace( '<input ', '<input class=\'form-check-input\' ', $content );
		$content = str_replace( '<label ', '<label class=\'form-check-label\' ', $content );
	}

	if ( $field['type'] == 'radio' ) {
		$content = str_replace( 'li class=\'', 'li class=\'form-check ', $content );
		$content = str_replace( '<input ', '<input class=\'form-check-input\' ', $content );
		$content = str_replace( '<label ', '<label class=\'form-check-label\' ', $content );
	}

	return $content;
} 


function add_custom_script() {
	if ( is_page( 'contact' ) ) {
		?>
		<script type="text/javascript">
		jQuery(document).ready(function($) {
			$('#gform_browse_button_1_4').removeClass('button gform_button_select_files').addClass('btn btn-warning');
		});
		</script>
		<?php
	}
}
add_action('wp_footer', 'add_custom_script');
?>