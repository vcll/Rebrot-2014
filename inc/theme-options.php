<?php

add_action( 'admin_init', 'theme_options_init' );
add_action( 'admin_menu', 'theme_options_add_page' );

/**
 * Init plugin options to white list our options
 */
function theme_options_init(){
	register_setting( 'sample_options', 'opcions_rebrot', 'theme_options_validate' );
}

/**
 * Load up the menu page
 */
function theme_options_add_page() {
	add_theme_page( __( 'Opcions', 'rebrot' ), __( 'Opcions del tema', 'rebrot' ), 'edit_theme_options', 'theme_options', 'theme_options_do_page' );
}

/**
 * Create arrays for our select and radio options
 */
$select_options = array(
	'0' => array(
		'value' =>	'0',
		'label' => __( 'Zero', 'arran' )
	),
	'1' => array(
		'value' =>	'1',
		'label' => __( 'One', 'arran' )
	),
	'2' => array(
		'value' => '2',
		'label' => __( 'Two', 'arran' )
	),
	'3' => array(
		'value' => '3',
		'label' => __( 'Three', 'arran' )
	),
	'4' => array(
		'value' => '4',
		'label' => __( 'Four', 'arran' )
	),
	'5' => array(
		'value' => '3',
		'label' => __( 'Five', 'arran' )
	)
);

$radio_options = array(
	'yes' => array(
		'value' => 'yes',
		'label' => __( 'Yes', 'arran' )
	),
	'no' => array(
		'value' => 'no',
		'label' => __( 'No', 'arran' )
	),
	'maybe' => array(
		'value' => 'maybe',
		'label' => __( 'Maybe', 'arran' )
	)
);

/**
 * Create the options page
 */
