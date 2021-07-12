<?php


namespace TFR\ACF\Layouts;

use TFR\Plugin;
use TFR\Util;
use TFR\ACFToPost\Util\FieldGenerator;
use TFR\ACFToPost\Base\Layout;

class Tabs extends Layout {

	public function __construct() {
		parent::__construct();

		$this->setName( 'tabs' );
        $this->setLabel( __( 'Tabs', Plugin::TEXT_DOMAIN ) );
		$this->setRepeaters( ['modules', 'post_modules', 'landing_page_modules'] );
	}

	public function setFields() {
		$fields = new FieldGenerator( $this->getKey() );

		$this->fields = [
			$fields->add('repeater', [
				'name' => 'tabs',
				'label' => __('Tabs', Plugin::TEXT_DOMAIN),
				'button_label' => __('Add Tab', Plugin::TEXT_DOMAIN),
				'layout' => 'block',
				'sub_fields' => [
					$fields->add('text', [
						'name' => 'title',
						'label' => __('Tab Title', Plugin::TEXT_DOMAIN),
					]),

					$fields->add('wysiwyg', [
						'name' => 'content',
						'label' => __('Content', Plugin::TEXT_DOMAIN),
					]),

                    $fields->add('select', [
                        'name' => 'form',
                        'label' => __('Form', Plugin::TEXT_DOMAIN),
                        'choices' => Util::getGFForms(true),
                    ]),

                ],
				'min' => 1,
				'max' => 10,
			]),
		];
	}
}
