<?php


namespace TFR\ACF\Groups;

use TFR\Plugin;
use TFR\ACFToPost\Base\Group;
use TFR\ACFToPost\Util\FieldGenerator;

class PageHeader extends Group {
	public function __construct() {
		parent::__construct();

		// Set the group parameters
		$this->setTitle( __( 'Page Header', Plugin::TEXT_DOMAIN ) );
		$this->setHiddenElements( ['the_content'] );
		$this->setOrder(0);
	}

    public function getLocations() {
        return [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'page',
                ],
                [
                    'param' => 'page_type',
                    'operator' => '!=',
                    'value' => 'front_page',
                ],
            ],
        ];
    }

	public function setFields() {
		$fields = new FieldGenerator($this->getKey());

		$this->fields = [
		    $fields->add('true_false', [
		        'name' => 'show_featured_image',
                'label' => __('Show Featured Image', Plugin::TEXT_DOMAIN),
                'ui' => 1,
                'ui_on_text' => 'Yes',
                'ui_off_text' => 'No',
                'wrapper' => [
                    'width' => '50%',
                ]
            ]),

			$fields->add('image', [
				'name' => 'page_header_image',
				'label' => __('Image', Plugin::TEXT_DOMAIN),
                'conditional_logic' => [
                    [
                        [
                            'field' => $this->getKey() . '_show_featured_image',
                            'operator' => '==',
                            'value' => '0',
                        ]
                    ]
                ],
                'wrapper' => [
                    'width' => '50%'
                ]
			]),

			$fields->add('wysiwyg', [
				'name' => 'page_header_intro',
				'label' => __('Intro Content', Plugin::TEXT_DOMAIN),
			]),
		];

	}
}