function theme_options_do_page() {
	global $select_options, $radio_options;

	if ( ! isset( $_REQUEST['settings-updated'] ) )
		$_REQUEST['settings-updated'] = false;

	?>
	<div class="wrap">
		<?php screen_icon(); echo "<h2>" . get_current_theme() . __( ' Opcions del tema', 'rebrot' ) . "</h2>"; ?>

		<?php if ( false !== $_REQUEST['settings-updated'] ) : ?>
		<div class="updated fade"><p><strong><?php _e( 'Options saved', 'rebrot' ); ?></strong></p></div>
		<?php endif; ?>

		<form method="post" action="options.php">
			<?php settings_fields( 'sample_options' ); ?>
			<?php $options = get_option( 'opcions_rebrot' ); ?>

			<table class="form-table">

				<?php
				/**
				 * Activar l'enllaç a Facebook, variable facebook
				 */
				?>
				<tr valign="top"><th scope="row"><?php _e( 'Facebook', 'rebrot' ); ?></th>
					<td>
						<input id="opcions_rebrot[facebook]" name="opcions_rebrot[facebook]" type="checkbox" value="1" <?php checked( '1', $options['facebook'] ); ?> />
						<label class="description" for="opcions_rebrot[facebook]"><?php _e( "Activa l'enllaç de Facebook", 'rebrot' ); ?></label>
					</td>
				</tr>

				<?php
				/**
				 * Enllaç a Facebook, variable facebook_link
				 */
				?>
				<tr valign="top"><th scope="row"><?php _e( "Copia l'enllaç a Facebook", 'rebrot' ); ?></th>
					<td>
						<input id="opcions_rebrot[facebook_link]" class="regular-text" type="text" name="opcions_rebrot[facebook_link]" value="<?php esc_attr_e( $options['facebook_link'] ); ?>" />
						<label class="description" for="opcions_rebrot[facebook_link]"><?php _e( "Copia l'enllaç a Facebook", 'rebrot' ); ?></label>
					</td>
				</tr>

				<?php
				/**
				 * Activar l'enllaç a twitter, variable twitter
				 */
				?>
				<tr valign="top"><th scope="row"><?php _e( 'Twitter', 'rebrot' ); ?></th>
					<td>
						<input id="opcions_rebrot[twitter]" name="opcions_rebrot[twitter]" type="checkbox" value="1" <?php checked( '1', $options['twitter'] ); ?> />
						<label class="description" for="opcions_rebrot[twitter]"><?php _e( "Activa l'enllaç de Twitter", 'rebrot' ); ?></label>
					</td>
				</tr>

				<?php
				/**
				 * Enllaç a Twitter, variable twitter_link
				 */
				?>
				<tr valign="top"><th scope="row"><?php _e( "Copia l'enllaç a Twitter", 'rebrot' ); ?></th>
					<td>
						<input id="opcions_rebrot[twitter_link]" class="regular-text" type="text" name="opcions_rebrot[twitter_link]" value="<?php esc_attr_e( $options['twitter_link'] ); ?>" />
						<label class="description" for="opcions_rebrot[twitter_link]"><?php _e( "Copia l'enllaç a Twitter", 'rebrot' ); ?></label>
					</td>
				</tr>

				<?php
				/**
				 * Activar l'enllaç al calendari, variable calendari
				 */
				?>
				<tr valign="top"><th scope="row"><?php _e( 'Calendari', 'rebrot' ); ?></th>
					<td>
						<input id="opcions_rebrot[calendari]" name="opcions_rebrot[calendari]" type="checkbox" value="1" <?php checked( '1', $options['calendari'] ); ?> />
						<label class="description" for="opcions_rebrot[calendari]"><?php _e( "Activa l'enllaç al Calendari", 'rebrot' ); ?></label>
					</td>
				</tr>

				<?php
				/**
				 * Enllaç al calendari, variable calendari_link
				 */
				?>
				<tr valign="top"><th scope="row"><?php _e( "Copia l'enllaç al calendari", 'rebrot' ); ?></th>
					<td>
						<input id="opcions_rebrot[calendari_link]" class="regular-text" type="text" name="opcions_rebrot[calendari_link]" value="<?php esc_attr_e( $options['calendari_link'] ); ?>" />
						<label class="description" for="opcions_rebrot[calendari_link]"><?php _e( "Copia l'enllaç al calendari", 'rebrot' ); ?></label>
					</td>
				</tr>
				<?php
				/**
				 * Activar l'enllaç al calendari, variable calendari
				 */
				?>
				<tr valign="top"><th scope="row"><?php _e( 'RSS', 'rebrot' ); ?></th>
					<td>
						<input id="opcions_rebrot[rss]" name="opcions_rebrot[rss]" type="checkbox" value="1" <?php checked( '1', $options['rss'] ); ?> />
						<label class="description" for="opcions_rebrot[rss]"><?php _e( "Activa l'enllaç al RSS", 'rebrot' ); ?></label>
					</td>
				</tr>

			<p class="submit">
				<input type="submit" class="button-primary" value="<?php _e( 'Save Options', 'rebrot' ); ?>" />
			</p>
		</form>
	</div>
	<?php
}

/**
 * Sanitize and validate input. Accepts an array, return a sanitized array.
 */
function theme_options_validate( $input ) {
	global $select_options, $radio_options;

	// Our checkbox value is either 0 or 1
	if ( ! isset( $input['option1'] ) )
		$input['option1'] = null;
	$input['option1'] = ( $input['option1'] == 1 ? 1 : 0 );

	// Say our text option must be safe text with no HTML tags
	$input['sometext'] = wp_filter_nohtml_kses( $input['sometext'] );

	// Our select option must actually be in our array of select options
	if ( ! array_key_exists( $input['selectinput'], $select_options ) )
		$input['selectinput'] = null;

	// Our radio option must actually be in our array of radio options
	if ( ! isset( $input['radioinput'] ) )
		$input['radioinput'] = null;
	if ( ! array_key_exists( $input['radioinput'], $radio_options ) )
		$input['radioinput'] = null;

	// Say our textarea option must be safe text with the allowed tags for posts
	$input['sometextarea'] = wp_filter_post_kses( $input['sometextarea'] );

	return $input;
}

// adapted from http://planetozh.com/blog/2009/05/handling-plugins-options-in-wordpress-28-with-register_setting/