<?php


namespace TFR\ACF\Layouts;

use TFR\Plugin;
use TFR\Util;
use TFR\ACFToPost\Util\FieldGenerator;
use TFR\ACFToPost\Base\Layout;

class ServiceColumns extends Layout {

	public function __construct() {
		parent::__construct();

		$this->setName( 'service-columns' );
        $this->setLabel( __( 'Service Columns', Plugin::TEXT_DOMAIN ) );
		$this->setRepeaters( ['modules', 'post_modules', 'service_modules'] );
	}

	public function setFields() {
		$fields = new FieldGenerator( $this->getKey() );

		$this->fields = [
			$fields->add('select', [
				'name' => 'background',
				'label' => __('Background', Plugin::TEXT_DOMAIN),
				'choices' => [
					'white' => 'White',
					'light' => 'Light',
					'medium' => 'Medium',
					'gray' => 'Gray',
				],
				'wrapper' => [
					'width' => '30%',
				],
			]),

			$fields->add( 'text', [
				'name'  => 'heading',
                'label' => __( 'Heading', Plugin::TEXT_DOMAIN ),
			]),

			$fields->add( 'text', [
				'name'  => 'sub_heading',
                'label' => __( 'Subheading', Plugin::TEXT_DOMAIN ),
			]),

			$fields->add('repeater', [
				'name' => 'columns',
				'label' => __('Columns', Plugin::TEXT_DOMAIN),
				'button_label' => __('Add Column', Plugin::TEXT_DOMAIN),
				'layout' => 'block',
				'sub_fields' => [
					$fields->add('text', [
						'name' => 'column_heading',
						'label' => __('Heading', Plugin::TEXT_DOMAIN),
						'wrapper' => [
							'width' => '50%',
						],
					]),

					$fields->add('textarea', [
						'name' => 'svg',
						'label' => __('SVG', Plugin::TEXT_DOMAIN),
						'wrapper' => [
							'width' => '50%',
						],
					]),

					$fields->add('wysiwyg', [
						'name' => 'text',
						'label' => __('Text', Plugin::TEXT_DOMAIN),
					]),

					$fields->add('link', [
						'name' => 'link',
						'label' => __('Link', Plugin::TEXT_DOMAIN),
					])
				],
				'min' => 1,
				'max' => 4,
			]),

			$fields->add('link', [
				'name' => 'button',
				'label' => __('Button', Plugin::TEXT_DOMAIN),
				'conditional_logic' => [
					[
						[
							'field'    => $this->getKey() . '_form',
							'operator' => '==',
							'value'    => '0'
						]
					]
				],
			]),
		];
	}
}
