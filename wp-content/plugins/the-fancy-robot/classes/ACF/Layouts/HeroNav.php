<?php


namespace TFR\ACF\Layouts;

use TFR\Plugin;
use TFR\ACFToPost\Util\FieldGenerator;
use TFR\ACFToPost\Base\Layout;

class HeroNav extends Layout {

	public function __construct() {
		parent::__construct();

		$this->setName( 'hero-nav' );
    $this->setLabel( __( 'Hero Navigation', Plugin::TEXT_DOMAIN ) );
		$this->setRepeaters( ['modules', 'post_modules', 'landing_page_modules'] );
	}

	public function setFields() {
		$fields = new FieldGenerator( $this->getKey() );

		$this->fields = [
            $fields->add('image', [
                'name' => 'video_screen',
                'label' => __('Video Screen Image', Plugin::TEXT_DOMAIN),
                'wrapper' => [
                    'width' => '33%',
                ],
            ]),

            $fields->add('file', [
                'name' => 'bg_video',
                'label' => __('Background Video', Plugin::TEXT_DOMAIN),
                'wrapper' => [
                    'width' => '33%',
                ],
            ]),

            $fields->add('image', [
                'name' => 'overlay_image',
                'label' => __('Overlay Image', Plugin::TEXT_DOMAIN),
                'wrapper' => [
                    'width' => '33%',
                ],
            ]),

			$fields->add( 'text', [
				'name'  => 'heading',
                'label' => __( 'Heading', Plugin::TEXT_DOMAIN ),
			]),

			$fields->add( 'wysiwyg', [
				'name'  => 'text',
                'label' => __( 'Text', Plugin::TEXT_DOMAIN ),
			]),

			$fields->add( 'link', [
				'name'  => 'button',
                'label' => __( 'Button', Plugin::TEXT_DOMAIN ),
			]),
		];
	}
}
