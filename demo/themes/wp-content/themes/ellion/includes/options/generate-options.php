<?php

if (!class_exists('premiumwd_theme_options')) {
		class premiumwd_theme_options {
			static $section;

			private $options;
		
			public function premiumwd_theme_options($options) {
			$this->options = $options;
		
			add_action('admin_menu', array(&$this, 'premiumwd_add_menu')); // Action that triggers function below
		}
		
		public function premiumwd_add_menu() {
			add_theme_page(__(THEME_MENU_TITLE), __(THEME_MENU_TITLE), 'administrator', THEME_MENU_SLUG, array(&$this, 'premiumwd_display_page'),  get_template_directory_uri()."/includes/options/" . 'images/icon.png');
		}
		
		/* Function That Generates Main Content */
		
		public function premiumwd_display_page() { ?>
        
			<?php $this->save_options(); ?>
			<div id="premiumwd-meta-info">
				<div id="premiumwd-meta">
				<h1><?php echo THEME_DOMAIN; ?></h1>
				<span class="theme-version">V.<?php echo THEME_VERSION; ?></span>
                <ul class="theme-links">
                <li><a class="forums" href="http://help.premiumwd.com/" target="_blank">Support Forums</a></li>
                </ul>
				</div>
			</div>
		<form id="premiumwd-settings" method="post">
			<input type="hidden" name="action" id="action" value="premiumwd_save_options" />
			<input type="hidden" name="activetab" id="activetab" value="general-visual" />
			<div id="premiumwd-sidebar">
				<ul id="premiumwd-main-menu">
					<?php $first = true; ?> 
					<?php
                        /* Cycle that goes though $options array, it is searching for headings and sections to make navigation */

                        foreach ($this->options as $option):
                            if ($option['type'] == "section") :
                                static $section;
								$section = $option['id'];
								
                                ?>
                             
                                <li><p><span class="<?php echo $option['icon']; ?>"></span><?php echo $option['title']; ?></p>
                                    <ul<?php if ($option['expanded'] == "true") echo ' class="default-accordion"'; ?>>
                                        <?php
                                        foreach ($this->options as $sections):                                          
                                            if (isset($sections['section']) && ($sections['section'] == $section) && (($sections['type'] == "heading") || ($sections['type'] == "html"))):
                                                ?>
                                                <li><a<?php
                            if ($first) {
                                echo ' class="defaulttab"';
                                $first = false;
                            }
                                                ?> href="#" rel="<?php echo $sections['id']; ?>"><p><?php echo $sections['title']; ?></p></a></li>
                                                    <?php
                                                endif;
                                            endforeach;
                                            ?> 
                                    </ul>
                                </li>
                                <?php
                            endif;
                        endforeach;
                        ?>
                    </ul>
                </div>
           

			<?php /* Below - script that generates divs for each tab */ ?>
			<div id="premiumwd-content">
					<?php if ( isset ( $_POST['save'] ) ): ?>
							<div class="saved"><p><strong><?php _e( ' Settings have been saved.', 'ellion' ); ?></strong></p></div>
							    <?php endif; ?>
					
					<?php foreach ($this->options as $option): ?> 
                        <?php if ($option['type'] == "heading"): ?>
                            <?php $under_section = $option['id']; ?>
					<div class="tab-content" id="<?php echo $option['id']; ?>">
						<div class="premiumwd-settings-headline" >
							<h2><?php echo $option['title']; ?></h2>
							
						</div> 
						
						<?php if($option['id'] == 'style-typography') {
							echo '<div class="typo_seprator_class" >';
							}
						?> 
             
                        
                           <?php
                                /* Cycle that goes though options, and calls function for displaying input types */
          //print_r($this->options);
                                foreach ($this->options as $item) {
                                    if (isset($item['under_section']) && $item['under_section'] == $under_section) {
                                        switch ($item['type']) {
                                            case "text":
                                                $this->display_text($item);
                                                break;

                                            case "color":
                                                $this->display_color($item);
                                                break;

                                            case "small_heading":
                                                $this->display_small_heading($item);
                                                break;

                                            case "textarea":
                                                $this->display_textarea($item);
                                                break;

                                            case "image":
                                                $this->display_image($item);
                                                break;

                                            case "checkbox":
                                                $this->display_checkbox($item);
                                                break;

                                            case "checkbox_image":
                                                $this->display_checkbox_image($item);
                                                break;

                                            case "radio":
                                                $this->display_radio($item);
                                                break;

                                            case "toggle_div_start":
                                                $this->display_toggle_div_start($item);
                                                break;

                                            case "toggle_div_end":
                                                $this->display_toggle_div_end();
                                                break;

                                            case "radio_image":
                                                $this->display_radio_image($item);
                                                break;

                                            case "select":
                                                $this->display_select($item);
                                                break;
                                        }
                                    }           
                                }
                                ?>
						<?php if($option['id'] == 'style-typography') {
							echo '</div>';
						}
					?> 
					</div>
						<?php endif; ?>
						<?php if ($option['type'] == "html"): ?>
								<div class="tab-content" id="<?php echo $option['id']; ?>">
									<?php echo $option['source']; ?>
								</div>
						<?php endif; ?>
					<?php endforeach; ?>
					
			</div> 
		
     <div id="premiumwd-footer"><input name="save" class="save-button" type="submit" value="Save changes" /></div>   
     </form> 
		<?php
		}
		
		/*         * *************************************
		* *************************************
		* ****                           ****** 
		* ****     Display functions     ******  
		* ****                           ******
		* *************************************
		* ************************************ */
		
		/* Normal text input ("type" => "text" */
		
		public function display_text($value) {
			$rel = "";
				if (isset($value['display_checkbox_id']) && $value['display_checkbox_id'])
					$rel = " rel=".$value['display_checkbox_id'];
					else
				$rel = ""; ?>
			<div<?php echo $rel; ?> class="separator">
                <?php if($value['name'] != ''){ ?>
                <section>
				<div class="label">
					<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label></div><p class="description"><?php if (isset($value['desc'])){echo $value['desc'];} ?></p>
                </section>
				<?php }?>
				<div class="settings-content">
					<div class="premiumwd_image_preview">
						<?php if (isset($value['img_desc']) && $value['img_desc']): ?>
							<img src="<?php echo $value['img_desc']; ?>" />
						<?php endif; ?>
					</div>
					<input<?php if (isset($value['placeholder']) && $value['placeholder']) echo ' placeholder="' . $value['placeholder'] . '"'; ?> class="premiumwd-fullwidth" id="<?php echo $value['id']; ?>" name="<?php echo $value['id']; ?>" type="text" value="<?php if (get_option($value['id'])) echo esc_html(stripslashes(get_option($value['id'])));else echo $value['default']; ?>" />
					
				</div>
                <?php if($value['name'] == ""){ ?>
				<div class="label">
					<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
				</div>
                <?php }?>
			</div>
		<?php
		}
		
		/* Color picker ("type" => "color") */
		
		public function display_color($value) {
			$rel = "";
			if (isset($value['display_checkbox_id']) && $value['display_checkbox_id'])
				$rel = " rel=".$value['display_checkbox_id'];
			else
				$rel = ""; ?>
			<?php
			if (get_option($value['id']))
				$color = ' style="background-color: #' . get_option($value['id']) . ';"';
			else if ($value['default'])
				$color = ' style="background-color: #' . $value['default'] . ';"'
			?>
			<div<?php echo $rel; ?> class="separator">
                <?php if(isset($value['name']) && $value['name'] != '') {?>
				<section>
                <div class="label">
					<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label></div><p class="description"><?php if (isset($value['desc'])){ echo $value['desc']; }?></p>
                </section>
				<?php }?>
				<div class="settings-content" id="typography">
					<div class="premiumwd_image_preview">
						<?php if (isset($value['img_desc']) && $value['img_desc']): ?>
							<img src="<?php echo $value['img_desc']; ?>" />
						<?php endif; ?>
					</div>
					<input<?php if ($value['placeholder']) echo ' placeholder="' . $value['placeholder'] . '"'; ?> class="premiumwd-color-picker"<?php echo $color; ?> id="<?php echo $value['id']; ?>" name="<?php echo $value['id']; ?>" type="text" value="<?php if (get_option($value['id'])) echo esc_html(stripslashes(get_option($value['id'])));else echo $value['default']; ?>" />
					
				</div>
			</div>
		<?php
		}
		
		/* Image Upload ("type" => "image") */
		
		public function display_image($value) {
			$rel = "";
			if (isset($value['display_checkbox_id']) && $value['display_checkbox_id'])
				$rel = " rel=".$value['display_checkbox_id'];
			else
				$rel = "";
			?>
			<div<?php echo $rel; ?> class="separator">
            <section>
				<div class="label">
					<label><?php echo $value['name']; ?></label></div><p class="description">
					<?php
					if (isset($value['desc'])){
					echo $value['desc'];
					}?>
					</p>
                 </section>   
				<div class="settings-content">
					<?php
					if (get_option($value['id']))
						$def_value = stripslashes(get_option($value['id']));
					else
						$def_value = $value['default'];
					?>
					<input<?php if ($value['placeholder']) echo ' placeholder="' . $value['placeholder'] . '"'; ?> class="premiumwd-fullwidth" type="text" value="<?php echo $def_value; ?>" name="<?php echo $value['id']; ?>" />
		
					<span class="upload premiumwd_upload premiumwd-button-blue" id="<?php echo $value['id']; ?>">Upload image</span>
					<?php if (get_option($value['id'])): ?>
						<span type="button" class="premiumwd_remove premiumwd-button" id="remove_<?php echo $value['id']; ?>">Remove image</span>
					<?php endif; ?>
		
					<div class="premiumwd_image_preview">
						<?php if (get_option($value['id'])): ?>
							<img src="<?php echo get_option($value['id']); ?>" />
						<?php elseif ($value['default'] != ""): ?>
							<img src="<?php echo $value['default']; ?>" />
						<?php endif; ?>
					</div>
		
					
				</div>
			</div>
		<?php
		}
		
		/* Textarea input ("type" => "textarea") */
		
		public function display_textarea($value) {
			$rel = "";
			if (isset($value['display_checkbox_id']) && $value['display_checkbox_id'])
				$rel = " rel=".$value['display_checkbox_id'];
			else
				$rel = "";
			?>
			<div<?php echo $rel; ?> class="separator">
            <section>
				<div class="label">
					<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label></div><p class="description"><?php echo $value['desc']; ?></p>
            </section>        
				<div class="settings-content">
					<div class="premiumwd_image_preview">
						<?php if (isset($value['img_desc']) && $value['img_desc']): ?>
							<img src="<?php echo $value['img_desc']; ?>" />
						<?php endif; ?>
					</div>
					<textarea<?php if ($value['placeholder']) echo ' placeholder="' . $value['placeholder'] . '"'; ?> id="<?php echo $value['id']; ?>" name="<?php echo $value['id']; ?>" cols="70" rows="8"><?php
						if (get_option($value['id']))
							echo stripslashes(get_option($value['id']));
						else
							echo $value['default'];
						?>
					</textarea>
				
				</div>
			</div>
		<?php
		}
		
		/* Select input ("type" => "select") */
		
		public function display_select($value) {

			$rel = "";
			if (isset($value['display_checkbox_id']) && $value['display_checkbox_id'])
				$rel = " rel=".$value['display_checkbox_id'];
			else
				$rel = "";
			?>
			<div<?php echo $rel; ?> class="separator">
                <?php if($value['name'] != '') {?>
                <section>
				<div class="label">
					<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label></div><p class="description"><?php echo $value['desc']; ?></p>
                </section>
				<?php } ?>
				<div class="settings-content">
					<div class="premiumwd_image_preview">
						<?php if (isset($value['img_desc']) && $value['img_desc']): ?>
							<img src="<?php echo $value['img_desc']; ?>" />
						<?php endif; ?>
					</div>
					<select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
					<?php
					if (get_option($value['id']))
						$default = get_option($value['id']);
					else
						$default = $value['default'];
		
					foreach ($value['options'] as $option):
						$selected = '';
						if ($option == $default)
							$selected = ' selected="selected"'; 
							
							if($value['id'] == 'mytypo_fontfamily' ) {
								$fontstylestart = ' style="font-family:'.$option.'" ';
								
								$fontoptgrp = '<optgroup style="font-family:'.$option.'"" >';
								$fontoptgrp2 = '</optgroup>';
								$fontstyleend ='</span>';
							} else {
								$fontstylestart = '';
								$fontstyleend ='';
								$fontoptgrp = '';
								$fontoptgrp2 = '';
							}
							
							?>
							<?php echo $fontoptgrp; ?><option <?php echo $selected; ?> <?php echo $fontstylestart; ?>><?php echo $option ?></option><?php echo $fontoptgrp2; ?>
					<?php endforeach; ?>
					</select>
					
				</div>
			</div>
		<?php
		}
		
		/* Normal checkbox ("type" => "checkbox") */
		
		public function display_checkbox($value) {
			$rel = "";
			if (isset($value['display_checkbox_id']) && $value['display_checkbox_id'])
				$rel = " rel=".$value['display_checkbox_id'];
			else
				$rel = "";
		?>
			<div<?php echo $rel; ?> class="separator">
            <section>
				<div class="label">
					<label><?php echo $value['name']; ?></label></div><p class="description"><?php echo $value['desc']; ?></p>
			</section>
            	<div class="settings-content">
					<div class="premiumwd_image_preview">
						<?php if (isset($value['img_desc']) && $value['img_desc']): ?>
							<img src="<?php echo $value['img_desc']; ?>" />
						<?php endif; ?>
					</div>
					<?php
					$i = 0;
					foreach ($value['options'] as $box):
						$checked = '';
		
						if (get_option($value['id'][$i])) {
							if (get_option($value['id'][$i]) == 'true')
								$checked = ' checked="checked"';
							else
								$checked = '';
						} else {
							if ($value['default'][$i] == "checked")
								$checked = ' checked="checked"';
						} ?>
						<label for="<?php echo $value['id'][$i]; ?>">
							<input type="checkbox"<?php echo $checked; ?> name="<?php echo $value['id'][$i]; ?>" id="<?php echo $value['id'][$i]; ?>" />
							<?php echo $box; ?>
						</label>
						<?php
						$i++;
					endforeach; ?>

				</div>
			</div>
		<?php
		}
		
		/* Image checkbox ("type" => "checkbox_image") */
		
		public function display_checkbox_image($value) {
			$rel = "";
			if (isset($value['display_checkbox_id']) && $value['display_checkbox_id'])
				$rel = " rel=".$value['display_checkbox_id'];
			else
				$rel = "";
		?>
			<div<?php echo $rel; ?> class="separator">
            <section>
				<div class="label">
					<label><?php echo $value['name']; ?></label></div><p class="description"><?php echo $value['desc']; ?></p>
			</section>
            	<div class="settings-content">
					<div class="cOf">
						<?php
						
						$i = 0;
						foreach ($value['options'] as $box) :
							$checked = '';
							$class = '';
							$img_size = '';
						
							if (!empty($value['image_size'][$i]))
        $img_size = 'width="' . $value['image_size'][$i] . '"';
       elseif(empty($value['image_size'][$i]) && !empty($value['image_size'][0]))
								$img_size = 'width="' . $value['image_size'][0] . '"';
							else
								$img_size = 'width="120"';

							if (get_option($value['id'][$i])) {
								if (get_option($value['id'][$i]) == 'true') {
									$checked = ' checked="checked"';
									$class = ' premiumwd-img-selected';
								}
							} elseif ($value['default'][$i] == "checked") {
								$class = ' premiumwd-img-selected';
								$checked = ' checked="checked"';
							} ?>
							<label class="premiumwd-image-checkbox<?php echo $class; ?>" for="<?php echo $value['id'][$i]; ?>">
								<img <?php echo $img_size; ?> src="<?php echo $value['image_src'][$i]; ?>" alt="<?php echo $box ?>" />
								<input class="premiumwd-image-checkbox-b" type="checkbox"<?php echo $checked; ?> name="<?php echo $value['id'][$i]; ?>" id="<?php echo $value['id'][$i]; ?>" />
								<?php if ($value['show_labels'] == "true"): ?><p><?php echo $box; ?></p><?php endif; ?>
							</label>
							<?php
								$i++;
							endforeach;
						?>
						
					</div>
					
				</div>
			</div>
		<?php
		}
		
		/* Normal radio input ("type" => "radio") */
		
		public function display_radio($value) {
			
			$rel = "";
			if (isset($value['display_checkbox_id']) && $value['display_checkbox_id'])
				$rel = " rel=".$value['display_checkbox_id'];
			else
				$rel = "";
		?>
			<div<?php echo $rel; ?> class="separator">
            <section>
				<div class="label">
					<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label></div><p class="description"><?php echo $value['desc']; ?></p>
			</section>
            	<div class="settings-content">
					<div class="premiumwd_image_preview">
						<?php if (isset($value['img_desc']) && $value['img_desc']): ?>
							<img src="<?php echo $value['img_desc']; ?>" />
						<?php endif; ?>
					</div>
					<?php
						$i = 0;
						if (get_option($value['id']))
							$default = get_option($value['id']);
						else
							$default = $value['default'];
		
						foreach ($value['options'] as $option):
							$checked = '';
							if ($value['options'][$i] == $default) {
								$checked = ' checked="checked"';
							} ?>
						<label for="<?php echo $value['id'] . $i; ?>">
							<input type="radio" id="<?php echo $value['id'] . $i; ?>" data-gvalue="open" name="<?php echo $value['id']; ?>" value="<?php echo $value['options'][$i]; ?>" <?php echo $checked; ?> />
							<?php echo $option; ?>
						</label>
						<?php
							$i++;
						endforeach; ?>
				
					</div>
				</div>
		<?php
		}
		
		/* Image radio input ("type" => "radio_image") */
		
		public function display_radio_image($value) {
			$rel = "";
			if ($value['display_checkbox_id'])
				$rel = " rel=".$value['display_checkbox_id'];
			else
				$rel = "";
		?>
			<div<?php echo $rel; ?> class="separator">
				<section>
                <div class="label">
					<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
                    
				</div><p class="description"><?php echo $value['desc']; ?></p>
				</section>
                <div class="settings-content">
					<div class="cOf">
						<?php
							$i = 0;
							if (get_option($value['id']))
								$default = get_option($value['id']);
							else
								$default = $value['default'];
						
							foreach ($value['options'] as $option) :
								$class = '';
								$img_size = '';
								$checked = '';
		
								if (isset($value['image_size'][$i]))
									$img_size = 'width="' . $value['image_size'][$i] . '"';
								else if (!isset($value['image_size'][$i]) && isset($value['image_size'][0]))
									$img_size = 'width="' . $value['image_size'][0] . '"';
								else
									$img_size = 'width="120"';
				
								if ($value['options'][$i] == $default) {
									$checked = ' checked="checked"';
									$class = ' premiumwd-img-selected';
								} ?>
							<label class="premiumwd-image-radio<?php echo $class; ?>" for="<?php echo $value['id'] . $i; ?>">
								<img <?php echo $img_size; ?> src="<?php echo $value['image_src'][$i]; ?>" alt="<?php echo $box ?>" />
								<input class="premiumwd-image-radio-b" type="radio" id="<?php echo $value['id'] . $i; ?>" name="<?php echo $value['id']; ?>" value="<?php echo $value['options'][$i]; ?>" <?php echo $checked; ?> />
								<?php if ($value['show_labels'] == "true"): ?><p><?php echo $option; ?></p><?php endif; ?>
							</label>
							<?php
								$i++;
							 endforeach; ?>
						</div>
					
					</div>
				</div>
		<?php
		}
		
		/* Displays small Heading in tabs */
		
		public function display_small_heading($value) {
			$rel = "";
			if (isset($value['display_checkbox_id']) && $value['display_checkbox_id'])
				$rel = " rel=".$value['display_checkbox_id'];
			else
				$rel = "";
		?>
			<div<?php echo $rel; ?> class="separator <?php if ($value['title'] == 'Header') { echo 'header';} ?> <?php if ($value['name'] == 'blankline') { echo 'blankline';} ?>">
				<h4><?php echo $value['title']; ?></h4>
			</div>
		<?php
		}
		
		/* Hiding div start ("type" => "toggle_div_start" */
		
		public function display_toggle_div_start($value) {
			$rel = "";
			if (isset($value['display_checkbox_id']) && $value['display_checkbox_id'])
				$rel = " rel=".$value['display_checkbox_id'];
			else
				$rel = ""; ?>
			<div<?php echo $rel; ?>>
		<?php 
		}
		
		
		/* Hiding div end ("type" => "toggle_div_end" */
		
		public function display_toggle_div_end() {
		?>
		</div>                    
           <?php
        }


        /*         * *************************************
         * *************************************
         * ****                           ****** 
         * ****      Saving function      ******  
         * ****                           ******
         * *************************************
         * ************************************ */

        public function save_options() {

            if (isset($_POST['action']) && $_POST['action'] == "premiumwd_save_options") {
                foreach ($this->options as $value) {
                    $the_type = $value['type'];

                    if ($the_type == "heading" || $the_type == "section" || $the_type == "small_heading")
                        continue;

                    else if (isset($value['id']) && $the_type != "checkbox" && $the_type != "checkbox_image") {
                        update_option($value['id'], $_POST[$value['id']]);
                    } else if ($the_type == "checkbox" || $the_type == "checkbox_image") {
                        $i = 0;

                        foreach ($value['options'] as $box) {
                            $curr_id = $value['id'][$i];

                            if (isset($_POST[$curr_id]))
                                update_option($curr_id, 'true');

                            else
                                update_option($curr_id, 'false');
                            $i++;
                        }
                    }
                }
            }
        }

    }

}
?>