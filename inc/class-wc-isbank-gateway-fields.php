<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class WC_Isbank_Gateway_Fields {

	public static function init_fields() {
		return array(
			'enabled'   => array(
				'title' => __( 'Aktif/Deaktif', 'wc-isbank' ),
				'type'  => 'checkbox',
				'label' => __( 'Türkiye İş Bankası Sanal Pos etkinleştir', 'wc-isbank' )
			),
			'test'  => array(
				'title' => __( 'Test ortamını aktif et', 'wc-isbank' ),
				'type'  => 'checkbox'
			),
			'client_id' => array(
				'title' => __( 'Üye iş yeri numarası', 'wc-isbank' ),
				'type'  => 'text'
			),
			'store_key' => array(
				'title' => __( '3D Anahtarı', 'wc-isbank' ),
				'type'  => 'text'
			),
			'api_user'  => array(
				'title' => __( 'API Kullanıcı Adı', 'wc-isbank' ),
				'type'  => 'text'
			),
			'api_user_password' => array(
				'title' => __( 'API Kullanıcı Parolası', 'wc-isbank' ),
				'type'  => 'password'
			)
		);
	}

}
