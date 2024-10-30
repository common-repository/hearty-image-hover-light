<?php

class HeartyImageHoverLightParams {

	public static function generate_fields($obj, $number_of_settings_instances, $number_of_content_items) {

        $modify_settings_instance_arr = array();

        for ($i = 1; $i <= $number_of_settings_instances; $i++) {

            $modify_settings_instance_arr[$i] = 'Settings Instance '.$i;

        }

        add_settings_field(
            'modify_settings_instance',
            'Modify Settings for',
            array($obj, 'fields_callback'),
            'heartyimagehoverlight-setting-admin',
            'heartyimagehoverlight_global_settings_section',
            array(
                'id' => 'modify_settings_instance',
                'type' => 'pills',
                'options' => $modify_settings_instance_arr,
                'default' => 1,
                //'force' => 1,
                'description' => 'Choose the settings instance you would like to modify. This is the free version of our <a href="https://www.heartyplugins.com/wordpress-plugins/premium-plugins/product/hearty-image-hover" target="_blank">Hearty Image Hover</a> plugin, so compared to the full version, it has limited features and settings. This plugin has 1 settings instance, 4 content items, simple widgets and shortcodes, so for <b>multiple settings instances</b>, <b>unlimited content items</b> and <b>flexible widgets</b>, <a href="https://www.heartyplugins.com/wordpress-plugins/premium-plugins/product/hearty-image-hover" target="_blank">check out the full version</a>.',
            )
        );

        for ($i = 1; $i <= $number_of_settings_instances; $i++) {

			//------------- SCRIPT INSERT

            add_settings_field(
                'layout_effect_'.$i,
                'Layout Effect <span class="hearty-admin-badge">'.$i.'</span>',
                array($obj, 'fields_callback'),
                'heartyimagehoverlight-setting-admin',
                'heartyimagehoverlight_basic_section',
                array(
                    'id' => 'layout_effect_'.$i,
                    'type' => 'select',
                    'class' => 'hearty-sep',
                    'default' => 'layout-effect1',
                    'options' => array('layout-effect-none' => 'None','layout-effect1' => 'Effect1','layout-effect2' => 'Effect2','layout-effect3' => 'Effect3','layout-effect4' => 'Effect4','layout-effect5' => 'Effect5','layout-effect6' => 'Effect6','layout-effect7' => 'Effect7','layout-effect8' => 'Effect8',),
                    'description' => 'Choose a CSS3 effect for the layout on page scroll and load. Note that the CSS3 features are not supported by older browsers.',
                )
            );

            add_settings_field(
                'image_border_radius_'.$i,
                'Image Border Radius <span class="hearty-admin-badge">'.$i.'</span>',
                array($obj, 'fields_callback'),
                'heartyimagehoverlight-setting-admin',
                'heartyimagehoverlight_basic_section',
                array(
                    'id' => 'image_border_radius_'.$i,
                    'type' => 'text',
                    'class' => 'hearty-sep',
                    'default' => '4px',
                    'description' => 'Insert the border-radius for the image using pixels or percent (for example: 140px or 80%, not 140). Note that the CSS3 features are not supported by older browsers. A blank field reverts the setting to the default value.',
                )
            );

            add_settings_field(
                'title_google_font_'.$i,
                'Title Google Font <span class="hearty-admin-badge">'.$i.'</span>',
                array($obj, 'fields_callback'),
                'heartyimagehoverlight-setting-admin',
                'heartyimagehoverlight_basic_section',
                array(
                    'id' => 'title_google_font_'.$i,
                    'type' => 'text',
                    'class' => '',
                    'default' => 'Open Sans',
                    'description' => 'Insert the name of the Google Font for the title of the module, for example Open Sans or Roboto. A blank field reverts the setting to the default value.',
                )
            );

            add_settings_field(
                'title_font_weight_'.$i,
                'Title Font Weight <span class="hearty-admin-badge">'.$i.'</span>',
                array($obj, 'fields_callback'),
                'heartyimagehoverlight-setting-admin',
                'heartyimagehoverlight_basic_section',
                array(
                    'id' => 'title_font_weight_'.$i,
                    'type' => 'select',
                    'default' => '400',
                    'options' => array('300' => 'Light','400' => 'Regular','500' => 'Medium','600' => 'Semibold','700' => 'Bold',),
                    'description' => 'Set the font weight for the title of the module.',
                )
            );

            add_settings_field(
                'title_font_style_'.$i,
                'Title Font Style <span class="hearty-admin-badge">'.$i.'</span>',
                array($obj, 'fields_callback'),
                'heartyimagehoverlight-setting-admin',
                'heartyimagehoverlight_basic_section',
                array(
                    'id' => 'title_font_style_'.$i,
                    'type' => 'select',
                    'default' => 'normal',
                    'options' => array('normal' => 'Normal','italic' => 'Italic',),
                    'description' => 'Set the font style for the title of the module.',
                )
            );

            add_settings_field(
                'title_padding_'.$i,
                'Title Padding <span class="hearty-admin-badge">'.$i.'</span>',
                array($obj, 'fields_callback'),
                'heartyimagehoverlight-setting-admin',
                'heartyimagehoverlight_basic_section',
                array(
                    'id' => 'title_padding_'.$i,
                    'type' => 'text',
                    'class' => '',
                    'default' => '10px 20px',
                    'description' => 'Insert the padding for the title of the module using pixels or percent (for example: 14px or 10%, not 14). The padding is a CSS property that sets the space around the content. The padding can have from 1 to 4 values (top, right, bottom and left). A blank field reverts the setting to the default value.',
                )
            );

            add_settings_field(
                'title_font_size_'.$i,
                'Title Font Size <span class="hearty-admin-badge">'.$i.'</span>',
                array($obj, 'fields_callback'),
                'heartyimagehoverlight-setting-admin',
                'heartyimagehoverlight_basic_section',
                array(
                    'id' => 'title_font_size_'.$i,
                    'type' => 'text',
                    'class' => '',
                    'default' => '18px',
                    'description' => 'Insert the font size for the title of the module using pixels, percent or em (for example: 14px, 120% or 1.2em, not 14). A blank field reverts the setting to the default value.',
                )
            );

            add_settings_field(
                'title_line_height_'.$i,
                'Title Line Height <span class="hearty-admin-badge">'.$i.'</span>',
                array($obj, 'fields_callback'),
                'heartyimagehoverlight-setting-admin',
                'heartyimagehoverlight_basic_section',
                array(
                    'id' => 'title_line_height_'.$i,
                    'type' => 'text',
                    'class' => '',
                    'default' => '1.4em',
                    'description' => 'Insert the line height for the title of the module using pixels or em (for example: 14px or 1.2em, not 14). The line-height property is used to modify the spacing between the lines of text. A blank field reverts the setting to the default value.',
                )
            );

            add_settings_field(
                'title_text_align_'.$i,
                'Title Text Align <span class="hearty-admin-badge">'.$i.'</span>',
                array($obj, 'fields_callback'),
                'heartyimagehoverlight-setting-admin',
                'heartyimagehoverlight_basic_section',
                array(
                    'id' => 'title_text_align_'.$i,
                    'type' => 'select',
                    'default' => 'left',
                    'options' => array('left' => 'left','center' => 'center','right' => 'right',),
                    'description' => 'Choose the text align for the title of the module.',
                )
            );

            add_settings_field(
                'title_icon_vertical_align_'.$i,
                'Title Icon Vertical Align <span class="hearty-admin-badge">'.$i.'</span>',
                array($obj, 'fields_callback'),
                'heartyimagehoverlight-setting-admin',
                'heartyimagehoverlight_basic_section',
                array(
                    'id' => 'title_icon_vertical_align_'.$i,
                    'type' => 'select',
                    'class' => 'hearty-sep',
                    'default' => 'baseline',
                    'options' => array('baseline' => 'baseline','top' => 'top','middle' => 'middle','bottom' => 'bottom',),
                    'description' => 'Choose the vertical align for the icon of the title of the module.',
                )
            );

            add_settings_field(
                'description_font_size_'.$i,
                'Description Font Size <span class="hearty-admin-badge">'.$i.'</span>',
                array($obj, 'fields_callback'),
                'heartyimagehoverlight-setting-admin',
                'heartyimagehoverlight_basic_section',
                array(
                    'id' => 'description_font_size_'.$i,
                    'type' => 'text',
                    'class' => '',
                    'default' => '14px',
                    'description' => 'Insert the font size for the text of the image hover using pixels, percent or em (for example: 14px, 120% or 1.2em, not 14). A blank field reverts the setting to the default value.',
                )
            );

            add_settings_field(
                'description_line_height_'.$i,
                'Description Line Height <span class="hearty-admin-badge">'.$i.'</span>',
                array($obj, 'fields_callback'),
                'heartyimagehoverlight-setting-admin',
                'heartyimagehoverlight_basic_section',
                array(
                    'id' => 'description_line_height_'.$i,
                    'type' => 'text',
                    'class' => '',
                    'default' => '21px',
                    'description' => 'Insert the line height for the text of the image hover using pixels or em (for example: 14px or 1.2em, not 14). The line-height property is used to modify the spacing between the lines of text. A blank field reverts the setting to the default value.',
                )
            );

            add_settings_field(
                'description_text_align_'.$i,
                'Description Align <span class="hearty-admin-badge">'.$i.'</span>',
                array($obj, 'fields_callback'),
                'heartyimagehoverlight-setting-admin',
                'heartyimagehoverlight_basic_section',
                array(
                    'id' => 'description_text_align_'.$i,
                    'type' => 'select',
                    'class' => 'hearty-sep',
                    'default' => 'center',
                    'options' => array('left' => 'left','center' => 'center','right' => 'right',),
                    'description' => 'Choose the text align for the the image hover.',
                )
            );

            add_settings_field(
                'readmore_border_radius_'.$i,
                'Read More Border Radius <span class="hearty-admin-badge">'.$i.'</span>',
                array($obj, 'fields_callback'),
                'heartyimagehoverlight-setting-admin',
                'heartyimagehoverlight_basic_section',
                array(
                    'id' => 'readmore_border_radius_'.$i,
                    'type' => 'text',
                    'class' => '',
                    'default' => '4px',
                    'description' => 'Insert the border-radius for the Read More text using pixels or percent (for example: 140px or 80%, not 140). Note that the CSS3 features are not supported by older browsers. A blank field reverts the setting to the default value.',
                )
            );

            add_settings_field(
                'readmore_padding_'.$i,
                'Read More Padding <span class="hearty-admin-badge">'.$i.'</span>',
                array($obj, 'fields_callback'),
                'heartyimagehoverlight-setting-admin',
                'heartyimagehoverlight_basic_section',
                array(
                    'id' => 'readmore_padding_'.$i,
                    'type' => 'text',
                    'class' => '',
                    'default' => '11px 16px 9px',
                    'description' => 'Insert the padding for the Read More text using pixels or percent (for example: 14px or 10%, not 14). The padding is a CSS property that sets the space around the content. The padding can have from 1 to 4 values (top, right, bottom and left). A blank field reverts the setting to the default value.',
                )
            );

			for ($j = 1; $j <= $number_of_content_items; $j++) {

            add_settings_field(
                'show_image'.$j.'_'.$i,
                'Show Image '.$j.' <span class="hearty-admin-badge">'.$i.'</span>',
                array($obj, 'fields_callback'),
                'heartyimagehoverlight-setting-admin',
                'heartyimagehoverlight_content_options_section_'.$j,
                array(
                    'id' => 'show_image'.$j.'_'.$i,
                    'type' => 'select',
                    'class' => 'hearty-sep',
                    'default' => '1',
                    'options' => array('1' => 'Yes','0' => 'No',),
                    'description' => 'Choose if the image for this module should be displayed or not.',
                )
            );

			add_settings_field(
				'upload_image'.$j.'_'.$i,
				'Upload Image '.$j.' <span class="hearty-admin-badge">'.$i.'</span>',
				array($obj, 'media_callback'),
				'heartyimagehoverlight-setting-admin',
				'heartyimagehoverlight_content_options_section_'.$j,
				array(
					'id' => 'upload_image'.$j.'_'.$i,
					'type' => 'text',
					'default' => '',
					'description' => 'Upload the image for the module. A blank field reverts the setting to the default value. After uploading the image, please save your changes.',
				)
			);

            add_settings_field(
                'image_alt'.$j.'_'.$i,
                'Image '.$j.' Alt Text <span class="hearty-admin-badge">'.$i.'</span>',
                array($obj, 'fields_callback'),
                'heartyimagehoverlight-setting-admin',
                'heartyimagehoverlight_content_options_section_'.$j,
                array(
                    'id' => 'image_alt'.$j.'_'.$i,
                    'type' => 'text',
                    'class' => 'hearty-sep',
                    'default' => '',
                    'description' => 'Insert the text for the image Alt. A blank field reverts the setting to the default value.',
                )
            );

            add_settings_field(
                'title_text'.$j.'_'.$i,
                'Title '.$j.' Text <span class="hearty-admin-badge">'.$i.'</span>',
                array($obj, 'fields_callback'),
                'heartyimagehoverlight-setting-admin',
                'heartyimagehoverlight_content_options_section_'.$j,
                array(
                    'id' => 'title_text'.$j.'_'.$i,
                    'type' => 'text',
                    'class' => '',
                    'default' => 'Title Text',
                    'description' => 'Insert the text for the title. A blank field reverts the setting to the default value.',
                )
            );

            add_settings_field(
                'title_color'.$j.'_'.$i,
                'Title '.$j.' Color <span class="hearty-admin-badge">'.$i.'</span>',
                array($obj, 'fields_callback'),
                'heartyimagehoverlight-setting-admin',
                'heartyimagehoverlight_content_options_section_'.$j,
                array(
                    'id' => 'title_color'.$j.'_'.$i,
                    'type' => 'text',
                    'class' => 'hearty-colorpicker',
                    'default' => '#FFFFFF',
                    'description' => 'Choose the color for the title. A blank field reverts the setting to the default value.',
                )
            );

            add_settings_field(
                'title_bg_color'.$j.'_'.$i,
                'Title '.$j.' Background Color <span class="hearty-admin-badge">'.$i.'</span>',
                array($obj, 'fields_callback'),
                'heartyimagehoverlight-setting-admin',
                'heartyimagehoverlight_content_options_section_'.$j,
                array(
                    'id' => 'title_bg_color'.$j.'_'.$i,
                    'type' => 'text',
                    'class' => 'hearty-colorpicker',
                    'default' => '#111111',
                    'description' => 'Choose the color for the background of the title. A blank field reverts the setting to the default value.',
                )
            );

            add_settings_field(
                'title_icon'.$j.'_'.$i,
                'Title '.$j.' Icon <span class="hearty-admin-badge">'.$i.'</span>',
                array($obj, 'fields_callback'),
                'heartyimagehoverlight-setting-admin',
                'heartyimagehoverlight_content_options_section_'.$j,
                array(
                    'id' => 'title_icon'.$j.'_'.$i,
                    'type' => 'text',
                    'class' => 'hearty-sep',
                    'default' => 'fas fa-tree',
                    'description' => 'Insert the Font Awesome icon name (for example: fas fa-magic or fab fa-wordpress). A blank field reverts the setting to the default value.',
                )
            );

            add_settings_field(
                'description_text_color'.$j.'_'.$i,
                'Description '.$j.' Text Color <span class="hearty-admin-badge">'.$i.'</span>',
                array($obj, 'fields_callback'),
                'heartyimagehoverlight-setting-admin',
                'heartyimagehoverlight_content_options_section_'.$j,
                array(
                    'id' => 'description_text_color'.$j.'_'.$i,
                    'type' => 'text',
                    'class' => 'hearty-colorpicker',
                    'default' => '#FFFFFF',
                    'description' => 'Choose the color for the description of the module. A blank field reverts the setting to the default value.',
                )
            );

            add_settings_field(
                'description_text'.$j.'_'.$i,
                'Description '.$j.' Text <span class="hearty-admin-badge">'.$i.'</span>',
                array($obj, 'fields_callback'),
                'heartyimagehoverlight-setting-admin',
                'heartyimagehoverlight_content_options_section_'.$j,
                array(
                    'id' => 'description_text'.$j.'_'.$i,
                    'type' => 'textarea',
                    'class' => 'hearty-sep',
                    'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.',
                    'description' => 'Insert the text for the description of the module. A blank field reverts the setting to the default value.',
                )
            );

            add_settings_field(
                'readmore_text'.$j.'_'.$i,
                'Read More '.$j.' Text <span class="hearty-admin-badge">'.$i.'</span>',
                array($obj, 'fields_callback'),
                'heartyimagehoverlight-setting-admin',
                'heartyimagehoverlight_content_options_section_'.$j,
                array(
                    'id' => 'readmore_text'.$j.'_'.$i,
                    'type' => 'text',
                    'class' => '',
                    'default' => 'Read More',
                    'description' => 'Insert the text for the Read More text to be displayed on the hover box, below the content. A blank field reverts the setting to the default value.',
                )
            );

            add_settings_field(
                'readmore_color'.$j.'_'.$i,
                'Read More '.$j.' Color <span class="hearty-admin-badge">'.$i.'</span>',
                array($obj, 'fields_callback'),
                'heartyimagehoverlight-setting-admin',
                'heartyimagehoverlight_content_options_section_'.$j,
                array(
                    'id' => 'readmore_color'.$j.'_'.$i,
                    'type' => 'text',
                    'class' => 'hearty-colorpicker',
                    'default' => '#FFFFFF',
                    'description' => 'Choose the color for the Read More text. A blank field reverts the setting to the default value.',
                )
            );

            add_settings_field(
                'readmore_bg_color'.$j.'_'.$i,
                'Read More '.$j.' Background Color <span class="hearty-admin-badge">'.$i.'</span>',
                array($obj, 'fields_callback'),
                'heartyimagehoverlight-setting-admin',
                'heartyimagehoverlight_content_options_section_'.$j,
                array(
                    'id' => 'readmore_bg_color'.$j.'_'.$i,
                    'type' => 'text',
                    'class' => 'hearty-colorpicker',
                    'default' => '#ff5252',
                    'description' => 'Choose the color for the background of the Read More text. A blank field reverts the setting to the default value.',
                )
            );

            add_settings_field(
                'readmore_link'.$j.'_'.$i,
                'Read More '.$j.' Link <span class="hearty-admin-badge">'.$i.'</span>',
                array($obj, 'fields_callback'),
                'heartyimagehoverlight-setting-admin',
                'heartyimagehoverlight_content_options_section_'.$j,
                array(
                    'id' => 'readmore_link'.$j.'_'.$i,
                    'type' => 'text',
                    'class' => '',
                    'default' => '',
                    'description' => 'Insert the URL for the Read More text. Note that the link must include http:// or https://. A blank field reverts the setting to the default value.',
                )
            );

            add_settings_field(
                'readmore_target'.$j.'_'.$i,
                'Read More '.$j.' Target <span class="hearty-admin-badge">'.$i.'</span>',
                array($obj, 'fields_callback'),
                'heartyimagehoverlight-setting-admin',
                'heartyimagehoverlight_content_options_section_'.$j,
                array(
                    'id' => 'readmore_target'.$j.'_'.$i,
                    'type' => 'select',
                    'default' => 'blank',
                    'options' => array('self' => 'self','blank' => 'blank','parent' => 'parent','top' => 'top',),
                    'description' => 'Choose the link target of the URL for the Read More text link.',
                )
            );

			}

            //------------- END SCRIPT INSERT

        }

	}

}
