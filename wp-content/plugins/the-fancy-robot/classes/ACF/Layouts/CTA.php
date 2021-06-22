<?php


namespace TFR\ACF\Layouts;

use TFR\Plugin;
use TFR\ACFToPost\Util\FieldGenerator;
use TFR\ACFToPost\Base\Layout;

class CTA extends Layout {

	public function __construct() {
		parent::__construct();

		$this->setName( 'cta' );
		$this->setLabel( __( 'CTA', Plugin::TEXT_DOMAIN ) );
		$this->setRepeaters( ['modules', 'post_modules'] );
	}

	public function setFields() {
		$fields = new FieldGenerator( $this->getKey() );

		$this->fields = [
			$fields->add( 'text', [
				'name'  => 'pain',
				'label' => __( 'Pain', Plugin::TEXT_DOMAIN ),
			]),

			$fields->add( 'text', [
				'name'  => 'agitate',
				'label' => __( 'Agitate', Plugin::TEXT_DOMAIN ),
			]),

			$fields->add( 'text', [
				'name'  => 'solve',
				'label' => __( 'Solve', Plugin::TEXT_DOMAIN ),
			]),

			$fields->add( 'textarea', [
				'name'  => 'background_svg',
				'label' => __( 'Background SVG', Plugin::TEXT_DOMAIN ),
			])
		];
	}
}
