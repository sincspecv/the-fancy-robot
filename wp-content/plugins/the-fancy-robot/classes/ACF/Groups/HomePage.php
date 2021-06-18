<?php


namespace TFR\ACF\Groups;


use TFR\Plugin;
use TFR\ACFToPost\Base\Group;
use TFR\ACFToPost\Util\FieldGenerator;

class HomePage extends Group {
    public function __construct() {
        parent::__construct();

        // Set the group parameters
        $this->setTitle( __( 'Home Page Content', Plugin::TEXT_DOMAIN ) );
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
                    'operator' => '==',
                    'value' => 'front_page',
                ],
            ],
        ];
    }

    public function setFields() {
        $fields = new FieldGenerator($this->getKey());

        $this->fields = [

            /********** Hero **********/

            $fields->add('tab', [
                'name' => 'hero',
                'label' => __('Hero', Plugin::TEXT_DOMAIN),
            ]),

            $fields->add('text', [
                'name' => 'hero_heading',
                'label' => __('Heading', Plugin::TEXT_DOMAIN),
            ]),

            $fields->add('image', [
                'name' => 'hero_background',
                'label' => __('Background Image', Plugin::TEXT_DOMAIN),
                'instruction' => __('Background image will be visible on mobile', Plugin::TEXT_DOMAIN),
                'wrapper' => [
                    'width' => '50%',
                ],
            ]),

            $fields->add('link', [
                'name' => 'hero_button',
                'label' => __('Button', Plugin::TEXT_DOMAIN),
                'wrapper' => [
                    'width' => '33%',
                ],
            ]),

            $fields->add('repeater', [
                'name' => 'hero_columns',
                'label' => __('Columns', Plugin::TEXT_DOMAIN),
                'layout' => 'block',
                'sub_fields' => [
                    $fields->add('text', [
                        'name' => 'heading',
                        'label' => __('Heading', Plugin::TEXT_DOMAIN),
                    ]),

                    $fields->add('text', [
                        'name' => 'text',
                        'label' => __('Text', Plugin::TEXT_DOMAIN),
                    ]),

                    $fields->add('image', [
                        'name' => 'background_image',
                        'label' => __('Background Image', Plugin::TEXT_DOMAIN),
                        'required' => 1,
                        'wrapper' => [
                            'width' => '50%',
                        ],
                    ]),

                    $fields->add('link', [
                        'name' => 'link',
                        'label' => __('Link', Plugin::TEXT_DOMAIN),
                        'wrapper' => [
                            'width' => '50%',
                        ],
                    ]),
                ],
                'min' => '1',
                'max' => '3'
            ]),

            /********** Projects Slider **********/

            $fields->add('tab', [
                'name' => 'projects_slider',
                'label' => __('Projects Slider', Plugin::TEXT_DOMAIN),
            ]),

            $fields->add('text', [
                'name' => 'projects_slider_heading',
                'label' => __('Heading', Plugin::TEXT_DOMAIN),
                'wrapper' => [
                    'width' => '50%',
                ],
            ]),

            $fields->add('image', [
                'name' => 'projects_slider_background_image',
                'label' => __('Background Image', Plugin::TEXT_DOMAIN),
                'wrapper' => [
                    'width' => '50%',
                ],
            ]),

            $fields->add('relationship', [
                'name' => 'projects_slider_projects',
                'label' => __('Projects', Plugin::TEXT_DOMAIN),
                'post_type' => [
                    0 => 'project',
                ],
                'filters' => [
                    0 => 'search',
                ],
                'return_format' => 'object',
            ]),

            /********** Columns **********/

            $fields->add('tab', [
                'name' => 'columns',
                'label' => __('Columns', Plugin::TEXT_DOMAIN),
            ]),

            $fields->add( 'text', [
                'name'  => 'columns_heading',
                'label' => __( 'Heading', Plugin::TEXT_DOMAIN ),
                'wrapper' => [
                    'width' => '70%',
                ],
            ]),

            $fields->add('link', [
                'name' => 'columns_button',
                'label' => __('Button', Plugin::TEXT_DOMAIN),
                'wrapper' => [
                    'width' => '30%',
                ],
            ]),

            $fields->add('repeater', [
                'name' => 'columns_columns',
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

                    $fields->add('image', [
                        'name' => 'image',
                        'label' => __('Image', Plugin::TEXT_DOMAIN),
                        'wrapper' => [
                            'width' => '30%',
                        ],
                    ]),

                    $fields->add('wysiwyg', [
                        'name' => 'text',
                        'label' => __('Text', Plugin::TEXT_DOMAIN),
                    ]),

//                    $fields->add('link', [
//                        'name' => 'link',
//                        'label' => __('Link', Plugin::TEXT_DOMAIN),
//                    ])
                ],
            ]),

            /********** Rows **********/

            $fields->add('tab', [
                'name' => 'rows',
                'label' => __('Rows', Plugin::TEXT_DOMAIN),
            ]),

            $fields->add('image', [
                'name' => 'rows_background_image',
                'label' => __('Background Image', Plugin::TEXT_DOMAIN),
                'wrapper' => [
                    'width' => '50%',
                ],
            ]),

            $fields->add( 'text', [
                'name'  => 'rows_heading',
                'label' => __( 'Heading', Plugin::TEXT_DOMAIN ),
            ]),

            $fields->add('relationship', [
                'name' => 'rows_testimonial',
                'label' => __('Testimonial', Plugin::TEXT_DOMAIN),
                'post_type' => [
                    0 => 'testimonial',
                ],
                'filters' => [
                    0 => 'search',
                ],
                'max' => 1,
                'return_format' => 'object',
            ]),

            $fields->add('link', [
                'name' => 'rows_button',
                'label' => __('Button', Plugin::TEXT_DOMAIN),
            ]),

            $fields->add('repeater', [
                'name' => 'rows_rows',
                'label' => __('Rows', Plugin::TEXT_DOMAIN),
                'button_label' => __('Add Row', Plugin::TEXT_DOMAIN),
                'layout' => 'block',
                'sub_fields' => [
                    $fields->add('text', [
                        'name' => 'row_heading',
                        'label' => __('Heading', Plugin::TEXT_DOMAIN),
                        'wrapper' => [
                            'width' => '50%',
                        ],
                    ]),

                    $fields->add('image', [
                        'name' => 'image',
                        'label' => __('Image', Plugin::TEXT_DOMAIN),
                        'wrapper' => [
                            'width' => '30%',
                        ],
                    ]),

                    $fields->add('wysiwyg', [
                        'name' => 'text',
                        'label' => __('Text', Plugin::TEXT_DOMAIN),
                    ]),
                ],
                'min' => 1,
                'max' => 3,
            ]),

            /********** Three Columns **********/

            $fields->add('tab', [
                'name' => 'three_columns',
                'label' => __('Three Columns', Plugin::TEXT_DOMAIN),
            ]),

            $fields->add('repeater', [
                'name' => 'three_columns_columns',
                'label' => __('Columns', Plugin::TEXT_DOMAIN),
                'button_label' => __('Add Column', Plugin::TEXT_DOMAIN),
                'layout' => 'block',
                'sub_fields' => [
                    $fields->add('text', [
                        'name' => 'column_heading',
                        'label' => __('Heading', Plugin::TEXT_DOMAIN),
                    ]),

                    $fields->add('wysiwyg', [
                        'name' => 'text',
                        'label' => __('Text', Plugin::TEXT_DOMAIN),
                    ]),
                ],
                'min' => 1,
                'max' => 3,
            ]),

            $fields->add('link', [
                'name' => 'three_columns_button',
                'label' => __('Button', Plugin::TEXT_DOMAIN),
            ]),
        ];
    }
}