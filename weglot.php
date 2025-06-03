<?php

add_filter( 'weglot_button_html', 'custom_weglot_button_html' );
function custom_weglot_button_html( $html, $add_class = '' ) {

	$current_this        = weglot_get_service( 'Button_Service_Weglot' );
	$option_service      = weglot_get_service( 'Option_Service_Weglot' );
	$request_url_service = weglot_get_service( 'Request_Url_Service_Weglot' );
	$amp_service         = weglot_get_service( 'Amp_Service_Weglot' );
	$language_service    = weglot_get_service( 'Language_Service_Weglot' );

	if ( apply_filters( 'weglot_view_button_html', ! $request_url_service->is_eligible_url() ) ) {
		return '';
	}

	$original_language = weglot_get_original_language();

	$weglot_url           = $request_url_service->get_weglot_url();
	$amp_regex            = $amp_service->get_regex( true );
	$destination_language = weglot_get_destination_languages();

	$current_language = $request_url_service->get_current_language( false );

	if ( weglot_get_translate_amp_translation() && preg_match( '#' . $amp_regex . '#', $weglot_url->getUrl() ) === 1 ) {
		$add_class .= ' weglot-invert';
	}

	$flag_class  = $current_this->get_flag_class();
	$class_aside = $current_this->get_class_dropdown();

	$button_html = sprintf( '<!--Weglot %s-->', WEGLOT_VERSION );
	$button_html .= sprintf( "<div data-wg-notranslate class='country-selector %s'>", $class_aside . $add_class );
	if ( ! empty( $original_language ) && ! empty( $destination_language ) ) {
		$current_language_entry = $language_service->get_language_from_internal( $current_language->getInternalCode() );
		$name                   = $current_this->get_name_with_language_entry( $current_language_entry );
		$uniq_id                = 'wg' . uniqid( strtotime( 'now' ) ) . rand( 1, 1000 );
		$button_html            .= sprintf( '<input id="%s" class="weglot_choice" type="checkbox" name="menu"/><label for="%s" class="wgcurrent wg-li weglot-lang weglot-language %s" data-code-language="%s"><span>%s</span></label>', esc_attr( $uniq_id ), esc_attr( $uniq_id ), esc_attr( $flag_class . $current_language->getInternalCode() ), esc_attr( $current_language->getInternalCode() ), esc_html( $name ) );

		$button_html .= '<ul>';

		array_unshift( $destination_language, $original_language );

		foreach ( $language_service->get_original_and_destination_languages( $request_url_service->is_allowed_private() ) as $language ) {

			if ( $language->getInternalCode() === $current_language->getInternalCode() ) {
				continue;
			}

			$link_button = $request_url_service->get_weglot_url()->getForLanguage( $language );
			if ( ! $link_button ) {
				continue;
			}

			$button_html .= sprintf( '<li class="wg-li weglot-lang weglot-language %s" data-code-language="%s">', $flag_class . $language->getInternalCode(), $language->getInternalCode() );
			$name        = $current_this->get_name_with_language_entry( $language );

			if ( $language === $language_service->get_original_language() &&
			     strpos( $link_button, 'no_lredirect' ) === false && // If not exist
			     ( is_home() || is_front_page() )
			     && $option_service->get_option( 'auto_redirect' )
			) { // Only for homepage
				if ( strpos( $link_button, '?' ) !== false ) {
					$link_button = str_replace( '?', '?no_lredirect=true', $link_button );
				} else {
					$link_button .= '?no_lredirect=true';
				}
			}

			$button_html .= sprintf(
				'<a data-wg-notranslate href="%s">%s</a>',
				esc_url( $link_button ),
				esc_html( $name )
			);

			$button_html .= '</li>';
		}

		$button_html .= '</ul>';
	}

	$button_html .= '</div>';

	return $button_html;
}