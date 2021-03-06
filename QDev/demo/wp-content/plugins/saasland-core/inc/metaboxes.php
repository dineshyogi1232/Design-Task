<?php
if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
        'key' => 'group_5c49c213680d0',
        'title' => 'Action Button',
        'fields' => array(
            array(
                'key' => 'field_5c4d4e8206c93',
                'label' => 'Customize the Button',
                'name' => 'customize_the_button',
                'type' => 'true_false',
                'instructions' => 'Switch to Yes if you want to display a custom button instead of the default button for this page',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'message' => '',
                'default_value' => 0,
                'ui' => 1,
                'ui_on_text' => '',
                'ui_off_text' => '',
            ),
            array(
                'key' => 'field_5c4d4553b48d7',
                'label' => 'Font Size',
                'name' => 'font_size',
                'type' => 'number',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_5c4d4e8206c93',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                ),
                'wrapper' => array(
                    'width' => '20',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => 'px',
                'min' => '',
                'max' => '',
                'step' => '',
            ),
            array(
                'key' => 'field_5c4e96ee73a8f',
                'label' => 'Border Width',
                'name' => 'border_width',
                'type' => 'number',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_5c4d4e8206c93',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                ),
                'wrapper' => array(
                    'width' => '20',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => 'px',
                'min' => '',
                'max' => '',
                'step' => '',
            ),
            array(
                'key' => 'field_5c49c4350387b',
                'label' => 'Border Radious',
                'name' => 'border_radious',
                'type' => 'group',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_5c4d4e8206c93',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                ),
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'layout' => 'table',
                'sub_fields' => array(
                    array(
                        'key' => 'field_5c49c49b0387c',
                        'label' => 'Top Left',
                        'name' => 'top_left',
                        'type' => 'number',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => 'px',
                        'min' => '',
                        'max' => '',
                        'step' => '',
                    ),
                    array(
                        'key' => 'field_5c49c4b60387e',
                        'label' => 'Top Right',
                        'name' => 'top_right',
                        'type' => 'number',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => 'px',
                        'min' => '',
                        'max' => '',
                        'step' => '',
                    ),
                    array(
                        'key' => 'field_5c49c4c90387f',
                        'label' => 'Bottom Right',
                        'name' => 'bottom-right',
                        'type' => 'number',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => 'px',
                        'min' => '',
                        'max' => '',
                        'step' => '',
                    ),
                    array(
                        'key' => 'field_5c49c4d703880',
                        'label' => 'Bottom Left',
                        'name' => 'bottom-left',
                        'type' => 'number',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => 'px',
                        'min' => '',
                        'max' => '',
                        'step' => '',
                    ),
                ),
            ),
            array(
                'key' => 'field_5c4d45f3b48d9',
                'label' => 'Normal',
                'name' => 'normal',
                'type' => 'group',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_5c4d4e8206c93',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                ),
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'layout' => 'table',
                'sub_fields' => array(
                    array(
                        'key' => 'field_5c4d4bf14fa5d',
                        'label' => 'Background Color',
                        'name' => 'background_color',
                        'type' => 'color_picker',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                    ),
                    array(
                        'key' => 'field_5c4d4c0f4fa5e',
                        'label' => 'Font Color',
                        'name' => 'font_color',
                        'type' => 'color_picker',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                    ),
                    array(
                        'key' => 'field_5c4d4c254fa5f',
                        'label' => 'Border Color',
                        'name' => 'border_color',
                        'type' => 'color_picker',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                    ),
                    array(
                        'key' => 'field_5c4d6e4d4ec66',
                        'label' => 'Box Shadow',
                        'name' => 'box_shadow',
                        'type' => 'true_false',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'message' => '',
                        'default_value' => 0,
                        'ui' => 1,
                        'ui_on_text' => '',
                        'ui_off_text' => '',
                    ),
                ),
            ),
            array(
                'key' => 'field_5c4d4c4c4fa61',
                'label' => 'Hover',
                'name' => 'hover',
                'type' => 'group',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_5c4d4e8206c93',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                ),
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'layout' => 'table',
                'sub_fields' => array(
                    array(
                        'key' => 'field_5c4d4c4c4fa62',
                        'label' => 'Background Color',
                        'name' => 'background_color',
                        'type' => 'color_picker',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                    ),
                    array(
                        'key' => 'field_5c4d4c4c4fa63',
                        'label' => 'Font Color',
                        'name' => 'font_color',
                        'type' => 'color_picker',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                    ),
                    array(
                        'key' => 'field_5c4d4c4c4fa64',
                        'label' => 'Border Color',
                        'name' => 'border_color',
                        'type' => 'color_picker',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                    ),
                    array(
                        'key' => 'field_5c4d6e714ec67',
                        'label' => 'Box Shadow',
                        'name' => 'box_shadow',
                        'type' => 'true_false',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'message' => '',
                        'default_value' => 0,
                        'ui' => 1,
                        'ui_on_text' => '',
                        'ui_off_text' => '',
                    ),
                ),
            ),
            array(
                'key' => 'field_5c4ed0039d6e3',
                'label' => 'Sticky Normal',
                'name' => 'sticky_normal',
                'type' => 'group',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_5c4d4e8206c93',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                ),
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'layout' => 'table',
                'sub_fields' => array(
                    array(
                        'key' => 'field_5c4ed0039d6e4',
                        'label' => 'Background Color',
                        'name' => 'background_color',
                        'type' => 'color_picker',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                    ),
                    array(
                        'key' => 'field_5c4ed0039d6e5',
                        'label' => 'Font Color',
                        'name' => 'font_color',
                        'type' => 'color_picker',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                    ),
                    array(
                        'key' => 'field_5c4ed0039d6e6',
                        'label' => 'Border Color',
                        'name' => 'border_color',
                        'type' => 'color_picker',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                    ),
                ),
            ),
            array(
                'key' => 'field_5c4ed01d9d6e8',
                'label' => 'Sticky Hover',
                'name' => 'sticky_hover',
                'type' => 'group',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_5c4d4e8206c93',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                ),
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'layout' => 'table',
                'sub_fields' => array(
                    array(
                        'key' => 'field_5c4ed01d9d6e9',
                        'label' => 'Background Color',
                        'name' => 'background_color',
                        'type' => 'color_picker',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                    ),
                    array(
                        'key' => 'field_5c4ed01d9d6ea',
                        'label' => 'Font Color',
                        'name' => 'font_color',
                        'type' => 'color_picker',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                    ),
                    array(
                        'key' => 'field_5c4ed01d9d6eb',
                        'label' => 'Border Color',
                        'name' => 'border_color',
                        'type' => 'color_picker',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'none',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'left',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));

    acf_add_local_field_group(array(
        'key' => 'group_5d81d0303de30',
        'title' => 'Agency Colorful Page Options',
        'fields' => array(
            array(
                'key' => 'field_5d81d2ba7fb57',
                'label' => 'Agency Colorful Contents',
                'name' => 'agency_color_options',
                'type' => 'flexible_content',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'layouts' => array(
                    'layout_5d81d2e216643' => array(
                        'key' => 'layout_5d81d2e216643',
                        'name' => 'call_to_action',
                        'label' => 'Call to Action',
                        'display' => 'row',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_5d81e5ce19d1c',
                                'label' => 'Title',
                                'name' => 'title',
                                'type' => 'textarea',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '50',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                                'maxlength' => '',
                                'rows' => '',
                                'new_lines' => '',
                            ),
                            array(
                                'key' => 'field_5d81e60c19d1d',
                                'label' => 'Button',
                                'name' => 'button',
                                'type' => 'link',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'return_format' => 'array',
                            ),
                            array(
                                'key' => 'field_5d81e62719d1e',
                                'label' => 'Featured Images',
                                'name' => 'featured_images',
                                'type' => 'group',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '50',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'layout' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'field_5d81ee7f081c5',
                                        'label' => 'Featured Image',
                                        'name' => 'featured_image',
                                        'type' => 'image',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '50',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'return_format' => 'array',
                                        'preview_size' => 'full',
                                        'library' => 'all',
                                        'min_width' => '',
                                        'min_height' => '',
                                        'min_size' => '',
                                        'max_width' => '',
                                        'max_height' => '',
                                        'max_size' => '',
                                        'mime_types' => '',
                                    ),
                                    array(
                                        'key' => 'field_5d81eeba081c6',
                                        'label' => 'Featured Image Two',
                                        'name' => 'featured_image_two',
                                        'type' => 'image',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '50',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'return_format' => 'array',
                                        'preview_size' => 'full',
                                        'library' => 'all',
                                        'min_width' => '',
                                        'min_height' => '',
                                        'min_size' => '',
                                        'max_width' => '',
                                        'max_height' => '',
                                        'max_size' => '',
                                        'mime_types' => '',
                                    ),
                                ),
                            ),
                            array(
                                'key' => 'field_5d81e6f719d21',
                                'label' => 'Floating Images',
                                'name' => 'floating_images',
                                'type' => 'group',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'layout' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'field_5d81ef3f1e177',
                                        'label' => 'Image One',
                                        'name' => 'image_one',
                                        'type' => 'image',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '33.33',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'return_format' => 'array',
                                        'preview_size' => 'full',
                                        'library' => 'all',
                                        'min_width' => '',
                                        'min_height' => '',
                                        'min_size' => '',
                                        'max_width' => '',
                                        'max_height' => '',
                                        'max_size' => '',
                                        'mime_types' => '',
                                    ),
                                    array(
                                        'key' => 'field_5d81f0311e178',
                                        'label' => 'Image Two',
                                        'name' => 'image_two',
                                        'type' => 'image',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '33.33',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'return_format' => 'array',
                                        'preview_size' => 'full',
                                        'library' => 'all',
                                        'min_width' => '',
                                        'min_height' => '',
                                        'min_size' => '',
                                        'max_width' => '',
                                        'max_height' => '',
                                        'max_size' => '',
                                        'mime_types' => '',
                                    ),
                                    array(
                                        'key' => 'field_5d81f0441e179',
                                        'label' => 'Image Three',
                                        'name' => 'image_three',
                                        'type' => 'image',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '33.33',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'return_format' => 'array',
                                        'preview_size' => 'full',
                                        'library' => 'all',
                                        'min_width' => '',
                                        'min_height' => '',
                                        'min_size' => '',
                                        'max_width' => '',
                                        'max_height' => '',
                                        'max_size' => '',
                                        'mime_types' => '',
                                    ),
                                ),
                            ),
                            array(
                                'key' => 'field_5ee5d1a392cd4',
                                'label' => 'Background Image',
                                'name' => 'background_image',
                                'type' => 'image',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'return_format' => 'array',
                                'preview_size' => 'medium',
                                'library' => 'all',
                                'min_width' => '',
                                'min_height' => '',
                                'min_size' => '',
                                'max_width' => '',
                                'max_height' => '',
                                'max_size' => '',
                                'mime_types' => '',
                            ),
                        ),
                        'min' => '',
                        'max' => '',
                    ),
                    'layout_5d82286408dd1' => array(
                        'key' => 'layout_5d82286408dd1',
                        'name' => 'call_to_action_with_featured_images',
                        'label' => 'Call to Action with Featured Images',
                        'display' => 'row',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_5d82286408dd2',
                                'label' => 'Contents',
                                'name' => 'contents',
                                'type' => 'group',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '50',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'layout' => 'table',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'field_5d8228e008dde',
                                        'label' => 'Upper Title',
                                        'name' => 'upper_title',
                                        'type' => 'text',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '33.33',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                        'placeholder' => '',
                                        'prepend' => '',
                                        'append' => '',
                                        'maxlength' => '',
                                    ),
                                    array(
                                        'key' => 'field_5d8228f808ddf',
                                        'label' => 'Title',
                                        'name' => 'title',
                                        'type' => 'textarea',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '33.33',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                        'placeholder' => '',
                                        'maxlength' => '',
                                        'rows' => '',
                                        'new_lines' => 'br',
                                    ),
                                    array(
                                        'key' => 'field_5d82296308de0',
                                        'label' => 'Subtitle',
                                        'name' => 'subtitle',
                                        'type' => 'textarea',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '33.33',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                        'placeholder' => '',
                                        'maxlength' => '',
                                        'rows' => '',
                                        'new_lines' => 'br',
                                    ),
                                ),
                            ),
                            array(
                                'key' => 'field_5d82286408dd3',
                                'label' => 'Button',
                                'name' => 'button',
                                'type' => 'group',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '50',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'layout' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'field_5d82286408dd4',
                                        'label' => 'Button_label',
                                        'name' => 'button_label',
                                        'type' => 'text',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '50',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                        'placeholder' => '',
                                        'prepend' => '',
                                        'append' => '',
                                        'maxlength' => '',
                                    ),
                                    array(
                                        'key' => 'field_5d82286408dd5',
                                        'label' => 'Button URL',
                                        'name' => 'button_url',
                                        'type' => 'link',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '50',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'return_format' => 'array',
                                    ),
                                ),
                            ),
                            array(
                                'key' => 'field_5d82286408dd6',
                                'label' => 'Featured Image Gallery',
                                'name' => 'featured_image_gallery',
                                'type' => 'gallery',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '100',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'return_format' => 'array',
                                'preview_size' => 'full',
                                'insert' => 'append',
                                'library' => 'all',
                                'min' => '',
                                'max' => '',
                                'min_width' => '',
                                'min_height' => '',
                                'min_size' => '',
                                'max_width' => '',
                                'max_height' => '',
                                'max_size' => '',
                                'mime_types' => '',
                            ),
                            array(
                                'key' => 'field_5d82286408dd9',
                                'label' => 'Floating Images',
                                'name' => 'floating_images',
                                'type' => 'group',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'layout' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'field_5d82286408dda',
                                        'label' => 'Image One',
                                        'name' => 'image_one',
                                        'type' => 'image',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '50',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'return_format' => 'array',
                                        'preview_size' => 'full',
                                        'library' => 'all',
                                        'min_width' => '',
                                        'min_height' => '',
                                        'min_size' => '',
                                        'max_width' => '',
                                        'max_height' => '',
                                        'max_size' => '',
                                        'mime_types' => '',
                                    ),
                                    array(
                                        'key' => 'field_5d82286408ddb',
                                        'label' => 'Image Two',
                                        'name' => 'image_two',
                                        'type' => 'image',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '50',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'return_format' => 'array',
                                        'preview_size' => 'full',
                                        'library' => 'all',
                                        'min_width' => '',
                                        'min_height' => '',
                                        'min_size' => '',
                                        'max_width' => '',
                                        'max_height' => '',
                                        'max_size' => '',
                                        'mime_types' => '',
                                    ),
                                ),
                            ),
                            array(
                                'key' => 'field_5d82286408ddd',
                                'label' => 'Background Image',
                                'name' => 'background_image',
                                'type' => 'image',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'return_format' => 'array',
                                'preview_size' => 'full',
                                'library' => 'all',
                                'min_width' => '',
                                'min_height' => '',
                                'min_size' => '',
                                'max_width' => '',
                                'max_height' => '',
                                'max_size' => '',
                                'mime_types' => '',
                            ),
                        ),
                        'min' => '',
                        'max' => '',
                    ),
                    'layout_5d831fccb78a6' => array(
                        'key' => 'layout_5d831fccb78a6',
                        'name' => 'two_column_features',
                        'label' => 'Two Column Features',
                        'display' => 'row',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_5d832021b78a7',
                                'label' => 'Title Section',
                                'name' => 'title_section',
                                'type' => 'group',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'layout' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'field_5d832074b78a8',
                                        'label' => 'Upper Title',
                                        'name' => 'upper_title',
                                        'type' => 'text',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '50',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                        'placeholder' => '',
                                        'prepend' => '',
                                        'append' => '',
                                        'maxlength' => '',
                                    ),
                                    array(
                                        'key' => 'field_5d832095b78a9',
                                        'label' => 'Title',
                                        'name' => 'title',
                                        'type' => 'text',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '50',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                        'placeholder' => '',
                                        'prepend' => '',
                                        'append' => '',
                                        'maxlength' => '',
                                    ),
                                ),
                            ),
                            array(
                                'key' => 'field_5d832121b78aa',
                                'label' => 'Features list',
                                'name' => 'features_list',
                                'type' => 'repeater',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'collapsed' => '',
                                'min' => 0,
                                'max' => 0,
                                'layout' => 'table',
                                'button_label' => 'Add Feature',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'field_5d8331c71c1a2',
                                        'label' => 'Title',
                                        'name' => 'title',
                                        'type' => 'text',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '33.33',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                        'placeholder' => '',
                                        'prepend' => '',
                                        'append' => '',
                                        'maxlength' => '',
                                    ),
                                    array(
                                        'key' => 'field_5d83320a1c1a3',
                                        'label' => 'Subtitle',
                                        'name' => 'subtitle',
                                        'type' => 'textarea',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '33.33',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                        'placeholder' => '',
                                        'maxlength' => '',
                                        'rows' => '',
                                        'new_lines' => 'br',
                                    ),
                                    array(
                                        'key' => 'field_5d8332311c1a4',
                                        'label' => 'Icon Image',
                                        'name' => 'icon_image',
                                        'type' => 'image',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '33.33',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'return_format' => 'array',
                                        'preview_size' => 'full',
                                        'library' => 'all',
                                        'min_width' => '',
                                        'min_height' => '',
                                        'min_size' => '',
                                        'max_width' => '',
                                        'max_height' => '',
                                        'max_size' => '',
                                        'mime_types' => '',
                                    ),
                                ),
                            ),
                            array(
                                'key' => 'field_5d832290b78ab',
                                'label' => 'Featured Images',
                                'name' => 'featured_images_sec',
                                'type' => 'group',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'layout' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'field_5d8322a6b78ac',
                                        'label' => 'Featured Image',
                                        'name' => 'featured_image_one',
                                        'type' => 'image',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '50',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'return_format' => 'array',
                                        'preview_size' => 'full',
                                        'library' => 'all',
                                        'min_width' => '',
                                        'min_height' => '',
                                        'min_size' => '',
                                        'max_width' => '',
                                        'max_height' => '',
                                        'max_size' => '',
                                        'mime_types' => '',
                                    ),
                                    array(
                                        'key' => 'field_5d8322dab78ad',
                                        'label' => 'Featured Shape',
                                        'name' => 'featured_image_two',
                                        'type' => 'image',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '50',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'return_format' => 'array',
                                        'preview_size' => 'full',
                                        'library' => 'all',
                                        'min_width' => '',
                                        'min_height' => '',
                                        'min_size' => '',
                                        'max_width' => '',
                                        'max_height' => '',
                                        'max_size' => '',
                                        'mime_types' => '',
                                    ),
                                ),
                            ),
                            array(
                                'key' => 'field_5d832310b78ae',
                                'label' => 'Floating Images',
                                'name' => 'floating_images',
                                'type' => 'group',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'layout' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'field_5d832310b78af',
                                        'label' => 'Image One',
                                        'name' => 'image_one',
                                        'type' => 'image',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '50',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'return_format' => 'array',
                                        'preview_size' => 'full',
                                        'library' => 'all',
                                        'min_width' => '',
                                        'min_height' => '',
                                        'min_size' => '',
                                        'max_width' => '',
                                        'max_height' => '',
                                        'max_size' => '',
                                        'mime_types' => '',
                                    ),
                                    array(
                                        'key' => 'field_5d832310b78b0',
                                        'label' => 'Image Two',
                                        'name' => 'image_two',
                                        'type' => 'image',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '50',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'return_format' => 'array',
                                        'preview_size' => 'full',
                                        'library' => 'all',
                                        'min_width' => '',
                                        'min_height' => '',
                                        'min_size' => '',
                                        'max_width' => '',
                                        'max_height' => '',
                                        'max_size' => '',
                                        'mime_types' => '',
                                    ),
                                ),
                            ),
                            array(
                                'key' => 'field_5d83239dd45a8',
                                'label' => 'Background Image',
                                'name' => 'background_image',
                                'type' => 'image',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'return_format' => 'array',
                                'preview_size' => 'full',
                                'library' => 'all',
                                'min_width' => '',
                                'min_height' => '',
                                'min_size' => '',
                                'max_width' => '',
                                'max_height' => '',
                                'max_size' => '',
                                'mime_types' => '',
                            ),
                        ),
                        'min' => '',
                        'max' => '',
                    ),
                    'layout_5d8347e2b2b13' => array(
                        'key' => 'layout_5d8347e2b2b13',
                        'name' => 'testimonials',
                        'label' => 'Testimonials',
                        'display' => 'row',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_5d8347e2b2b14',
                                'label' => 'Title Section',
                                'name' => 'title_section',
                                'type' => 'group',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'layout' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'field_5d8347e2b2b15',
                                        'label' => 'Upper Title',
                                        'name' => 'upper_title',
                                        'type' => 'text',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '50',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                        'placeholder' => '',
                                        'prepend' => '',
                                        'append' => '',
                                        'maxlength' => '',
                                    ),
                                    array(
                                        'key' => 'field_5d8347e2b2b16',
                                        'label' => 'Title',
                                        'name' => 'title',
                                        'type' => 'text',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '50',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                        'placeholder' => '',
                                        'prepend' => '',
                                        'append' => '',
                                        'maxlength' => '',
                                    ),
                                ),
                            ),
                            array(
                                'key' => 'field_5d8347e2b2b17',
                                'label' => 'Testimonials List',
                                'name' => 'testimonials_list',
                                'type' => 'repeater',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'collapsed' => '',
                                'min' => 0,
                                'max' => 0,
                                'layout' => 'table',
                                'button_label' => '',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'field_5d8347e2b2b18',
                                        'label' => 'Author Name',
                                        'name' => 'author_name',
                                        'type' => 'text',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '25',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                        'placeholder' => '',
                                        'prepend' => '',
                                        'append' => '',
                                        'maxlength' => '',
                                    ),
                                    array(
                                        'key' => 'field_5d834871b2b25',
                                        'label' => 'Contents',
                                        'name' => 'contents',
                                        'type' => 'textarea',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '25',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                        'placeholder' => '',
                                        'maxlength' => '',
                                        'rows' => '',
                                        'new_lines' => 'br',
                                    ),
                                    array(
                                        'key' => 'field_5d8347e2b2b1a',
                                        'label' => 'Author Image',
                                        'name' => 'author_image',
                                        'type' => 'image',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '30',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'return_format' => 'array',
                                        'preview_size' => 'full',
                                        'library' => 'all',
                                        'min_width' => '',
                                        'min_height' => '',
                                        'min_size' => '',
                                        'max_width' => '',
                                        'max_height' => '',
                                        'max_size' => '',
                                        'mime_types' => '',
                                    ),
                                    array(
                                        'key' => 'field_5d8348b8b2b26',
                                        'label' => 'Star Ratting',
                                        'name' => 'star_ratting',
                                        'type' => 'select',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '25',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'choices' => array(
                                            1 => '1',
                                            '1.5' => '1.5',
                                            2 => '2',
                                            '2.5' => '2.5',
                                            3 => '3',
                                            '3.5' => '3.5',
                                            4 => '4',
                                            '4.5' => '4.5',
                                            5 => '5',
                                        ),
                                        'default_value' => array(
                                        ),
                                        'allow_null' => 0,
                                        'multiple' => 0,
                                        'ui' => 0,
                                        'return_format' => 'value',
                                        'ajax' => 0,
                                        'placeholder' => '',
                                    ),
                                ),
                            ),
                            array(
                                'key' => 'field_5d8347e2b2b1b',
                                'label' => 'Featured Images',
                                'name' => 'testimonials_featured_images',
                                'type' => 'group',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'layout' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'field_5d8347e2b2b1c',
                                        'label' => 'Featured Image',
                                        'name' => 'featured_image',
                                        'type' => 'image',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '50',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'return_format' => 'array',
                                        'preview_size' => 'full',
                                        'library' => 'all',
                                        'min_width' => '',
                                        'min_height' => '',
                                        'min_size' => '',
                                        'max_width' => '',
                                        'max_height' => '',
                                        'max_size' => '',
                                        'mime_types' => '',
                                    ),
                                    array(
                                        'key' => 'field_5d8347e2b2b1d',
                                        'label' => 'Another Featured Image',
                                        'name' => 'another_featured_image',
                                        'type' => 'image',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '50',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'return_format' => 'array',
                                        'preview_size' => 'full',
                                        'library' => 'all',
                                        'min_width' => '',
                                        'min_height' => '',
                                        'min_size' => '',
                                        'max_width' => '',
                                        'max_height' => '',
                                        'max_size' => '',
                                        'mime_types' => '',
                                    ),
                                ),
                            ),
                            array(
                                'key' => 'field_5d8347e2b2b1e',
                                'label' => 'Floating Images',
                                'name' => 'floating_images',
                                'type' => 'group',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'layout' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'field_5d8347e2b2b1f',
                                        'label' => 'Image One',
                                        'name' => 'image_one',
                                        'type' => 'image',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '50',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'return_format' => 'array',
                                        'preview_size' => 'full',
                                        'library' => 'all',
                                        'min_width' => '',
                                        'min_height' => '',
                                        'min_size' => '',
                                        'max_width' => '',
                                        'max_height' => '',
                                        'max_size' => '',
                                        'mime_types' => '',
                                    ),
                                    array(
                                        'key' => 'field_5d8347e2b2b20',
                                        'label' => 'Image Two',
                                        'name' => 'image_two',
                                        'type' => 'image',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '50',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'return_format' => 'array',
                                        'preview_size' => 'full',
                                        'library' => 'all',
                                        'min_width' => '',
                                        'min_height' => '',
                                        'min_size' => '',
                                        'max_width' => '',
                                        'max_height' => '',
                                        'max_size' => '',
                                        'mime_types' => '',
                                    ),
                                ),
                            ),
                            array(
                                'key' => 'field_5d8347e2b2b21',
                                'label' => 'Background Image',
                                'name' => 'background_image',
                                'type' => 'image',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'return_format' => 'array',
                                'preview_size' => 'full',
                                'library' => 'all',
                                'min_width' => '',
                                'min_height' => '',
                                'min_size' => '',
                                'max_width' => '',
                                'max_height' => '',
                                'max_size' => '',
                                'mime_types' => '',
                            ),
                        ),
                        'min' => '',
                        'max' => '',
                    ),
                    'layout_5d8363b1e0e6f' => array(
                        'key' => 'layout_5d8363b1e0e6f',
                        'name' => 'contact_form',
                        'label' => 'Contact Form',
                        'display' => 'row',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_5d8363cae0e70',
                                'label' => 'Title Section',
                                'name' => 'title_section',
                                'type' => 'group',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'layout' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'field_5d8363e4e0e71',
                                        'label' => 'Upper Title',
                                        'name' => 'upper_title',
                                        'type' => 'text',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '50',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                        'placeholder' => '',
                                        'prepend' => '',
                                        'append' => '',
                                        'maxlength' => '',
                                    ),
                                    array(
                                        'key' => 'field_5d836411e0e72',
                                        'label' => 'Title',
                                        'name' => 'title',
                                        'type' => 'text',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '50',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                        'placeholder' => '',
                                        'prepend' => '',
                                        'append' => '',
                                        'maxlength' => '',
                                    ),
                                ),
                            ),
                            array(
                                'key' => 'field_5d836459e0e73',
                                'label' => 'Informations',
                                'name' => 'informations',
                                'type' => 'repeater',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'collapsed' => '',
                                'min' => 0,
                                'max' => 0,
                                'layout' => 'table',
                                'button_label' => '',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'field_5d8364ede0e74',
                                        'label' => 'Info',
                                        'name' => 'info',
                                        'type' => 'wysiwyg',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '75',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                        'tabs' => 'all',
                                        'toolbar' => 'full',
                                        'media_upload' => 1,
                                        'delay' => 0,
                                    ),
                                    array(
                                        'key' => 'field_5d83660ce0e75',
                                        'label' => 'Icon',
                                        'name' => 'icon',
                                        'type' => 'text',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                        'placeholder' => '',
                                        'prepend' => '',
                                        'append' => '',
                                        'maxlength' => '',
                                    ),
                                ),
                            ),
                            array(
                                'key' => 'field_5d836ae7e0e7a',
                                'label' => 'Floating Images',
                                'name' => 'floating_images',
                                'type' => 'group',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'layout' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'field_5d836b0be0e7b',
                                        'label' => 'Image One',
                                        'name' => 'image_one',
                                        'type' => 'image',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '50',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'return_format' => 'array',
                                        'preview_size' => 'full',
                                        'library' => 'all',
                                        'min_width' => '',
                                        'min_height' => '',
                                        'min_size' => '',
                                        'max_width' => '',
                                        'max_height' => '',
                                        'max_size' => '',
                                        'mime_types' => '',
                                    ),
                                    array(
                                        'key' => 'field_5d836b77e0e7c',
                                        'label' => 'Image Two',
                                        'name' => 'image_two',
                                        'type' => 'image',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '50',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'return_format' => 'array',
                                        'preview_size' => 'full',
                                        'library' => 'all',
                                        'min_width' => '',
                                        'min_height' => '',
                                        'min_size' => '',
                                        'max_width' => '',
                                        'max_height' => '',
                                        'max_size' => '',
                                        'mime_types' => '',
                                    ),
                                ),
                            ),
                            array(
                                'key' => 'field_5d83693ce0e76',
                                'label' => 'Background Image',
                                'name' => 'background_image',
                                'type' => 'image',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'return_format' => 'array',
                                'preview_size' => 'full',
                                'library' => 'all',
                                'min_width' => '',
                                'min_height' => '',
                                'min_size' => '',
                                'max_width' => '',
                                'max_height' => '',
                                'max_size' => '',
                                'mime_types' => '',
                            ),
                            array(
                                'key' => 'field_5d836e2ee0e7d',
                                'label' => 'Shortcode',
                                'name' => 'shortcode',
                                'type' => 'text',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                                'prepend' => '',
                                'append' => '',
                                'maxlength' => '',
                            ),
                        ),
                        'min' => '',
                        'max' => '',
                    ),
                ),
                'button_label' => 'Add Section',
                'min' => '',
                'max' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'page-agency-colorful.php',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));

    acf_add_local_field_group(array(
        'key' => 'group_5bcf1a7163114',
        'title' => 'Banner Settings',
        'fields' => array(
            array(
                'key' => 'field_5bcf1c8eb4909',
                'label' => 'Banner',
                'name' => 'is_banner',
                'type' => 'true_false',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'message' => '',
                'default_value' => 1,
                'ui' => 1,
                'ui_on_text' => 'Show',
                'ui_off_text' => 'Hide',
            ),
            array(
                'key' => 'field_5e131f2b26ff8',
                'label' => 'Text Color',
                'name' => 'banner_text_color',
                'type' => 'color_picker',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_5bcf1c8eb4909',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                ),
                'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
            ),
            array(
                'key' => 'field_5e6b6fea62339',
                'label' => 'Shape Image',
                'name' => 'banner_shape_image',
                'type' => 'image',
                'instructions' => 'Use here a transparent png shape image. The shape will appear on the top right side of the banner.',
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_5bcf1c8eb4909',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                ),
                'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'id',
                'preview_size' => 'thumbnail',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
            ),
            array(
                'key' => 'field_5e6b62c7c2873',
                'label' => 'Background Type',
                'name' => 'banner_background_type',
                'type' => 'button_group',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_5bcf1c8eb4909',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                ),
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'choices' => array(
                    'color' => 'Gradient Color',
                    'image' => 'Image with Overlay',
                ),
                'allow_null' => 0,
                'default_value' => '',
                'layout' => 'horizontal',
                'return_format' => 'value',
            ),
            array(
                'key' => 'field_5be92117b462c',
                'label' => 'Background Color Left',
                'name' => 'background_color_left',
                'type' => 'color_picker',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_5bcf1c8eb4909',
                            'operator' => '==',
                            'value' => '1',
                        ),
                        array(
                            'field' => 'field_5e6b62c7c2873',
                            'operator' => '==',
                            'value' => 'color',
                        ),
                    ),
                ),
                'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
            ),
            array(
                'key' => 'field_5be92136b462d',
                'label' => 'Background Color Right',
                'name' => 'background_color_right',
                'type' => 'color_picker',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_5bcf1c8eb4909',
                            'operator' => '==',
                            'value' => '1',
                        ),
                        array(
                            'field' => 'field_5e6b62c7c2873',
                            'operator' => '==',
                            'value' => 'color',
                        ),
                    ),
                ),
                'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
            ),
            array(
                'key' => 'field_5c04cc6216add',
                'label' => 'Background Image',
                'name' => 'banner_background_image',
                'type' => 'image',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_5bcf1c8eb4909',
                            'operator' => '==',
                            'value' => '1',
                        ),
                        array(
                            'field' => 'field_5e6b62c7c2873',
                            'operator' => '==',
                            'value' => 'image',
                        ),
                    ),
                ),
                'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'url',
                'preview_size' => 'thumbnail',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
            ),
            array(
                'key' => 'field_5e6b6aca930c0',
                'label' => 'Overlay Color',
                'name' => 'banner_overlay_color',
                'type' => 'extended-color-picker',
                'instructions' => 'The overlay color should be transparent (RGBA).',
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_5bcf1c8eb4909',
                            'operator' => '==',
                            'value' => '1',
                        ),
                        array(
                            'field' => 'field_5e6b62c7c2873',
                            'operator' => '==',
                            'value' => 'image',
                        ),
                    ),
                ),
                'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'color_palette' => '',
                'hide_palette' => 0,
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'none',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'left',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));

    acf_add_local_field_group(array(
        'key' => 'group_5d9f223dc803a',
        'title' => 'Case Study Options',
        'fields' => array(
            array(
                'key' => 'field_5d9f244b28d92',
                'label' => 'Case Study Info',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'left',
                'endpoint' => 0,
            ),
            array(
                'key' => 'field_5d9f272f28d93',
                'label' => 'Title',
                'name' => 'cs_title',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_5d9f2c0156baf',
                'label' => 'Button',
                'name' => 'cs_button',
                'type' => 'link',
                'instructions' => 'You can place here Case Study demo link.',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'array',
            ),
            array(
                'key' => 'field_5d9f27e428d94',
                'label' => 'Attributes',
                'name' => 'cs_attributes',
                'type' => 'repeater',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'collapsed' => '',
                'min' => 0,
                'max' => 0,
                'layout' => 'table',
                'button_label' => 'Add Attributes',
                'sub_fields' => array(
                    array(
                        'key' => 'field_5d9f29b528d95',
                        'label' => 'Attribute Key',
                        'name' => 'cs_attr_key',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                    array(
                        'key' => 'field_5d9f29ca28d96',
                        'label' => 'Attribute Value',
                        'name' => 'cs_attr_value',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                ),
            ),
            array(
                'key' => 'field_5d9f226728d90',
                'label' => 'Banner Options',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'left',
                'endpoint' => 0,
            ),
            array(
                'key' => 'field_5d9f22f128d91',
                'label' => 'Banner',
                'name' => 'banner',
                'type' => 'clone',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'clone' => array(
                    0 => 'group_5bcf1a7163114',
                ),
                'display' => 'seamless',
                'layout' => 'block',
                'prefix_label' => 0,
                'prefix_name' => 0,
            ),
            array(
                'key' => 'field_5e8f02be7aea2',
                'label' => 'Header Options',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'left',
                'endpoint' => 0,
            ),
            array(
                'key' => 'field_5e8f03b97aea3',
                'label' => 'Header Options',
                'name' => 'header_options',
                'type' => 'clone',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'clone' => array(
                    0 => 'group_5bffabdef01e1',
                ),
                'display' => 'seamless',
                'layout' => 'block',
                'prefix_label' => 0,
                'prefix_name' => 0,
            ),
            array(
                'key' => 'field_5e8f03fe7aea4',
                'label' => 'Action Button',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'left',
                'endpoint' => 0,
            ),
            array(
                'key' => 'field_5e8f04197aea5',
                'label' => 'Action Button',
                'name' => 'action_button',
                'type' => 'clone',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'clone' => array(
                    0 => 'group_5c49c213680d0',
                ),
                'display' => 'seamless',
                'layout' => 'block',
                'prefix_label' => 0,
                'prefix_name' => 0,
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'case_study',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));

    acf_add_local_field_group(array(
        'key' => 'group_5c3482e937413',
        'title' => 'Footer Settings',
        'fields' => array(
            array(
                'key' => 'field_5c3483a3d804a',
                'label' => 'Footer Visibility',
                'name' => 'footer_visibility',
                'type' => 'true_false',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'message' => '',
                'default_value' => 1,
                'ui' => 1,
                'ui_on_text' => 'Show',
                'ui_off_text' => 'Hide',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'none',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));

    acf_add_local_field_group(array(
        'key' => 'group_5bffabdef01e1',
        'title' => 'Header Settings',
        'fields' => array(
            array(
                'key' => 'field_5c4fea89283cc',
                'label' => 'Header Layout',
                'name' => 'header_layout',
                'type' => 'select',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                ),
                'choices' => array(
                    'default' => 'Default',
                    'boxed' => 'Boxed',
                    'wide' => 'Wide',
                    'full_width' => 'Fullwidth',
                ),
                'default_value' => array(
                    0 => 'default',
                ),
                'allow_null' => 0,
                'multiple' => 0,
                'ui' => 0,
                'return_format' => 'value',
                'ajax' => 0,
                'placeholder' => '',
            ),
            array(
                'key' => 'field_5ea562465e785',
                'label' => 'Navbar Type',
                'name' => 'navbar_type',
                'type' => 'select',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                ),
                'choices' => array(
                    'default' => 'Default',
                    'classic' => 'Classic Horizontal Navbar',
                    'hamburger' => 'Hamburger Overlay Menu',
                ),
                'default_value' => array(
                    0 => 'default',
                ),
                'allow_null' => 0,
                'multiple' => 0,
                'ui' => 0,
                'return_format' => 'value',
                'ajax' => 0,
                'placeholder' => '',
            ),
            array(
                'key' => 'field_5c07ae5e6869e',
                'label' => 'Use Sticky Logo',
                'name' => 'reverse_logo',
                'type' => 'true_false',
                'instructions' => 'Use only the default sticky logo instead of two logos.',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                ),
                'message' => '',
                'default_value' => 0,
                'ui' => 1,
                'ui_on_text' => '',
                'ui_off_text' => '',
            ),
            array(
                'key' => 'field_5e66557945451',
                'label' => 'Navigation',
                'name' => 'navigation',
                'type' => 'button_group',
                'instructions' => 'Choose Onepage Navigation, if you want to scroll down the menu items to the same page sections.
Note: The onepage menu items box will be closed instantly after clicking on any menu items on mobile device.',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                ),
                'choices' => array(
                    'normal' => 'Normal',
                    'onepage' => 'Onepage',
                ),
                'allow_null' => 0,
                'default_value' => 'normal',
                'layout' => 'horizontal',
                'return_format' => 'value',
            ),
            array(
                'key' => 'field_5ca46de838e6b',
                'label' => 'Mini Cart',
                'name' => 'mini_cart',
                'type' => 'group',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'layout' => 'table',
                'sub_fields' => array(
                    array(
                        'key' => 'field_5ca46e8e38e6d',
                        'label' => 'Cart Color',
                        'name' => 'cart_color',
                        'type' => 'color_picker',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                    ),
                    array(
                        'key' => 'field_5ca46e0838e6c',
                        'label' => 'Count Text Color',
                        'name' => 'count_text_color',
                        'type' => 'color_picker',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                    ),
                ),
            ),
            array(
                'key' => 'field_5c07ae546869d',
                'label' => 'Menu item color',
                'name' => 'menu_item_color',
                'type' => 'color_picker',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '33',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
            ),
            array(
                'key' => 'field_5e26cd3292996',
                'label' => 'Sticky Menu Color',
                'name' => 'sticky_menu_color',
                'type' => 'color_picker',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '33',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
            ),
            array(
                'key' => 'field_5c49a03e7a579',
                'label' => 'Menu Item Active Color',
                'name' => 'menu_item_active_color',
                'type' => 'color_picker',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '33',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'none',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'left',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));

    acf_add_local_field_group(array(
        'key' => 'group_5bf152f3207b5',
        'title' => 'Icon Settings',
        'fields' => array(
            array(
                'key' => 'field_5bf15304a2c95',
                'label' => 'Color Left',
                'name' => 'color_left',
                'type' => 'color_picker',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '33.3',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
            ),
            array(
                'key' => 'field_5bf1531ca2c96',
                'label' => 'Color Right',
                'name' => 'color_right',
                'type' => 'color_picker',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '33.3',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
            ),
            array(
                'key' => 'field_5bf1537fa2c97',
                'label' => 'Shadow Color',
                'name' => 'shadow_color',
                'type' => 'extended-color-picker',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '33.3',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'color_palette' => '',
                'hide_palette' => 0,
            ),
            array(
                'key' => 'field_5d22ebd66380d',
                'label' => 'Icon Class',
                'name' => 'icon',
                'type' => 'text',
                'instructions' => 'Input here the icon class. You can use here the Themify icons https://themify.me/themify-icons',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'none',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'left',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));

    acf_add_local_field_group(array(
        'key' => 'group_5c24ab612b60b',
        'title' => 'Job Type and Location',
        'fields' => array(
            array(
                'key' => 'field_5c24ab8e308ad',
                'label' => 'Job Type',
                'name' => 'job_type',
                'type' => 'taxonomy',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'taxonomy' => 'job_type',
                'field_type' => 'radio',
                'allow_null' => 0,
                'add_term' => 1,
                'save_terms' => 1,
                'load_terms' => 0,
                'return_format' => 'object',
                'multiple' => 0,
            ),
            array(
                'key' => 'field_5c24adfe30e46',
                'label' => 'Job Location',
                'name' => 'job_location',
                'type' => 'taxonomy',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'taxonomy' => 'job_location',
                'field_type' => 'radio',
                'allow_null' => 0,
                'add_term' => 1,
                'save_terms' => 1,
                'load_terms' => 0,
                'return_format' => 'object',
                'multiple' => 0,
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'job',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'side',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));

    acf_add_local_field_group(array(
        'key' => 'group_5c0f82c44d35a',
        'title' => 'Job Type Options',
        'fields' => array(
            array(
                'key' => 'field_5c0f82e1446dd',
                'label' => 'Color',
                'name' => 'color',
                'type' => 'color_picker',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'taxonomy',
                    'operator' => '==',
                    'value' => 'job_type',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));

    acf_add_local_field_group(array(
        'key' => 'group_5c0794f9a7bdb',
        'title' => 'Page Settings',
        'fields' => array(
            array(
                'key' => 'field_5c079574ec3c6',
                'label' => 'Page Content Padding',
                'name' => 'page_content_padding',
                'type' => 'group',
                'instructions' => 'Input the padding in pixels. 
And leave the fields empty for default padding.',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'layout' => 'table',
                'sub_fields' => array(
                    array(
                        'key' => 'field_5c0795e6ec3c7',
                        'label' => 'Padding Top',
                        'name' => 'padding_top',
                        'type' => 'number',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => 'px',
                        'min' => '',
                        'max' => '',
                        'step' => '',
                    ),
                    array(
                        'key' => 'field_5c079657ec3c8',
                        'label' => 'Padding Bottom',
                        'name' => 'padding_bottom',
                        'type' => 'number',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => 'px',
                        'min' => '',
                        'max' => '',
                        'step' => '',
                    ),
                ),
            ),
            array(
                'key' => 'field_5c0796a6ec3c9',
                'label' => 'Background Color',
                'name' => 'background_color',
                'type' => 'color_picker',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'elementor_library',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'left',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));

    acf_add_local_field_group(array(
        'key' => 'group_5bffee088fb34',
        'title' => 'Portfolio Settings',
        'fields' => array(
            array(
                'key' => 'field_5e13120c4da64',
                'label' => 'Banner Options',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'left',
                'endpoint' => 0,
            ),
            array(
                'key' => 'field_5e1312274da65',
                'label' => 'Banner',
                'name' => 'banner',
                'type' => 'clone',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'clone' => array(
                    0 => 'group_5bcf1a7163114',
                ),
                'display' => 'seamless',
                'layout' => 'block',
                'prefix_label' => 0,
                'prefix_name' => 0,
            ),
            array(
                'key' => 'field_5e1311f24da63',
                'label' => 'Portfolio Options',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'left',
                'endpoint' => 0,
            ),
            array(
                'key' => 'field_5c04caa74aec3',
                'label' => 'Layout',
                'name' => 'layout',
                'type' => 'select',
                'instructions' => 'Choose the portfolio single page layout from the dropdown options. The default layout comes from Theme Settings > Custom Post Types > Portfolio',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                ),
                'choices' => array(
                    'default' => 'Default',
                    'leftc_righti' => 'Left Content Right Images',
                    'lefti_rightc' => 'Left Images Right Content',
                    'topi_bottomc' => 'Top Images Bottom Content',
                ),
                'default_value' => array(
                    0 => 'default',
                ),
                'allow_null' => 0,
                'multiple' => 0,
                'ui' => 0,
                'return_format' => 'value',
                'ajax' => 0,
                'placeholder' => '',
            ),
            array(
                'key' => 'field_5ef9d788ece87',
                'label' => 'Custom URL',
                'name' => 'custom_url',
                'type' => 'url',
                'instructions' => 'If you want to open a custom URL on clicking on a portfolio item, input that URL here. The custom URL will be placed instead of the single portfolio page URL.',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
            ),
            array(
                'key' => 'field_5bffeed05c87f',
                'label' => 'Portfolio Attributes',
                'name' => 'portfolio_attributes',
                'type' => 'repeater',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'collapsed' => '',
                'min' => 0,
                'max' => 0,
                'layout' => 'table',
                'button_label' => '',
                'sub_fields' => array(
                    array(
                        'key' => 'field_5bffeef65c880',
                        'label' => 'Attribute Title',
                        'name' => 'attribute_title',
                        'type' => 'text',
                        'instructions' => 'Enter a attribute name/title of this portfolio',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                    array(
                        'key' => 'field_5bffef0e5c881',
                        'label' => 'Attribute Value',
                        'name' => 'attribute_value',
                        'type' => 'text',
                        'instructions' => 'Enter a attribute value of this portfolio',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                ),
            ),
            array(
                'key' => 'field_5bfff0ba75a7e',
                'label' => 'Portfolio Images',
                'name' => 'portfolio_images',
                'type' => 'gallery',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'min' => '',
                'max' => '',
                'insert' => 'append',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => 'jpg, png',
                'return_format' => 'array',
                'preview_size' => 'medium',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'portfolio',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));

    acf_add_local_field_group(array(
        'key' => 'group_5e131a248a83c',
        'title' => 'Product Options',
        'fields' => array(
            array(
                'key' => 'field_5e131a413e3cc',
                'label' => 'Banner Options',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'left',
                'endpoint' => 0,
            ),
            array(
                'key' => 'field_5e131b3f3e3cd',
                'label' => 'Title',
                'name' => 'title',
                'type' => 'text',
                'instructions' => 'If you leave this field empty, the banner title will be taken from the Product Title',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_5e131b803e3ce',
                'label' => 'Subtitle',
                'name' => 'subtitle',
                'type' => 'textarea',
                'instructions' => 'If you leave this field empty, the banner title will be taken from the Product Short Description',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => '',
                'new_lines' => '',
            ),
            array(
                'key' => 'field_5e131bd13e3cf',
                'label' => 'Banner',
                'name' => 'banner',
                'type' => 'clone',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'clone' => array(
                    0 => 'group_5bcf1a7163114',
                ),
                'display' => 'seamless',
                'layout' => 'block',
                'prefix_label' => 0,
                'prefix_name' => 0,
            ),
            array(
                'key' => 'field_5e133cd0c5348',
                'label' => 'Header Options',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'left',
                'endpoint' => 0,
            ),
            array(
                'key' => 'field_5e133ce4c5349',
                'label' => 'Header',
                'name' => 'header',
                'type' => 'clone',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'clone' => array(
                    0 => 'group_5bffabdef01e1',
                ),
                'display' => 'seamless',
                'layout' => 'block',
                'prefix_label' => 0,
                'prefix_name' => 0,
            ),
            array(
                'key' => 'field_5e131bed3e3d0',
                'label' => 'Page Options',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'left',
                'endpoint' => 0,
            ),
            array(
                'key' => 'field_5e131c3e3e3d1',
                'label' => 'Page',
                'name' => 'page',
                'type' => 'clone',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'clone' => array(
                    0 => 'group_5c0794f9a7bdb',
                ),
                'display' => 'seamless',
                'layout' => 'block',
                'prefix_label' => 0,
                'prefix_name' => 0,
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'product',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));

    acf_add_local_field_group(array(
        'key' => 'group_5c3c5cd6ad3ca',
        'title' => 'Quote Post Attributes',
        'fields' => array(
            array(
                'key' => 'field_5c3c5d0345cb0',
                'label' => 'Quote',
                'name' => 'quote',
                'type' => 'textarea',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => '',
                'new_lines' => '',
            ),
            array(
                'key' => 'field_5c3c5d1d45cb1',
                'label' => 'Quote Author Name',
                'name' => 'quote_author_name',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_format',
                    'operator' => '==',
                    'value' => 'quote',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'side',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));

    acf_add_local_field_group(array(
        'key' => 'group_5e11ca3b3a635',
        'title' => 'Recent Post Widget',
        'fields' => array(
            array(
                'key' => 'field_5e11ca450bb91',
                'label' => 'Title Length',
                'name' => 'title_length',
                'type' => 'number',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => 24,
                'placeholder' => '',
                'prepend' => '',
                'append' => 'character',
                'min' => '',
                'max' => '',
                'step' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'widget',
                    'operator' => '==',
                    'value' => 'recent-posts',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'left',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));

    acf_add_local_field_group(array(
        'key' => 'group_5c0f68abe13be',
        'title' => 'Saasland Job Options',
        'fields' => array(
            array(
                'key' => 'field_5c0f69c31a4ac',
                'label' => 'Attributes',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'left',
                'endpoint' => 0,
            ),
            array(
                'key' => 'field_5c0f7ac1164c1',
                'label' => 'Attribute Section Title',
                'name' => 'attribute_section_title',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => 'Job Details',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_5c0f7ae0164c2',
                'label' => 'Attribute Section Icon',
                'name' => 'attribute_section_icon',
                'type' => 'fonticonpicker',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
            ),
            array(
                'key' => 'field_5c0f690d1a4a9',
                'label' => 'Job Attributes',
                'name' => 'job_attributes',
                'type' => 'repeater',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'collapsed' => '',
                'min' => 0,
                'max' => 0,
                'layout' => 'table',
                'button_label' => '',
                'sub_fields' => array(
                    array(
                        'key' => 'field_5c0f69711a4aa',
                        'label' => 'Attribute Title',
                        'name' => 'attribute_title',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                    array(
                        'key' => 'field_5c0f69871a4ab',
                        'label' => 'Attribute Value',
                        'name' => 'attribute_value',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                    array(
                        'key' => 'field_5c0f7af5164c3',
                        'label' => 'Attribute Icon',
                        'name' => 'attribute_icon',
                        'type' => 'text',
                        'instructions' => 'Input here the icon class. You can use here the Themify icons https://bit.ly/2VXBZhR',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                    array(
                        'key' => 'field_5e660e1210230',
                        'label' => 'Icon Color',
                        'name' => 'icon_color',
                        'type' => 'color_picker',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                    ),
                ),
            ),
            array(
                'key' => 'field_5c0f6a09a58ed',
                'label' => 'Banner',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'left',
                'endpoint' => 0,
            ),
            array(
                'key' => 'field_5c0f6a1ca58ee',
                'label' => 'Banner Settings',
                'name' => 'banner_settings',
                'type' => 'clone',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'clone' => array(
                    0 => 'group_5bcf1a7163114',
                ),
                'display' => 'seamless',
                'layout' => 'block',
                'prefix_label' => 0,
                'prefix_name' => 0,
            ),
            array(
                'key' => 'field_5c0f76878952e',
                'label' => 'Page',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'left',
                'endpoint' => 0,
            ),
            array(
                'key' => 'field_5c0f76988952f',
                'label' => 'Page Settings',
                'name' => 'page_settings',
                'type' => 'clone',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'clone' => array(
                    0 => 'group_5c0794f9a7bdb',
                ),
                'display' => 'seamless',
                'layout' => 'block',
                'prefix_label' => 0,
                'prefix_name' => 0,
            ),
            array(
                'key' => 'field_5c0f7709e9538',
                'label' => 'Header',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'top',
                'endpoint' => 0,
            ),
            array(
                'key' => 'field_5c0f76eee9537',
                'label' => 'Header Settings',
                'name' => 'header_settings',
                'type' => 'clone',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'clone' => array(
                    0 => 'group_5bffabdef01e1',
                ),
                'display' => 'seamless',
                'layout' => 'block',
                'prefix_label' => 0,
                'prefix_name' => 0,
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'job',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));

    acf_add_local_field_group(array(
        'key' => 'group_5c0e3b5fc81c8',
        'title' => 'Saasland Page Options',
        'fields' => array(
            array(
                'key' => 'field_5c0e3b820c487',
                'label' => 'Banner Settings',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'left',
                'endpoint' => 0,
            ),
            array(
                'key' => 'field_5c0e3bb80c488',
                'label' => 'Banner',
                'name' => 'banner_settings',
                'type' => 'clone',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'clone' => array(
                    0 => 'group_5bcf1a7163114',
                ),
                'display' => 'seamless',
                'layout' => 'block',
                'prefix_label' => 0,
                'prefix_name' => 0,
            ),
            array(
                'key' => 'field_5c0e3c1487351',
                'label' => 'Header Settings',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'left',
                'endpoint' => 0,
            ),
            array(
                'key' => 'field_5c0e3c4487352',
                'label' => 'Header',
                'name' => 'header_settings',
                'type' => 'clone',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'clone' => array(
                    0 => 'group_5bffabdef01e1',
                ),
                'display' => 'seamless',
                'layout' => 'block',
                'prefix_label' => 0,
                'prefix_name' => 0,
            ),
            array(
                'key' => 'field_5c485bed8e4cf',
                'label' => 'Footer Settings',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'top',
                'endpoint' => 0,
            ),
            array(
                'key' => 'field_5c485c048e4d0',
                'label' => 'Footer',
                'name' => 'footer',
                'type' => 'clone',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'clone' => array(
                    0 => 'group_5c3482e937413',
                ),
                'display' => 'seamless',
                'layout' => 'block',
                'prefix_label' => 0,
                'prefix_name' => 0,
            ),
            array(
                'key' => 'field_5c0e3c7893616',
                'label' => 'Page Settings',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'left',
                'endpoint' => 0,
            ),
            array(
                'key' => 'field_5c0e3c8593617',
                'label' => 'Page',
                'name' => 'page_settings',
                'type' => 'clone',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'clone' => array(
                    0 => 'group_5c0794f9a7bdb',
                ),
                'display' => 'seamless',
                'layout' => 'block',
                'prefix_label' => 0,
                'prefix_name' => 0,
            ),
            array(
                'key' => 'field_5c4d482a6158e',
                'label' => 'Action Button Settings',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'top',
                'endpoint' => 0,
            ),
            array(
                'key' => 'field_5c4d48056158d',
                'label' => 'Action Button',
                'name' => 'action_button',
                'type' => 'clone',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'clone' => array(
                    0 => 'group_5c49c213680d0',
                ),
                'display' => 'seamless',
                'layout' => 'block',
                'prefix_label' => 0,
                'prefix_name' => 0,
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'page',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));

    acf_add_local_field_group(array(
        'key' => 'group_5c21de2600603',
        'title' => 'Saasland Post Options',
        'fields' => array(
            array(
                'key' => 'field_5c21deea18dec',
                'label' => 'Banner',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'left',
                'endpoint' => 0,
            ),
            array(
                'key' => 'field_5eba832ae1c8a',
                'label' => 'Banner',
                'name' => 'is_banner',
                'type' => 'true_false',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'message' => '',
                'default_value' => 0,
                'ui' => 1,
                'ui_on_text' => 'Show',
                'ui_off_text' => 'Hide',
            ),
            array(
                'key' => 'field_5eba8353e1c8b',
                'label' => 'Text Color',
                'name' => 'post_banner_text_color',
                'type' => 'color_picker',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_5eba832ae1c8a',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                ),
                'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
            ),
            array(
                'key' => 'field_5eba839ae1c8e',
                'label' => 'Background Image',
                'name' => 'banner_background_image',
                'type' => 'image',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_5eba832ae1c8a',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                ),
                'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'url',
                'preview_size' => 'thumbnail',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
            ),
            array(
                'key' => 'field_5eba8372e1c8c',
                'label' => 'Background Color Left',
                'name' => 'background_color_left',
                'type' => 'color_picker',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_5eba832ae1c8a',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                ),
                'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
            ),
            array(
                'key' => 'field_5eba837fe1c8d',
                'label' => 'Background Color Right',
                'name' => 'background_color_right',
                'type' => 'color_picker',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_5eba832ae1c8a',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                ),
                'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
            ),
            array(
                'key' => 'field_5eba84a588c0d',
                'label' => 'Background Color Opacity',
                'name' => 'banner_color_opacity',
                'type' => 'range',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_5eba832ae1c8a',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                ),
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'min' => '',
                'max' => 99,
                'step' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_5c21df5518dee',
                'label' => 'Header',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'left',
                'endpoint' => 0,
            ),
            array(
                'key' => 'field_5c21df6418def',
                'label' => 'Header Settings',
                'name' => 'header_settings',
                'type' => 'clone',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'clone' => array(
                    0 => 'group_5bffabdef01e1',
                ),
                'display' => 'seamless',
                'layout' => 'block',
                'prefix_label' => 0,
                'prefix_name' => 0,
            ),
            array(
                'key' => 'field_5c21df8218df0',
                'label' => 'Page',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'left',
                'endpoint' => 0,
            ),
            array(
                'key' => 'field_5c21df8c18df1',
                'label' => 'Page Settings',
                'name' => 'page_settings',
                'type' => 'clone',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'clone' => array(
                    0 => 'group_5c0794f9a7bdb',
                ),
                'display' => 'seamless',
                'layout' => 'block',
                'prefix_label' => 0,
                'prefix_name' => 0,
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'post',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));

    acf_add_local_field_group(array(
        'key' => 'group_5e8ec7ecea711',
        'title' => 'Service Options',
        'fields' => array(
            array(
                'key' => 'field_5e8eca7f5f41a',
                'label' => 'Featured Icon',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'left',
                'endpoint' => 0,
            ),
            array(
                'key' => 'field_5e8ec800e0ebc',
                'label' => 'Icon Options',
                'name' => 'icon_options',
                'type' => 'clone',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'clone' => array(
                    0 => 'group_5bf152f3207b5',
                ),
                'display' => 'seamless',
                'layout' => 'block',
                'prefix_label' => 0,
                'prefix_name' => 0,
            ),
            array(
                'key' => 'field_5e9448980b688',
                'label' => 'Service Attributes',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'left',
                'endpoint' => 0,
            ),
            array(
                'key' => 'field_5e9448bd0b689',
                'label' => 'Attribute Section Title',
                'name' => 'attribute_section_title',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_5e9448d20b68a',
                'label' => 'Attribute Section Icon',
                'name' => 'attribute_section_icon',
                'type' => 'text',
                'instructions' => 'Input here the icon class. You can use here the Themify icons https://bit.ly/2VXBZhR',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => 'ti-receipt',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_5e9449080b68b',
                'label' => 'Service Attributes',
                'name' => 'service_attributes',
                'type' => 'repeater',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'collapsed' => '',
                'min' => 0,
                'max' => 0,
                'layout' => 'table',
                'button_label' => '',
                'sub_fields' => array(
                    array(
                        'key' => 'field_5e9449260b68c',
                        'label' => 'Attribute Title',
                        'name' => 'attribute_title',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                    array(
                        'key' => 'field_5e94492f0b68d',
                        'label' => 'Attribute Value',
                        'name' => 'attribute_value',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                ),
            ),
            array(
                'key' => 'field_5e8ece688e811',
                'label' => 'Header Options',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'left',
                'endpoint' => 0,
            ),
            array(
                'key' => 'field_5e8ece818e812',
                'label' => 'Header Options',
                'name' => 'header_options',
                'type' => 'clone',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'clone' => array(
                    0 => 'group_5bffabdef01e1',
                ),
                'display' => 'seamless',
                'layout' => 'block',
                'prefix_label' => 0,
                'prefix_name' => 0,
            ),
            array(
                'key' => 'field_5e8eca8d5f41b',
                'label' => 'Banner Options',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'left',
                'endpoint' => 0,
            ),
            array(
                'key' => 'field_5e8ec8afe0ebe',
                'label' => 'Banner Options',
                'name' => 'banner',
                'type' => 'clone',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'clone' => array(
                    0 => 'group_5bcf1a7163114',
                ),
                'display' => 'seamless',
                'layout' => 'block',
                'prefix_label' => 0,
                'prefix_name' => 0,
            ),
            array(
                'key' => 'field_5e8ecaa55f41c',
                'label' => 'Page Settings',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'left',
                'endpoint' => 0,
            ),
            array(
                'key' => 'field_5e8ec899e0ebd',
                'label' => 'Page Settings',
                'name' => 'page_settings',
                'type' => 'clone',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'clone' => array(
                    0 => 'group_5c0794f9a7bdb',
                ),
                'display' => 'seamless',
                'layout' => 'block',
                'prefix_label' => 0,
                'prefix_name' => 0,
            ),
            array(
                'key' => 'field_5e8ecea762b08',
                'label' => 'Action Button',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'left',
                'endpoint' => 0,
            ),
            array(
                'key' => 'field_5e8ecec862b09',
                'label' => 'Action Button',
                'name' => 'action_button',
                'type' => 'clone',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'clone' => array(
                    0 => 'group_5c49c213680d0',
                ),
                'display' => 'seamless',
                'layout' => 'block',
                'prefix_label' => 0,
                'prefix_name' => 0,
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'service',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));

    acf_add_local_field_group(array(
        'key' => 'group_5ee2104035f3d',
        'title' => 'Split Page Content',
        'fields' => array(
            array(
                'key' => 'field_5d6caeea2050e',
                'label' => 'Left Sliding Panel',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'left',
                'endpoint' => 0,
            ),
            array(
                'key' => 'field_5d6d06b7dca41',
                'label' => 'Left Slide Contents',
                'name' => 'left_slide_contents',
                'type' => 'flexible_content',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'layouts' => array(
                    'layout_5d6cda8f08b9f' => array(
                        'key' => 'layout_5d6cda8f08b9f',
                        'name' => 'call_to_action',
                        'label' => 'Call to Action',
                        'display' => 'block',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_5d6d06b7dca42',
                                'label' => 'Title',
                                'name' => 'title',
                                'type' => 'textarea',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '50',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                                'maxlength' => '',
                                'rows' => 5,
                                'new_lines' => '',
                            ),
                            array(
                                'key' => 'field_5d6d06b7dca43',
                                'label' => 'Subtitle',
                                'name' => 'subtitle',
                                'type' => 'textarea',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '50',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                                'maxlength' => '',
                                'rows' => 5,
                                'new_lines' => '',
                            ),
                            array(
                                'key' => 'field_5d6d06b7dca44',
                                'label' => 'Action Button',
                                'name' => 'button',
                                'type' => 'link',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'return_format' => 'array',
                            ),
                            array(
                                'key' => 'field_5edf913679cab',
                                'label' => 'Colors',
                                'name' => 'colors',
                                'type' => 'group',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'layout' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'field_5eeb3f9fe7f09',
                                        'label' => 'Title Color',
                                        'name' => 'title_color',
                                        'type' => 'color_picker',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '50',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                    ),
                                    array(
                                        'key' => 'field_5eeb3fb4e7f0a',
                                        'label' => 'Subtitle Color',
                                        'name' => 'subtitle_color',
                                        'type' => 'color_picker',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '50',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                    ),
                                    array(
                                        'key' => 'field_5edf978179cb1',
                                        'label' => 'Button Color',
                                        'name' => 'button_color',
                                        'type' => 'color_picker',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '50',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                    ),
                                    array(
                                        'key' => 'field_5ee0bfcafb566',
                                        'label' => 'Button Hover Text',
                                        'name' => 'button_hover_text',
                                        'type' => 'color_picker',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '50',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                    ),
                                    array(
                                        'key' => 'field_5edf96ad79cae',
                                        'label' => 'Box Border Color',
                                        'name' => 'box_border_color',
                                        'type' => 'color_picker',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '50',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                    ),
                                    array(
                                        'key' => 'field_5ee0c00afb567',
                                        'label' => 'Floating Square Box',
                                        'name' => 'floating_square_box',
                                        'type' => 'extended-color-picker',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '50',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                        'color_palette' => '',
                                        'hide_palette' => 0,
                                    ),
                                    array(
                                        'key' => 'field_5edf937c79cac',
                                        'label' => 'Background Color 01',
                                        'name' => 'bg1',
                                        'type' => 'color_picker',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '50',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                    ),
                                    array(
                                        'key' => 'field_5edf963a79cad',
                                        'label' => 'Background Color 02',
                                        'name' => 'bg2',
                                        'type' => 'color_picker',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '50',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                    ),
                                ),
                            ),
                        ),
                        'min' => '',
                        'max' => '',
                    ),
                    'layout_5d6cdff02051f' => array(
                        'key' => 'layout_5d6cdff02051f',
                        'name' => 'hotspot',
                        'label' => 'Hotspot',
                        'display' => 'block',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_5d6d06b7dca4c',
                                'label' => 'Featured Image',
                                'name' => 'featured_image',
                                'type' => 'image',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'return_format' => 'array',
                                'preview_size' => 'medium',
                                'library' => 'all',
                                'min_width' => '',
                                'min_height' => '',
                                'min_size' => '',
                                'max_width' => '',
                                'max_height' => '',
                                'max_size' => '',
                                'mime_types' => '',
                            ),
                            array(
                                'key' => 'field_5d6d06b7dca4d',
                                'label' => 'Hotspots',
                                'name' => 'hotspots',
                                'type' => 'repeater',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'collapsed' => '',
                                'min' => 0,
                                'max' => 0,
                                'layout' => 'table',
                                'button_label' => '',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'field_5d6d06b7dca4e',
                                        'label' => 'Pointer Image',
                                        'name' => 'pointer_image',
                                        'type' => 'image',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'return_format' => 'array',
                                        'preview_size' => 'medium',
                                        'library' => 'all',
                                        'min_width' => '',
                                        'min_height' => '',
                                        'min_size' => '',
                                        'max_width' => '',
                                        'max_height' => '',
                                        'max_size' => '',
                                        'mime_types' => '',
                                    ),
                                    array(
                                        'key' => 'field_5d6d06b7dca4f',
                                        'label' => 'Position Horizontal',
                                        'name' => 'position_horizontal',
                                        'type' => 'range',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                        'min' => '',
                                        'max' => '',
                                        'step' => '',
                                        'prepend' => '',
                                        'append' => '',
                                    ),
                                    array(
                                        'key' => 'field_5d6d06b7dca50',
                                        'label' => 'Position Vertical',
                                        'name' => 'position_vertical',
                                        'type' => 'range',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                        'min' => '',
                                        'max' => '',
                                        'step' => '',
                                        'prepend' => '',
                                        'append' => '',
                                    ),
                                ),
                            ),
                            array(
                                'key' => 'field_5ee1f9eee90a3',
                                'label' => 'Colors',
                                'name' => 'colors',
                                'type' => 'group',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'layout' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'field_5ee20ab6f9ccb',
                                        'label' => 'Floating Square Box Color',
                                        'name' => 'floating_square_box',
                                        'type' => 'color_picker',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                    ),
                                    array(
                                        'key' => 'field_5ee1fd63e90a4',
                                        'label' => 'Background Color 01',
                                        'name' => 'bg1',
                                        'type' => 'color_picker',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '50',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                    ),
                                    array(
                                        'key' => 'field_5ee1fd82e90a5',
                                        'label' => 'Background Color 02',
                                        'name' => 'bg2',
                                        'type' => 'color_picker',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '50',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                    ),
                                ),
                            ),
                        ),
                        'min' => '',
                        'max' => '',
                    ),
                    'layout_5d6cee1c278cb' => array(
                        'key' => 'layout_5d6cee1c278cb',
                        'name' => 'skill_progress_bars',
                        'label' => 'Skill Progress Bars',
                        'display' => 'block',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_5d6d06b7dca52',
                                'label' => 'Title',
                                'name' => 'title',
                                'type' => 'text',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '50',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                                'prepend' => '',
                                'append' => '',
                                'maxlength' => '',
                            ),
                            array(
                                'key' => 'field_5d6d06b7dca53',
                                'label' => 'Progress Bars',
                                'name' => 'progress_bars',
                                'type' => 'repeater',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'collapsed' => '',
                                'min' => 0,
                                'max' => 0,
                                'layout' => 'table',
                                'button_label' => 'Add Skill',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'field_5d6e53752da3c',
                                        'label' => 'Title',
                                        'name' => 'title',
                                        'type' => 'text',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                        'placeholder' => '',
                                        'prepend' => '',
                                        'append' => '',
                                        'maxlength' => '',
                                    ),
                                    array(
                                        'key' => 'field_5d6e53242da3b',
                                        'label' => 'Progress Percentage',
                                        'name' => 'progress_percentage',
                                        'type' => 'range',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                        'min' => '',
                                        'max' => '',
                                        'step' => '',
                                        'prepend' => '',
                                        'append' => '',
                                    ),
                                    array(
                                        'key' => 'field_5d6e537b2da3d',
                                        'label' => 'Color',
                                        'name' => 'color',
                                        'type' => 'color_picker',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                    ),
                                ),
                            ),
                            array(
                                'key' => 'field_5d6e5902663c9',
                                'label' => 'Button',
                                'name' => 'button',
                                'type' => 'link',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'return_format' => 'array',
                            ),
                            array(
                                'key' => 'field_5ee20ae0f9ccc',
                                'label' => 'Colors',
                                'name' => 'colors',
                                'type' => 'group',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'layout' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'field_5ee21222e837c',
                                        'label' => 'Text Color',
                                        'name' => 'text_color',
                                        'type' => 'color_picker',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '50',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                    ),
                                    array(
                                        'key' => 'field_5ee212bee837d',
                                        'label' => 'Progress bar Background Color',
                                        'name' => 'bar_bg_color',
                                        'type' => 'color_picker',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '50',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                    ),
                                    array(
                                        'key' => 'field_5ee20b9090ea7',
                                        'label' => 'Button Color',
                                        'name' => 'button_color',
                                        'type' => 'color_picker',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '50',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                    ),
                                    array(
                                        'key' => 'field_5ee20ba290ea8',
                                        'label' => 'Button Hover Text',
                                        'name' => 'button_hover_text',
                                        'type' => 'color_picker',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '50',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                    ),
                                    array(
                                        'key' => 'field_5ee20bc290ea9',
                                        'label' => 'Background Color 01',
                                        'name' => 'bg1',
                                        'type' => 'color_picker',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '50',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                    ),
                                    array(
                                        'key' => 'field_5ee20b37f9ccf',
                                        'label' => 'Background Color 02',
                                        'name' => 'bg2',
                                        'type' => 'color_picker',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '50',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                    ),
                                ),
                            ),
                        ),
                        'min' => '',
                        'max' => '',
                    ),
                    'layout_5d6cef3e278da' => array(
                        'key' => 'layout_5d6cef3e278da',
                        'name' => 'featured_image',
                        'label' => 'Featured Image',
                        'display' => 'block',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_5d6d06b8dca5c',
                                'label' => 'Featured Image',
                                'name' => 'featured_image',
                                'type' => 'image',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'return_format' => 'array',
                                'preview_size' => 'medium',
                                'library' => 'all',
                                'min_width' => '',
                                'min_height' => '',
                                'min_size' => '',
                                'max_width' => '',
                                'max_height' => '',
                                'max_size' => '',
                                'mime_types' => '',
                            ),
                            array(
                                'key' => 'field_5d6d06b8dca5d',
                                'label' => 'Styling',
                                'name' => 'styling',
                                'type' => 'clone',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'clone' => array(
                                    0 => 'field_5d6ce3b59d5a4',
                                ),
                                'display' => 'seamless',
                                'layout' => 'block',
                                'prefix_label' => 0,
                                'prefix_name' => 0,
                            ),
                            array(
                                'key' => 'field_5ee20c2d90eae',
                                'label' => 'Colors',
                                'name' => 'colors',
                                'type' => 'group',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'layout' => '',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'field_5ee20c2d90eaf',
                                        'label' => 'Floating Square Box Color',
                                        'name' => 'floating_square_box',
                                        'type' => 'color_picker',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                    ),
                                    array(
                                        'key' => 'field_5ee20c2d90eb0',
                                        'label' => 'Background Color 01',
                                        'name' => 'bg1',
                                        'type' => 'color_picker',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '50',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                    ),
                                    array(
                                        'key' => 'field_5ee20c2d90eb1',
                                        'label' => 'Background Color 02',
                                        'name' => 'bg2',
                                        'type' => 'color_picker',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '50',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                    ),
                                ),
                            ),
                        ),
                        'min' => '',
                        'max' => '',
                    ),
                    'layout_5d6cf82d278e1' => array(
                        'key' => 'layout_5d6cf82d278e1',
                        'name' => 'shortcode',
                        'label' => 'Shortcode',
                        'display' => 'block',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_5d6d06b8dca5e',
                                'label' => 'Title',
                                'name' => 'title',
                                'type' => 'textarea',
                                'instructions' => 'You can display the the bold text with wrapping up with span tag',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '50',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                                'maxlength' => '',
                                'rows' => '',
                                'new_lines' => '',
                            ),
                            array(
                                'key' => 'field_5d6d06b8dca5f',
                                'label' => 'Shortcode',
                                'name' => 'shortcode',
                                'type' => 'textarea',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '50',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                                'maxlength' => '',
                                'rows' => '',
                                'new_lines' => '',
                            ),
                            array(
                                'key' => 'field_5ee20c4f90eb2',
                                'label' => 'Colors',
                                'name' => 'colors',
                                'type' => 'group',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'layout' => '',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'field_5ee20c5090eb4',
                                        'label' => 'Background Color 01',
                                        'name' => 'bg1',
                                        'type' => 'color_picker',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '50',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                    ),
                                    array(
                                        'key' => 'field_5ee20c5090eb5',
                                        'label' => 'Background Color 02',
                                        'name' => 'bg2',
                                        'type' => 'color_picker',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '50',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                    ),
                                ),
                            ),
                        ),
                        'min' => '',
                        'max' => '',
                    ),
                    'layout_5d6cf988278f3' => array(
                        'key' => 'layout_5d6cf988278f3',
                        'name' => 'title_with_buttons',
                        'label' => 'Title with Buttons',
                        'display' => 'block',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_5d6d06b8dca65',
                                'label' => 'Title',
                                'name' => 'title',
                                'type' => 'textarea',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '50',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                                'maxlength' => '',
                                'rows' => 5,
                                'new_lines' => '',
                            ),
                            array(
                                'key' => 'field_5d6d06b8dca66',
                                'label' => 'Subtitle',
                                'name' => 'subtitle',
                                'type' => 'textarea',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '50',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                                'maxlength' => '',
                                'rows' => 5,
                                'new_lines' => '',
                            ),
                            array(
                                'key' => 'field_5d6d06b8dca67',
                                'label' => 'Buttons',
                                'name' => 'buttons',
                                'type' => 'repeater',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'collapsed' => '',
                                'min' => 0,
                                'max' => 0,
                                'layout' => 'table',
                                'button_label' => 'Add Button',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'field_5d6d06b8dca6a',
                                        'label' => 'Button',
                                        'name' => 'button',
                                        'type' => 'link',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'return_format' => 'array',
                                    ),
                                    array(
                                        'key' => 'field_5d6d06b8dca69',
                                        'label' => 'Icon',
                                        'name' => 'icon',
                                        'type' => 'text',
                                        'instructions' => 'Get the icon class here https://fontawesome.com/icons/',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => 'fab fa-google-play',
                                        'placeholder' => '',
                                        'prepend' => '',
                                        'append' => '',
                                        'maxlength' => '',
                                    ),
                                    array(
                                        'key' => 'field_5d6f644a69c72',
                                        'label' => 'Button Color',
                                        'name' => 'button_color',
                                        'type' => 'color_picker',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                    ),
                                    array(
                                        'key' => 'field_5d6f66f1985b6',
                                        'label' => 'Button Type',
                                        'name' => 'button_type',
                                        'type' => 'select',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'choices' => array(
                                            'default' => 'Default',
                                            'fill' => 'Fill',
                                            'outline' => 'Outline',
                                        ),
                                        'default_value' => array(
                                        ),
                                        'allow_null' => 0,
                                        'multiple' => 0,
                                        'ui' => 0,
                                        'return_format' => 'value',
                                        'ajax' => 0,
                                        'placeholder' => '',
                                    ),
                                ),
                            ),
                            array(
                                'key' => 'field_5ee20c7290eb6',
                                'label' => 'Colors',
                                'name' => 'colors',
                                'type' => 'group',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'layout' => '',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'field_5ee20c7290eb9',
                                        'label' => 'Background Color 01',
                                        'name' => 'bg1',
                                        'type' => 'color_picker',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '50',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                    ),
                                    array(
                                        'key' => 'field_5ee20c7290eba',
                                        'label' => 'Background Color 02',
                                        'name' => 'bg2',
                                        'type' => 'color_picker',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '50',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                    ),
                                ),
                            ),
                        ),
                        'min' => '',
                        'max' => '',
                    ),
                    'layout_5d6d00e8d1a30' => array(
                        'key' => 'layout_5d6d00e8d1a30',
                        'name' => 'dual_images',
                        'label' => 'Dual Images',
                        'display' => 'block',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_5d6d06b8dca70',
                                'label' => 'Image 01',
                                'name' => 'image_01',
                                'type' => 'image',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '50',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'return_format' => 'id',
                                'preview_size' => 'medium',
                                'library' => 'all',
                                'min_width' => '',
                                'min_height' => '',
                                'min_size' => '',
                                'max_width' => '',
                                'max_height' => '',
                                'max_size' => '',
                                'mime_types' => '',
                            ),
                            array(
                                'key' => 'field_5ee20cfc90ebb',
                                'label' => 'Image 02',
                                'name' => 'image_02',
                                'type' => 'image',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '50',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'return_format' => '',
                                'preview_size' => 'medium',
                                'library' => '',
                                'min_width' => '',
                                'min_height' => '',
                                'min_size' => '',
                                'max_width' => '',
                                'max_height' => '',
                                'max_size' => '',
                                'mime_types' => '',
                            ),
                            array(
                                'key' => 'field_5ee20d2390ebc',
                                'label' => 'Colors',
                                'name' => 'colors',
                                'type' => 'group',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'layout' => '',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'field_5ee20d2390ebd',
                                        'label' => 'Background Box Shape Color',
                                        'name' => 'bg_box_shape_color',
                                        'type' => 'color_picker',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                    ),
                                    array(
                                        'key' => 'field_5ee20d2390ebe',
                                        'label' => 'Background Color 01',
                                        'name' => 'bg1',
                                        'type' => 'color_picker',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '50',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                    ),
                                    array(
                                        'key' => 'field_5ee20d2390ebf',
                                        'label' => 'Background Color 02',
                                        'name' => 'bg2',
                                        'type' => 'color_picker',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '50',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                    ),
                                ),
                            ),
                        ),
                        'min' => '',
                        'max' => '',
                    ),
                    'layout_5d6f521d236d9' => array(
                        'key' => 'layout_5d6f521d236d9',
                        'name' => 'full_image',
                        'label' => 'Full Image',
                        'display' => 'block',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_5d6f5220236da',
                                'label' => 'Image',
                                'name' => 'image',
                                'type' => 'image',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'return_format' => 'array',
                                'preview_size' => 'medium',
                                'library' => 'all',
                                'min_width' => '',
                                'min_height' => '',
                                'min_size' => '',
                                'max_width' => '',
                                'max_height' => '',
                                'max_size' => '',
                                'mime_types' => '',
                            ),
                        ),
                        'min' => '',
                        'max' => '',
                    ),
                ),
                'button_label' => 'Add Slide Item',
                'min' => '',
                'max' => '',
            ),
            array(
                'key' => 'field_5d6cb0582050f',
                'label' => 'Right Sliding Panel',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'left',
                'endpoint' => 0,
            ),
            array(
                'key' => 'field_5ee210197c41c',
                'label' => 'Right Slide Contents',
                'name' => 'right_slide_contents',
                'type' => 'flexible_content',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'layouts' => array(
                    'layout_5d6cda8f08b9f' => array(
                        'key' => 'layout_5d6cda8f08b9f',
                        'name' => 'call_to_action',
                        'label' => 'Call to Action',
                        'display' => 'block',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_5ee210197c41d',
                                'label' => 'Title',
                                'name' => 'title',
                                'type' => 'textarea',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '50',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                                'maxlength' => '',
                                'rows' => 5,
                                'new_lines' => '',
                            ),
                            array(
                                'key' => 'field_5ee210197c41e',
                                'label' => 'Subtitle',
                                'name' => 'subtitle',
                                'type' => 'textarea',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '50',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                                'maxlength' => '',
                                'rows' => 5,
                                'new_lines' => '',
                            ),
                            array(
                                'key' => 'field_5ee210197c41f',
                                'label' => 'Action Button',
                                'name' => 'button',
                                'type' => 'link',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'return_format' => 'array',
                            ),
                            array(
                                'key' => 'field_5ee210197c422',
                                'label' => 'Colors',
                                'name' => 'colors',
                                'type' => 'group',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'layout' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'field_5eeb408a170d7',
                                        'label' => 'Title Color',
                                        'name' => 'title_color',
                                        'type' => 'color_picker',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '50',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                    ),
                                    array(
                                        'key' => 'field_5eeb409b170d8',
                                        'label' => 'Subtitle Color',
                                        'name' => 'subtitle_color',
                                        'type' => 'color_picker',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '50',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                    ),
                                    array(
                                        'key' => 'field_5ee210197c423',
                                        'label' => 'Button Color',
                                        'name' => 'button_color',
                                        'type' => 'color_picker',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '50',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                    ),
                                    array(
                                        'key' => 'field_5ee210197c424',
                                        'label' => 'Button Hover Text',
                                        'name' => 'button_hover_text',
                                        'type' => 'color_picker',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '50',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                    ),
                                    array(
                                        'key' => 'field_5ee210197c425',
                                        'label' => 'Box Border Color',
                                        'name' => 'box_border_color',
                                        'type' => 'color_picker',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '50',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                    ),
                                    array(
                                        'key' => 'field_5ee210197c426',
                                        'label' => 'Floating Square Box',
                                        'name' => 'floating_square_box',
                                        'type' => 'extended-color-picker',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '50',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                        'color_palette' => '',
                                        'hide_palette' => 0,
                                    ),
                                    array(
                                        'key' => 'field_5ee210197c427',
                                        'label' => 'Background Color 01',
                                        'name' => 'bg1',
                                        'type' => 'color_picker',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '50',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                    ),
                                    array(
                                        'key' => 'field_5ee210197c428',
                                        'label' => 'Background Color 02',
                                        'name' => 'bg2',
                                        'type' => 'color_picker',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '50',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                    ),
                                ),
                            ),
                        ),
                        'min' => '',
                        'max' => '',
                    ),
                    'layout_5ee220ea5a66e' => array(
                        'key' => 'layout_5ee220ea5a66e',
                        'name' => 'dual_images',
                        'label' => 'Dual Images',
                        'display' => 'block',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_5ee220fd5a66f',
                                'label' => 'Image 01',
                                'name' => 'image_01',
                                'type' => 'image',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'return_format' => 'id',
                                'preview_size' => 'thumbnail',
                                'library' => 'all',
                                'min_width' => '',
                                'min_height' => '',
                                'min_size' => '',
                                'max_width' => '',
                                'max_height' => '',
                                'max_size' => '',
                                'mime_types' => '',
                            ),
                            array(
                                'key' => 'field_5ee2211b5a670',
                                'label' => 'Image 02',
                                'name' => 'image_02',
                                'type' => 'image',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'return_format' => 'id',
                                'preview_size' => 'thumbnail',
                                'library' => 'all',
                                'min_width' => '',
                                'min_height' => '',
                                'min_size' => '',
                                'max_width' => '',
                                'max_height' => '',
                                'max_size' => '',
                                'mime_types' => '',
                            ),
                            array(
                                'key' => 'field_5ee220a45a66a',
                                'label' => 'Colors',
                                'name' => 'colors',
                                'type' => 'group',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'layout' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'field_5ee220a45a66b',
                                        'label' => 'Background Box Shape Color',
                                        'name' => 'bg_box_shape_color',
                                        'type' => 'color_picker',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                    ),
                                    array(
                                        'key' => 'field_5ee220a45a66c',
                                        'label' => 'Background Color 01',
                                        'name' => 'bg1',
                                        'type' => 'color_picker',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '50',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                    ),
                                    array(
                                        'key' => 'field_5ee220a45a66d',
                                        'label' => 'Background Color 02',
                                        'name' => 'bg2',
                                        'type' => 'color_picker',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '50',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                    ),
                                ),
                            ),
                        ),
                        'min' => '',
                        'max' => '',
                    ),
                    'layout_5d6cdff02051f' => array(
                        'key' => 'layout_5d6cdff02051f',
                        'name' => 'hotspot',
                        'label' => 'Hotspot',
                        'display' => 'block',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_5ee210197c429',
                                'label' => 'Featured Image',
                                'name' => 'featured_image',
                                'type' => 'image',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'return_format' => 'array',
                                'preview_size' => 'medium',
                                'library' => 'all',
                                'min_width' => '',
                                'min_height' => '',
                                'min_size' => '',
                                'max_width' => '',
                                'max_height' => '',
                                'max_size' => '',
                                'mime_types' => '',
                            ),
                            array(
                                'key' => 'field_5ee210197c42a',
                                'label' => 'Hotspots',
                                'name' => 'hotspots',
                                'type' => 'repeater',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'collapsed' => '',
                                'min' => 0,
                                'max' => 0,
                                'layout' => 'table',
                                'button_label' => '',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'field_5ee210197c42b',
                                        'label' => 'Pointer Image',
                                        'name' => 'pointer_image',
                                        'type' => 'image',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'return_format' => 'array',
                                        'preview_size' => 'medium',
                                        'library' => 'all',
                                        'min_width' => '',
                                        'min_height' => '',
                                        'min_size' => '',
                                        'max_width' => '',
                                        'max_height' => '',
                                        'max_size' => '',
                                        'mime_types' => '',
                                    ),
                                    array(
                                        'key' => 'field_5ee210197c42c',
                                        'label' => 'Position Horizontal',
                                        'name' => 'position_horizontal',
                                        'type' => 'range',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                        'min' => '',
                                        'max' => '',
                                        'step' => '',
                                        'prepend' => '',
                                        'append' => '',
                                    ),
                                    array(
                                        'key' => 'field_5ee210197c42d',
                                        'label' => 'Position Vertical',
                                        'name' => 'position_vertical',
                                        'type' => 'range',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                        'min' => '',
                                        'max' => '',
                                        'step' => '',
                                        'prepend' => '',
                                        'append' => '',
                                    ),
                                ),
                            ),
                            array(
                                'key' => 'field_5ee210197c42e',
                                'label' => 'Colors',
                                'name' => 'colors',
                                'type' => 'group',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'layout' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'field_5ee210197c42f',
                                        'label' => 'Floating Square Box Color',
                                        'name' => 'floating_square_box',
                                        'type' => 'color_picker',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                    ),
                                    array(
                                        'key' => 'field_5ee210197c430',
                                        'label' => 'Background Color 01',
                                        'name' => 'bg1',
                                        'type' => 'color_picker',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '50',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                    ),
                                    array(
                                        'key' => 'field_5ee210197c431',
                                        'label' => 'Background Color 02',
                                        'name' => 'bg2',
                                        'type' => 'color_picker',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '50',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                    ),
                                ),
                            ),
                        ),
                        'min' => '',
                        'max' => '',
                    ),
                    'layout_5d6cee1c278cb' => array(
                        'key' => 'layout_5d6cee1c278cb',
                        'name' => 'skill_progress_bars',
                        'label' => 'Skill Progress Bars',
                        'display' => 'block',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_5ee210197c432',
                                'label' => 'Title',
                                'name' => 'title',
                                'type' => 'text',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '50',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                                'prepend' => '',
                                'append' => '',
                                'maxlength' => '',
                            ),
                            array(
                                'key' => 'field_5ee210197c433',
                                'label' => 'Progress Bars',
                                'name' => 'progress_bars',
                                'type' => 'repeater',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'collapsed' => '',
                                'min' => 0,
                                'max' => 0,
                                'layout' => 'table',
                                'button_label' => 'Add Skill',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'field_5ee210197c434',
                                        'label' => 'Title',
                                        'name' => 'title',
                                        'type' => 'text',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                        'placeholder' => '',
                                        'prepend' => '',
                                        'append' => '',
                                        'maxlength' => '',
                                    ),
                                    array(
                                        'key' => 'field_5ee210197c435',
                                        'label' => 'Progress Percentage',
                                        'name' => 'progress_percentage',
                                        'type' => 'range',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                        'min' => '',
                                        'max' => '',
                                        'step' => '',
                                        'prepend' => '',
                                        'append' => '',
                                    ),
                                    array(
                                        'key' => 'field_5ee210197c436',
                                        'label' => 'Color',
                                        'name' => 'color',
                                        'type' => 'color_picker',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                    ),
                                ),
                            ),
                            array(
                                'key' => 'field_5ee210197c437',
                                'label' => 'Button',
                                'name' => 'button',
                                'type' => 'link',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'return_format' => 'array',
                            ),
                            array(
                                'key' => 'field_5ee210197c438',
                                'label' => 'Colors',
                                'name' => 'colors',
                                'type' => 'group',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'layout' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'field_5ee220295a666',
                                        'label' => 'Text Color',
                                        'name' => 'text_color',
                                        'type' => 'color_picker',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '50',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                    ),
                                    array(
                                        'key' => 'field_5ee21ff15a665',
                                        'label' => 'Progress bar Background Color',
                                        'name' => 'bar_bg_color',
                                        'type' => 'color_picker',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '50',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                    ),
                                    array(
                                        'key' => 'field_5ee210197c439',
                                        'label' => 'Button Color',
                                        'name' => 'button_color',
                                        'type' => 'color_picker',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '50',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                    ),
                                    array(
                                        'key' => 'field_5ee210197c43a',
                                        'label' => 'Button Hover Text',
                                        'name' => 'button_hover_text',
                                        'type' => 'color_picker',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '50',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                    ),
                                    array(
                                        'key' => 'field_5ee210197c43b',
                                        'label' => 'Background Color 01',
                                        'name' => 'bg1',
                                        'type' => 'color_picker',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '50',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                    ),
                                    array(
                                        'key' => 'field_5ee210197c43c',
                                        'label' => 'Background Color 02',
                                        'name' => 'bg2',
                                        'type' => 'color_picker',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '50',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                    ),
                                ),
                            ),
                        ),
                        'min' => '',
                        'max' => '',
                    ),
                    'layout_5d6cef3e278da' => array(
                        'key' => 'layout_5d6cef3e278da',
                        'name' => 'featured_image',
                        'label' => 'Featured Image',
                        'display' => 'block',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_5ee210197c43d',
                                'label' => 'Featured Image',
                                'name' => 'featured_image',
                                'type' => 'image',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'return_format' => 'array',
                                'preview_size' => 'medium',
                                'library' => 'all',
                                'min_width' => '',
                                'min_height' => '',
                                'min_size' => '',
                                'max_width' => '',
                                'max_height' => '',
                                'max_size' => '',
                                'mime_types' => '',
                            ),
                            array(
                                'key' => 'field_5ee210197c43e',
                                'label' => 'Styling',
                                'name' => 'styling',
                                'type' => 'clone',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'clone' => array(
                                    0 => 'field_5d6ce3b59d5a4',
                                ),
                                'display' => 'seamless',
                                'layout' => 'block',
                                'prefix_label' => 0,
                                'prefix_name' => 0,
                            ),
                            array(
                                'key' => 'field_5ee210197c43f',
                                'label' => 'Colors',
                                'name' => 'colors',
                                'type' => 'group',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'layout' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'field_5ee2101a7c440',
                                        'label' => 'Floating Square Box Color',
                                        'name' => 'floating_square_box',
                                        'type' => 'color_picker',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                    ),
                                    array(
                                        'key' => 'field_5ee2101a7c441',
                                        'label' => 'Background Color 01',
                                        'name' => 'bg1',
                                        'type' => 'color_picker',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '50',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                    ),
                                    array(
                                        'key' => 'field_5ee2101a7c442',
                                        'label' => 'Background Color 02',
                                        'name' => 'bg2',
                                        'type' => 'color_picker',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '50',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                    ),
                                ),
                            ),
                        ),
                        'min' => '',
                        'max' => '',
                    ),
                    'layout_5d6cf82d278e1' => array(
                        'key' => 'layout_5d6cf82d278e1',
                        'name' => 'shortcode',
                        'label' => 'Shortcode',
                        'display' => 'block',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_5ee2101a7c443',
                                'label' => 'Title',
                                'name' => 'title',
                                'type' => 'textarea',
                                'instructions' => 'You can display the the bold text with wrapping up with span tag',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '50',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                                'maxlength' => '',
                                'rows' => '',
                                'new_lines' => '',
                            ),
                            array(
                                'key' => 'field_5ee2101a7c444',
                                'label' => 'Shortcode',
                                'name' => 'shortcode',
                                'type' => 'textarea',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '50',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                                'maxlength' => '',
                                'rows' => '',
                                'new_lines' => '',
                            ),
                            array(
                                'key' => 'field_5ee2101a7c445',
                                'label' => 'Colors',
                                'name' => 'colors',
                                'type' => 'group',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'layout' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'field_5ee2101a7c446',
                                        'label' => 'Background Color 01',
                                        'name' => 'bg1',
                                        'type' => 'color_picker',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '50',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                    ),
                                    array(
                                        'key' => 'field_5ee2101a7c447',
                                        'label' => 'Background Color 02',
                                        'name' => 'bg2',
                                        'type' => 'color_picker',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '50',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                    ),
                                ),
                            ),
                        ),
                        'min' => '',
                        'max' => '',
                    ),
                    'layout_5d6cf988278f3' => array(
                        'key' => 'layout_5d6cf988278f3',
                        'name' => 'title_with_buttons',
                        'label' => 'Title with Buttons',
                        'display' => 'block',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_5ee2101a7c448',
                                'label' => 'Title',
                                'name' => 'title',
                                'type' => 'textarea',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '50',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                                'maxlength' => '',
                                'rows' => 5,
                                'new_lines' => '',
                            ),
                            array(
                                'key' => 'field_5ee2101a7c449',
                                'label' => 'Subtitle',
                                'name' => 'subtitle',
                                'type' => 'textarea',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '50',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                                'maxlength' => '',
                                'rows' => 5,
                                'new_lines' => '',
                            ),
                            array(
                                'key' => 'field_5ee2101a7c44a',
                                'label' => 'Buttons',
                                'name' => 'buttons',
                                'type' => 'repeater',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => false,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'min' => 0,
                                'max' => 0,
                                'layout' => 'table',
                                'button_label' => '',
                                'collapsed' => '',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'field_5ee2101a7c44b',
                                        'label' => 'Button',
                                        'name' => 'button',
                                        'type' => 'link',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'return_format' => 'array',
                                    ),
                                    array(
                                        'key' => 'field_5ee2101a7c44c',
                                        'label' => 'Icon',
                                        'name' => 'icon',
                                        'type' => 'text',
                                        'instructions' => 'Get the icon class here https://fontawesome.com/icons/',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => 'fab fa-google-play',
                                        'placeholder' => '',
                                        'prepend' => '',
                                        'append' => '',
                                        'maxlength' => '',
                                    ),
                                    array(
                                        'key' => 'field_5ee2101a7c44d',
                                        'label' => 'Button Color',
                                        'name' => 'button_color',
                                        'type' => 'color_picker',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                    ),
                                    array(
                                        'key' => 'field_5ee2101a7c44e',
                                        'label' => 'Button Type',
                                        'name' => '',
                                        'type' => 'text',
                                        'instructions' => '',
                                        'required' => false,
                                        'conditional_logic' => false,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                        'maxlength' => '',
                                        'placeholder' => '',
                                        'prepend' => '',
                                        'append' => '',
                                    ),
                                ),
                            ),
                            array(
                                'key' => 'field_5ee21fc05a662',
                                'label' => 'Colors',
                                'name' => 'colors',
                                'type' => 'group',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'layout' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'field_5ee21fc05a663',
                                        'label' => 'Background Color 01',
                                        'name' => 'bg1',
                                        'type' => 'color_picker',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '50',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                    ),
                                    array(
                                        'key' => 'field_5ee21fc05a664',
                                        'label' => 'Background Color 02',
                                        'name' => 'bg2',
                                        'type' => 'color_picker',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '50',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                    ),
                                ),
                            ),
                        ),
                        'min' => '',
                        'max' => '',
                    ),
                    'layout_5eeb20c8e7f07' => array(
                        'key' => 'layout_5eeb20c8e7f07',
                        'name' => 'full_image',
                        'label' => 'Full Image',
                        'display' => 'block',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_5eeb20d0e7f08',
                                'label' => 'Image',
                                'name' => 'image',
                                'type' => 'image',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'return_format' => 'array',
                                'preview_size' => 'medium',
                                'library' => 'all',
                                'min_width' => '',
                                'min_height' => '',
                                'min_size' => '',
                                'max_width' => '',
                                'max_height' => '',
                                'max_size' => '',
                                'mime_types' => '',
                            ),
                        ),
                        'min' => '',
                        'max' => '',
                    ),
                ),
                'button_label' => 'Add	Slide Item',
                'min' => '',
                'max' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'page-split.php',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));

    acf_add_local_field_group(array(
        'key' => 'group_5c3c5bf095318',
        'title' => 'Video Post Attributes',
        'fields' => array(
            array(
                'key' => 'field_5c3c5cc0a76b0',
                'label' => 'Video URL',
                'name' => 'video_url',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_format',
                    'operator' => '==',
                    'value' => 'video',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'side',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));

endif;