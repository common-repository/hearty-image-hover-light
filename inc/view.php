<?php

class HeartyImageHoverLightView {

	public static function generate_view($settings_instance) {

		$options = get_option('heartyimagehoverlight_options');

		$options_i = array();

		$i = 1;

		if (empty($options)) { return '<p>Please save your settings and try again.</p>'; }

		foreach ($options as $k => $v) {

			if ($i > 1) {

				$k_arr = explode('_', $k);

				if (end($k_arr) == $settings_instance) {
					$options_i[str_replace('_'.$settings_instance, '', $k)] = $v;
				}

			}

			$i++;

		}

		$number_of_content_items = 4;

		// params

		$layout_effect                          = $options_i['layout_effect'];
		$image_border_radius                    = $options_i['image_border_radius'];

		$title_google_font                      = $options_i['title_google_font'];
		$title_font_weight                      = $options_i['title_font_weight'];
		$title_font_style                       = $options_i['title_font_style'];
		$title_padding                          = $options_i['title_padding'];
		$title_font_size                        = $options_i['title_font_size'];
		$title_line_height                      = $options_i['title_line_height'];
		$title_text_align                       = $options_i['title_text_align'];
		$title_icon_vertical_align              = $options_i['title_icon_vertical_align'];

		$description_font_size                  = $options_i['description_font_size'];
		$description_line_height                = $options_i['description_line_height'];
		$description_text_align                 = $options_i['description_text_align'];

		$readmore_padding                       = $options_i['readmore_padding'];
		$readmore_border_radius                 = $options_i['readmore_border_radius'];

		for ($j=1;$j<=$number_of_content_items;$j++) {

		${'show_image'.$j}                      = $options_i['show_image'.$j];
		${'upload_image'.$j}                    = $options_i['upload_image'.$j];
		${'image_alt'.$j}                       = $options_i['image_alt'.$j];
		${'title_text'.$j}                      = $options_i['title_text'.$j];
		${'title_color'.$j}                     = $options_i['title_color'.$j];
		${'title_bg_color'.$j}                  = $options_i['title_bg_color'.$j];
		${'title_icon'.$j}                      = $options_i['title_icon'.$j];
		${'description_text'.$j}                = str_replace("\n", '<br />', $options_i['description_text'.$j]);
		${'description_text_color'.$j}          = $options_i['description_text_color'.$j];
		${'readmore_text'.$j}                   = $options_i['readmore_text'.$j];
		${'readmore_color'.$j}                  = $options_i['readmore_color'.$j];
		${'readmore_bg_color'.$j}               = $options_i['readmore_bg_color'.$j];
		${'readmore_link'.$j}                   = $options_i['readmore_link'.$j];
		${'readmore_target'.$j}                 = $options_i['readmore_target'.$j];

		}

		$custom_id = rand(10000,90000);

		wp_register_style('heartyimagehoverlight-googlefonts-title'.$custom_id, 'https://fonts.googleapis.com/css?family='.str_replace(" ","+",$title_google_font).':'.$title_font_weight.str_replace("normal","",$title_font_style));

		wp_enqueue_style('heartyimagehoverlight-googlefonts-title'.$custom_id);

		// end params

		ob_start();

		// html

		?>

		<?php if ($layout_effect != 'layout-effect-none') { ?>

		  <script type="text/javascript">
			jQuery(document).ready(function() {
			jQuery('#heartyimagehoverlight-<?php echo $custom_id; ?> .layout-effect').addClass("heartyhide").viewportChecker({
			  classToAdd: 'heartyshow <?php echo $layout_effect; ?>', // Class to add to the elements when they are visible
			  offset: 100
			  });
			});
		  </script>

		<?php } ?>

		<div id="heartyimagehoverlight-<?php echo $custom_id; ?>" class="hrty-row">

		  <?php
		  $col_class = '';
		  $active_columns = array($show_image1,$show_image2,$show_image3,$show_image4,$show_image5,$show_image6);
		  $columns_check = 0; foreach ($active_columns as $active_column) { if ($active_column == 1) { $columns_check++; } }

			if ($columns_check == 6) { $col_class = 'hrty-col-lg-2 hrty-col-md-4 hrty-col-sm-6 hrty-col-xs-12'; }
			else if ($columns_check == 5) { $col_class = 'hrty-col-lg-2-4 hrty-col-md-4 hrty-col-sm-6 hrty-col-xs-12'; }
			else if ($columns_check == 4) { $col_class = 'hrty-col-lg-3 hrty-col-md-3 hrty-col-sm-6 hrty-col-xs-12'; }
			else if ($columns_check == 3) { $col_class = 'hrty-col-lg-4 hrty-col-md-4 hrty-col-sm-4 hrty-col-xs-12'; }
			else if ($columns_check == 2) { $col_class = 'hrty-col-lg-6 hrty-col-md-6 hrty-col-sm-6 hrty-col-xs-12'; }
			else if ($columns_check == 1) { $col_class = 'hrty-col-lg-12 hrty-col-md-12 hrty-col-sm-12 hrty-col-xs-12'; }

			for ($i=1;$i<7;$i++) {

			if ((${'show_image'.$i}) !=0) { ?>

		  <div class="heartyimagehoverlight <?php echo $col_class; ?>">

			<div id="heartyimagehoverlight-box<?php echo $i; ?>"
				class="heartyimagehoverlight<?php echo $i; ?> layout-effect"
				style="-webkit-border-radius: <?php echo $image_border_radius; ?>;
					  -moz-border-radius: <?php echo $image_border_radius; ?>;
					  border-radius: <?php echo $image_border_radius; ?>;">

				  <div id="heartyimagehoverlight-image-container<?php echo $i; ?>">

					<div id="heartyimagehoverlight-image<?php echo $i; ?>"
						 style="height: 100%;">

						<?php if (${'upload_image'.$i}) { ?>
						  <img src="<?php echo ${'upload_image'.$i}; ?>"
							  alt="<?php echo ${'image_alt'.$i}; ?>"/>
						<?php } else { ?>
						  <img src="<?php echo plugins_url('/demo/demo-image'.$i.'.jpg', __DIR__); ?>"
							  alt="<?php echo ${'image_alt'.$i}; ?>"/>
						<?php } ?>

					</div>

					<div id="heartyimagehoverlight-overlay<?php echo $i; ?>">

						<div style="display: block;">

						  <p id="heartyimagehoverlight-description<?php echo $i; ?>"
						  style="color: <?php echo ${'description_text_color'.$i}; ?>;
								font-size: <?php echo $description_font_size; ?>;
								line-height: <?php echo $description_line_height; ?>;
								text-align: <?php echo $description_text_align; ?>;">

							<?php echo ${'description_text'.$i}; ?>

						  </p>

						  <div id="heartyimagehoverlight-readmore<?php echo $i; ?>"
							   class="heartyimagehoverlight-readmore"
							   style="text-align: <?php echo $description_text_align; ?>;">

								<a class="btn"
								  href="<?php echo ${'readmore_link'.$i}; ?>"
								  target="_<?php echo ${'readmore_target'.$i}; ?>"
								  style="color: <?php echo ${'readmore_color'.$i}; ?>;
										background-color: <?php echo ${'readmore_bg_color'.$i}; ?>;
										padding: <?php echo $readmore_padding; ?>;
										-webkit-border-radius: <?php echo $readmore_border_radius; ?>;
										-moz-border-radius: <?php echo $readmore_border_radius; ?>;
										border-radius: <?php echo $readmore_border_radius; ?>;
										margin: 0; ">

								  <i class="fas fa-arrow-right"
									 style="font-size: <?php echo $description_font_size; ?>;"></i>

								  <?php echo ${'readmore_text'.$i}; ?>

								</a>

						  </div>

						</div>

					</div>

				  </div>

				  <h4 id="heartyimagehoverlight-title<?php echo $i; ?>"
				  style="color: <?php echo ${'title_color'.$i}; ?>;
						background-color: <?php echo ${'title_bg_color'.$i}; ?>;
						font-family: '<?php echo $title_google_font; ?>', sans-serif;
						font-weight: <?php echo $title_font_weight; ?>;
						font-style: <?php echo $title_font_style; ?>;
						padding: <?php echo $title_padding; ?>;
						font-size: <?php echo $title_font_size; ?>;
						line-height: <?php echo $title_line_height; ?>;
						text-align: <?php echo $title_text_align; ?>;
						margin-bottom: 0;">

					<i class="<?php echo ${'title_icon'.$i}; ?>"
					   style="color: <?php echo ${'title_color'.$i}; ?>;
							 font-size: <?php echo $title_font_size; ?>;
							 vertical-align: <?php echo $title_icon_vertical_align; ?>">
					</i>

					<?php echo ${'title_text'.$i}; ?>

				  </h4>

			</div>

		  </div>

		  <?php } } ?>

		</div>

		<?php

		// end html

		$output = ob_get_contents();

		ob_end_clean();

		return $output;

	}

}

