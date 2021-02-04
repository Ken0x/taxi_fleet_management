<?php
/**
 * Driving School Lite Theme Customizer
 * @package Driving School Lite
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

function driving_school_lite_customize_register( $wp_customize ) {	

	class Driving_School_Lite_WP_Customize_Range_Control extends WP_Customize_Control{
	    public $type = 'custom_range';
	    public function enqueue(){
	        wp_enqueue_script(
	            'cs-range-control',
	            false,
	            true
	        );
	    }
	    public function render_content(){?>
	        <label>
	            <?php if ( ! empty( $this->label )) : ?>
	                <span class="customize-control-title"><?php echo esc_html($this->label); ?></span>
	            <?php endif; ?>
	            <div class="cs-range-value"><?php echo esc_attr($this->value()); ?></div>
	            <input data-input-type="range" type="range" <?php $this->input_attrs(); ?> value="<?php echo esc_attr($this->value()); ?>" <?php $this->link(); ?> />
	            <?php if ( ! empty( $this->description )) : ?>
	                <span class="description customize-control-description"><?php echo esc_html($this->description); ?></span>
	            <?php endif; ?>
	        </label>
        <?php }
	}	

	//add home page setting pannel
	$wp_customize->add_panel( 'driving_school_lite_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Theme Settings', 'driving-school-lite' ),
	    'description' => __( 'Description of what this panel does.', 'driving-school-lite' ),
	) );

	// Add the Theme Color Option section.
	$wp_customize->add_section( 'driving_school_lite_theme_color_option', array( 
		'panel' => 'driving_school_lite_panel_id', 
		'title' => esc_html__( 'Global Color Settings', 'driving-school-lite' ) 
	) );

  	$wp_customize->add_setting( 'driving_school_lite_first_theme_color', array(
	    'default' => '#ffc61a',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'driving_school_lite_first_theme_color', array(
  		'label' => 'Color Option 1',
	    'description' => __('One can change complete theme global color settings on just one click.', 'driving-school-lite'),
	    'section' => 'driving_school_lite_theme_color_option',
	    'settings' => 'driving_school_lite_first_theme_color',
  	)));

	// font array
	$font_array = array(
        '' => 'No Fonts',
        'Abril Fatface' => 'Abril Fatface',
        'Acme' => 'Acme',
        'Anton' => 'Anton',
        'Architects Daughter' => 'Architects Daughter',
        'Arimo' => 'Arimo',
        'Arsenal' => 'Arsenal', 
        'Arvo' => 'Arvo',
        'Alegreya' => 'Alegreya',
        'Alfa Slab One' => 'Alfa Slab One',
        'Averia Serif Libre' => 'Averia Serif Libre',
        'Bangers' => 'Bangers', 
        'Boogaloo' => 'Boogaloo',
        'Bad Script' => 'Bad Script',
        'Bitter' => 'Bitter',
        'Bree Serif' => 'Bree Serif',
        'BenchNine' => 'BenchNine', 
        'Cabin' => 'Cabin', 
        'Cardo' => 'Cardo',
        'Courgette' => 'Courgette',
        'Cherry Swash' => 'Cherry Swash',
        'Cormorant Garamond' => 'Cormorant Garamond',
        'Crimson Text' => 'Crimson Text',
        'Cuprum' => 'Cuprum', 
        'Cookie' => 'Cookie', 
        'Chewy' => 'Chewy', 
        'Days One' => 'Days One', 
        'Dosis' => 'Dosis',
        'Droid Sans' => 'Droid Sans',
        'Economica' => 'Economica',
        'Fredoka One' => 'Fredoka One',
        'Fjalla One' => 'Fjalla One',
        'Francois One' => 'Francois One',
        'Frank Ruhl Libre' => 'Frank Ruhl Libre',
        'Gloria Hallelujah' => 'Gloria Hallelujah',
        'Great Vibes' => 'Great Vibes',
        'Handlee' => 'Handlee', 
        'Hammersmith One' => 'Hammersmith One',
        'Inconsolata' => 'Inconsolata', 
        'Indie Flower' => 'Indie Flower', 
        'IM Fell English SC' => 'IM Fell English SC', 
        'Julius Sans One' => 'Julius Sans One',
        'Josefin Slab' => 'Josefin Slab', 
        'Josefin Sans' => 'Josefin Sans', 
        'Kanit' => 'Kanit', 
        'Lobster' => 'Lobster', 
        'Lato' => 'Lato',
        'Lora' => 'Lora', 
        'Libre Baskerville' =>'Libre Baskerville',
        'Lobster Two' => 'Lobster Two',
        'Merriweather' =>'Merriweather', 
        'Monda' => 'Monda',
        'Montserrat' => 'Montserrat',
        'Muli' => 'Muli', 
        'Marck Script' => 'Marck Script',
        'Noto Serif' => 'Noto Serif',
        'Open Sans' => 'Open Sans', 
        'Overpass' => 'Overpass',
        'Overpass Mono' => 'Overpass Mono',
        'Oxygen' => 'Oxygen', 
        'Orbitron' => 'Orbitron', 
        'Patua One' => 'Patua One', 
        'Pacifico' => 'Pacifico',
        'Padauk' => 'Padauk', 
        'Playball' => 'Playball',
        'Playfair Display' => 'Playfair Display', 
        'PT Sans' => 'PT Sans',
        'Philosopher' => 'Philosopher',
        'Permanent Marker' => 'Permanent Marker',
        'Poiret One' => 'Poiret One', 
        'Quicksand' => 'Quicksand', 
        'Quattrocento Sans' => 'Quattrocento Sans', 
        'Raleway' => 'Raleway', 
        'Rubik' => 'Rubik', 
        'Rokkitt' => 'Rokkitt', 
        'Russo One' => 'Russo One', 
        'Righteous' => 'Righteous', 
        'Slabo' => 'Slabo', 
        'Source Sans Pro' => 'Source Sans Pro', 
        'Shadows Into Light Two' =>'Shadows Into Light Two', 
        'Shadows Into Light' => 'Shadows Into Light', 
        'Sacramento' => 'Sacramento', 
        'Shrikhand' => 'Shrikhand', 
        'Tangerine' => 'Tangerine',
        'Ubuntu' => 'Ubuntu', 
        'VT323' => 'VT323', 
        'Varela Round' => 'Varela Round', 
        'Vampiro One' => 'Vampiro One',
        'Vollkorn' => 'Vollkorn',
        'Volkhov' => 'Volkhov', 
        'Yanone Kaffeesatz' => 'Yanone Kaffeesatz',
    );

	//Typography
	$wp_customize->add_section( 'driving_school_lite_typography', array(
    	'title'      => __( 'Typography', 'driving-school-lite' ),
		'priority'   => 30,
		'panel' => 'driving_school_lite_panel_id'
	) );
	
	// This is Paragraph Color picker setting
	$wp_customize->add_setting( 'driving_school_lite_paragraph_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'driving_school_lite_paragraph_color', array(
		'label' => __('Paragraph Color', 'driving-school-lite'),
		'section' => 'driving_school_lite_typography',
		'settings' => 'driving_school_lite_paragraph_color',
	)));

	//This is Paragraph FontFamily picker setting
	$wp_customize->add_setting('driving_school_lite_paragraph_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'driving_school_lite_sanitize_choices'
	));
	$wp_customize->add_control(
	    'driving_school_lite_paragraph_font_family', array(
	    'section'  => 'driving_school_lite_typography',
	    'label'    => __( 'Paragraph Fonts','driving-school-lite'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting('driving_school_lite_paragraph_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('driving_school_lite_paragraph_font_size',array(
		'label'	=> __('Paragraph Font Size','driving-school-lite'),
		'section'	=> 'driving_school_lite_typography',
		'setting'	=> 'driving_school_lite_paragraph_font_size',
		'type'	=> 'text'
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'driving_school_lite_atag_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'driving_school_lite_atag_color', array(
		'label' => __('"a" Tag Color', 'driving-school-lite'),
		'section' => 'driving_school_lite_typography',
		'settings' => 'driving_school_lite_atag_color',
	)));

	//This is "a" Tag FontFamily picker setting
	$wp_customize->add_setting('driving_school_lite_atag_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'driving_school_lite_sanitize_choices'
	));
	$wp_customize->add_control(
	    'driving_school_lite_atag_font_family', array(
	    'section'  => 'driving_school_lite_typography',
	    'label'    => __( '"a" Tag Fonts','driving-school-lite'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'driving_school_lite_li_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'driving_school_lite_li_color', array(
		'label' => __('"li" Tag Color', 'driving-school-lite'),
		'section' => 'driving_school_lite_typography',
		'settings' => 'driving_school_lite_li_color',
	)));

	//This is "li" Tag FontFamily picker setting
	$wp_customize->add_setting('driving_school_lite_li_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'driving_school_lite_sanitize_choices'
	));
	$wp_customize->add_control(
	    'driving_school_lite_li_font_family', array(
	    'section'  => 'driving_school_lite_typography',
	    'label'    => __( '"li" Tag Fonts','driving-school-lite'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	// This is H1 Color picker setting
	$wp_customize->add_setting( 'driving_school_lite_h1_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'driving_school_lite_h1_color', array(
		'label' => __('H1 Color', 'driving-school-lite'),
		'section' => 'driving_school_lite_typography',
		'settings' => 'driving_school_lite_h1_color',
	)));

	//This is H1 FontFamily picker setting
	$wp_customize->add_setting('driving_school_lite_h1_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'driving_school_lite_sanitize_choices'
	));
	$wp_customize->add_control(
	    'driving_school_lite_h1_font_family', array(
	    'section'  => 'driving_school_lite_typography',
	    'label'    => __( 'H1 Fonts','driving-school-lite'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H1 FontSize setting
	$wp_customize->add_setting('driving_school_lite_h1_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('driving_school_lite_h1_font_size',array(
		'label'	=> __('H1 Font Size','driving-school-lite'),
		'section'	=> 'driving_school_lite_typography',
		'setting'	=> 'driving_school_lite_h1_font_size',
		'type'	=> 'text'
	));

	// This is H2 Color picker setting
	$wp_customize->add_setting( 'driving_school_lite_h2_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'driving_school_lite_h2_color', array(
		'label' => __('h2 Color', 'driving-school-lite'),
		'section' => 'driving_school_lite_typography',
		'settings' => 'driving_school_lite_h2_color',
	)));

	//This is H2 FontFamily picker setting
	$wp_customize->add_setting('driving_school_lite_h2_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'driving_school_lite_sanitize_choices'
	));
	$wp_customize->add_control(
	    'driving_school_lite_h2_font_family', array(
	    'section'  => 'driving_school_lite_typography',
	    'label'    => __( 'h2 Fonts','driving-school-lite'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H2 FontSize setting
	$wp_customize->add_setting('driving_school_lite_h2_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('driving_school_lite_h2_font_size',array(
		'label'	=> __('h2 Font Size','driving-school-lite'),
		'section'	=> 'driving_school_lite_typography',
		'setting'	=> 'driving_school_lite_h2_font_size',
		'type'	=> 'text'
	));

	// This is H3 Color picker setting
	$wp_customize->add_setting( 'driving_school_lite_h3_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'driving_school_lite_h3_color', array(
		'label' => __('h3 Color', 'driving-school-lite'),
		'section' => 'driving_school_lite_typography',
		'settings' => 'driving_school_lite_h3_color',
	)));

	//This is H3 FontFamily picker setting
	$wp_customize->add_setting('driving_school_lite_h3_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'driving_school_lite_sanitize_choices'
	));
	$wp_customize->add_control(
	    'driving_school_lite_h3_font_family', array(
	    'section'  => 'driving_school_lite_typography',
	    'label'    => __( 'h3 Fonts','driving-school-lite'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H3 FontSize setting
	$wp_customize->add_setting('driving_school_lite_h3_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('driving_school_lite_h3_font_size',array(
		'label'	=> __('h3 Font Size','driving-school-lite'),
		'section'	=> 'driving_school_lite_typography',
		'setting'	=> 'driving_school_lite_h3_font_size',
		'type'	=> 'text'
	));

	// This is H4 Color picker setting
	$wp_customize->add_setting( 'driving_school_lite_h4_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'driving_school_lite_h4_color', array(
		'label' => __('h4 Color', 'driving-school-lite'),
		'section' => 'driving_school_lite_typography',
		'settings' => 'driving_school_lite_h4_color',
	)));

	//This is H4 FontFamily picker setting
	$wp_customize->add_setting('driving_school_lite_h4_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'driving_school_lite_sanitize_choices'
	));
	$wp_customize->add_control(
	    'driving_school_lite_h4_font_family', array(
	    'section'  => 'driving_school_lite_typography',
	    'label'    => __( 'h4 Fonts','driving-school-lite'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H4 FontSize setting
	$wp_customize->add_setting('driving_school_lite_h4_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('driving_school_lite_h4_font_size',array(
		'label'	=> __('h4 Font Size','driving-school-lite'),
		'section'	=> 'driving_school_lite_typography',
		'setting'	=> 'driving_school_lite_h4_font_size',
		'type'	=> 'text'
	));

	// This is H5 Color picker setting
	$wp_customize->add_setting( 'driving_school_lite_h5_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'driving_school_lite_h5_color', array(
		'label' => __('h5 Color', 'driving-school-lite'),
		'section' => 'driving_school_lite_typography',
		'settings' => 'driving_school_lite_h5_color',
	)));

	//This is H5 FontFamily picker setting
	$wp_customize->add_setting('driving_school_lite_h5_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'driving_school_lite_sanitize_choices'
	));
	$wp_customize->add_control(
	    'driving_school_lite_h5_font_family', array(
	    'section'  => 'driving_school_lite_typography',
	    'label'    => __( 'h5 Fonts','driving-school-lite'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H5 FontSize setting
	$wp_customize->add_setting('driving_school_lite_h5_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('driving_school_lite_h5_font_size',array(
		'label'	=> __('h5 Font Size','driving-school-lite'),
		'section'	=> 'driving_school_lite_typography',
		'setting'	=> 'driving_school_lite_h5_font_size',
		'type'	=> 'text'
	));

	// This is H6 Color picker setting
	$wp_customize->add_setting( 'driving_school_lite_h6_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'driving_school_lite_h6_color', array(
		'label' => __('h6 Color', 'driving-school-lite'),
		'section' => 'driving_school_lite_typography',
		'settings' => 'driving_school_lite_h6_color',
	)));

	//This is H6 FontFamily picker setting
	$wp_customize->add_setting('driving_school_lite_h6_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'driving_school_lite_sanitize_choices'
	));
	$wp_customize->add_control(
	    'driving_school_lite_h6_font_family', array(
	    'section'  => 'driving_school_lite_typography',
	    'label'    => __( 'h6 Fonts','driving-school-lite'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H6 FontSize setting
	$wp_customize->add_setting('driving_school_lite_h6_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('driving_school_lite_h6_font_size',array(
		'label'	=> __('h6 Font Size','driving-school-lite'),
		'section'	=> 'driving_school_lite_typography',
		'setting'	=> 'driving_school_lite_h6_font_size',
		'type'	=> 'text'
	));

	//Topbar section
	$wp_customize->add_section('driving_school_lite_topbar_icon',array(
		'title'	=> __('Topbar Section','driving-school-lite'),
		'description'	=> __('Add Header Content here','driving-school-lite'),
		'priority'	=> null,
		'panel' => 'driving_school_lite_panel_id',
	));

	$wp_customize->add_setting('driving_school_lite_top_header',array(
       'default' => true,
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('driving_school_lite_top_header',array(
       'type' => 'checkbox',
       'label' => __('Enable Top Header','driving-school-lite'),
       'section' => 'driving_school_lite_topbar_icon'
    ));

    $wp_customize->add_setting('driving_school_lite_sticky_header',array(
       'default' => '',
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('driving_school_lite_sticky_header',array(
       'type' => 'checkbox',
       'label' => __('Stick header on Desktop','driving-school-lite'),
       'section' => 'driving_school_lite_topbar_icon'
    ));

	$wp_customize->add_setting('driving_school_lite_location',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('driving_school_lite_location',array(
		'label'	=> __('Add Location','driving-school-lite'),
		'section'	=> 'driving_school_lite_topbar_icon',
		'setting'	=> 'driving_school_lite_location',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('driving_school_lite_facebook',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('driving_school_lite_facebook',array(
		'label'	=> __('Add Facebook link','driving-school-lite'),
		'section'	=> 'driving_school_lite_topbar_icon',
		'setting'	=> 'driving_school_lite_facebook',
		'type'		=> 'url'
	));

	$wp_customize->add_setting('driving_school_lite_twitter',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('driving_school_lite_twitter',array(
		'label'	=> __('Add Twitter link','driving-school-lite'),
		'section'	=> 'driving_school_lite_topbar_icon',
		'setting'	=> 'driving_school_lite_twitter',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('driving_school_lite_youtube',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('driving_school_lite_youtube',array(
		'label'	=> __('Add Youtube link','driving-school-lite'),
		'section'	=> 'driving_school_lite_topbar_icon',
		'setting'	=> 'driving_school_lite_youtube',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('driving_school_lite_linkedin',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('driving_school_lite_linkedin',array(
		'label'	=> __('Add Linkedin link','driving-school-lite'),
		'section'	=> 'driving_school_lite_topbar_icon',
		'setting'	=> 'driving_school_lite_linkedin',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('driving_school_lite_button_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('driving_school_lite_button_text',array(
		'label'	=> __('Button text','driving-school-lite'),
		'section'	=> 'driving_school_lite_topbar_icon',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('driving_school_lite_button_link',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('driving_school_lite_button_link',array(
		'label'	=> __('Add Button Link','driving-school-lite'),
		'section'	=> 'driving_school_lite_topbar_icon',
		'setting'	=> 'driving_school_lite_button_link',
		'type'		=> 'url'
	));

	//Contact Details
	$wp_customize->add_section( 'driving_school_lite_contact_section' , array(
    	'title'      => __( 'Contact Details', 'driving-school-lite' ),
		'priority'   => null,
		'panel' => 'driving_school_lite_panel_id'
	) );

	$wp_customize->add_setting('driving_school_lite_call_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('driving_school_lite_call_text',array(
		'label'	=> __('Call Text','driving-school-lite'),
		'section'	=> 'driving_school_lite_contact_section',
		'setting'	=> 'driving_school_lite_call_text',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('driving_school_lite_call_number',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('driving_school_lite_call_number',array(
		'label'	=> __('Add Contact Number','driving-school-lite'),
		'section'	=> 'driving_school_lite_contact_section',
		'setting'	=> 'driving_school_lite_call_number',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('driving_school_lite_email_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('driving_school_lite_email_text',array(
		'label'	=> __('Add Email Text','driving-school-lite'),
		'section'	=> 'driving_school_lite_contact_section',
		'setting'	=> 'driving_school_lite_email_text',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('driving_school_lite_email',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('driving_school_lite_email',array(
		'label'	=> __('Add Email Address','driving-school-lite'),
		'section'	=> 'driving_school_lite_contact_section',
		'setting'	=> 'driving_school_lite_email',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('driving_school_lite_timing_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('driving_school_lite_timing_text',array(
		'label'	=> __('Add Timing Text','driving-school-lite'),
		'section'	=> 'driving_school_lite_contact_section',
		'setting'	=> 'driving_school_lite_timing_text',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('driving_school_lite_timing',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('driving_school_lite_timing',array(
		'label'	=> __('Add Time','driving-school-lite'),
		'section'	=> 'driving_school_lite_contact_section',
		'setting'	=> 'driving_school_lite_timing',
		'type'		=> 'text'
	));

	//home page slider
	$wp_customize->add_section( 'driving_school_lite_slider_section' , array(
    	'title'      => __( 'Slider Settings', 'driving-school-lite' ),
		'priority'   => null,
		'panel' => 'driving_school_lite_panel_id'
	) );

	$wp_customize->add_setting('driving_school_lite_slider_hide',array(
       'default' => 'false',
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('driving_school_lite_slider_hide',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide slider','driving-school-lite'),
       'section' => 'driving_school_lite_slider_section',
    ));

    $wp_customize->add_setting('driving_school_lite_slider_indicator',array(
        'default' => true,
        'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('driving_school_lite_slider_indicator',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Slider Indicators','driving-school-lite'),
      	'section' => 'driving_school_lite_slider_section'
	));

	$wp_customize->add_setting('driving_school_lite_slider_title',array(
        'default' => true,
        'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('driving_school_lite_slider_title',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Slider Title','driving-school-lite'),
      	'section' => 'driving_school_lite_slider_section'
	));

	$wp_customize->add_setting('driving_school_lite_slider_content',array(
        'default' => true,
        'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('driving_school_lite_slider_content',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Slider Content','driving-school-lite'),
      	'section' => 'driving_school_lite_slider_section'
	));

	$wp_customize->add_setting('driving_school_lite_slider_button',array(
        'default' => true,
        'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('driving_school_lite_slider_button',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Slider Button','driving-school-lite'),
      	'section' => 'driving_school_lite_slider_section'
	));

	for ( $count = 1; $count <= 4; $count++ ) {

		// Add color scheme setting and control.
		$wp_customize->add_setting( 'driving_school_lite_slider_page' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'driving_school_lite_sanitize_dropdown_pages'
		) );
		$wp_customize->add_control( 'driving_school_lite_slider_page' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'driving-school-lite' ),
			'section'  => 'driving_school_lite_slider_section',
			'type'     => 'dropdown-pages'
		) );
	}

	//content Alignment
    $wp_customize->add_setting('driving_school_lite_slider_alignment_option',array(
    'default' => __('Left Align','driving-school-lite'),
        'sanitize_callback' => 'driving_school_lite_sanitize_choices'
	));
	$wp_customize->add_control('driving_school_lite_slider_alignment_option',array(
        'type' => 'radio',
        'label' => __('Slider Content Alignment','driving-school-lite'),
        'section' => 'driving_school_lite_slider_section',
        'choices' => array(
            'Center Align' => __('Center Align','driving-school-lite'),
            'Left Align' => __('Left Align','driving-school-lite'),
            'Right Align' => __('Right Align','driving-school-lite'),
        ),
	) );

    //Slider excerpt
	$wp_customize->add_setting( 'driving_school_lite_slider_excerpt_number', array(
		'default'              => 25,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'absint',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'driving_school_lite_slider_excerpt_number', array(
		'label'       => esc_html__( 'Slider Excerpt length','driving-school-lite' ),
		'section'     => 'driving_school_lite_slider_section',
		'type'        => 'number',
		'settings'    => 'driving_school_lite_slider_excerpt_number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'driving_school_lite_slider_button_label', array(
		'default' => __('BOOK LESSON','driving-school-lite' ),
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'driving_school_lite_slider_button_label', array(
		'label' => esc_html__( 'Slider Button Label','driving-school-lite' ),
		'section'     => 'driving_school_lite_slider_section',
		'type'        => 'text',
		'settings'    => 'driving_school_lite_slider_button_label'
	) );

	//Our Features Section
	$wp_customize->add_section('driving_school_lite_features',array(
		'title'	=> __('Our Features','driving-school-lite'),
		'description'	=> __('Add our features sections below.','driving-school-lite'),
		'panel' => 'driving_school_lite_panel_id',
	));

	$wp_customize->add_setting('driving_school_lite_page_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('driving_school_lite_page_title',array(
		'label'	=> __('Section Title','driving-school-lite'),
		'section'	=> 'driving_school_lite_features',
		'type'		=> 'text'
	));

	// category left
	$categories = get_categories();
	$cats = array();
	$i = 0;
	$cat_post[]= 'select';
	foreach($categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cat_post[$category->slug] = $category->name;
	}

    $wp_customize->add_setting( 'driving_school_lite_category', array(
      'default'           => '',
      'sanitize_callback' => 'driving_school_lite_sanitize_choices'
    ));
    $wp_customize->add_control('driving_school_lite_category',array(
		'type'    => 'select',
		'choices' => $cat_post,
		'label' => __('Select Category to display Latest Post','driving-school-lite'),
		'section' => 'driving_school_lite_features',
	));

	//layout setting
	$wp_customize->add_section( 'driving_school_lite_theme_layout', array(
    	'title'      => __( 'Blog Settings', 'driving-school-lite' ),
		'priority'   => null,
		'panel' => 'driving_school_lite_panel_id'
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('driving_school_lite_layout',array(
        'default' => __( 'Right Sidebar', 'driving-school-lite' ),
        'sanitize_callback' => 'driving_school_lite_sanitize_choices'	        
	) );
	$wp_customize->add_control('driving_school_lite_layout',array(
        'type' => 'radio',
        'label' => __( 'Blog Layout', 'driving-school-lite' ),
        'section' => 'driving_school_lite_theme_layout',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','driving-school-lite'),
            'Right Sidebar' => __('Right Sidebar','driving-school-lite'),
            'One Column' => __('One Column','driving-school-lite'),
            'Three Columns' => __('Three Columns','driving-school-lite'),
            'Four Columns' => __('Four Columns','driving-school-lite'),
            'Grid Layout' => __('Grid Layout','driving-school-lite')
        ),
	)   );

    $wp_customize->add_setting('driving_school_lite_metafields_date',array(
       'default' => 'true',
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('driving_school_lite_metafields_date',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Date ','driving-school-lite'),
       'section' => 'driving_school_lite_theme_layout'
    ));

    $wp_customize->add_setting('driving_school_lite_metafields_author',array(
       'default' => 'true',
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('driving_school_lite_metafields_author',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Author','driving-school-lite'),
       'section' => 'driving_school_lite_theme_layout'
    ));

    $wp_customize->add_setting('driving_school_lite_metafields_comment',array(
       'default' => 'true',
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('driving_school_lite_metafields_comment',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Comments','driving-school-lite'),
       'section' => 'driving_school_lite_theme_layout'
    ));

    $wp_customize->add_setting('driving_school_lite_blog_post_content',array(
    	'default' => __('Excerpt Content','driving-school-lite'),
        'sanitize_callback' => 'driving_school_lite_sanitize_choices'
	));
	$wp_customize->add_control('driving_school_lite_blog_post_content',array(
        'type' => 'radio',
        'label' => __('Blog Post Content Type','driving-school-lite'),
        'section' => 'driving_school_lite_theme_layout',
        'choices' => array(
            'No Content' => __('No Content','driving-school-lite'),
            'Full Content' => __('Full Content','driving-school-lite'),
            'Excerpt Content' => __('Excerpt Content','driving-school-lite'),
        ),
	) );

    $wp_customize->add_setting( 'driving_school_lite_post_excerpt_number', array(
		'default'              => 20,
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'driving_school_lite_post_excerpt_number', array(
		'label'       => esc_html__( 'Blog Post Excerpt Number (Max 50)','driving-school-lite' ),
		'section'     => 'driving_school_lite_theme_layout',
		'type'        => 'number',
		'settings'    => 'driving_school_lite_post_excerpt_number',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
		'active_callback' => 'driving_school_lite_excerpt_enabled'
	) );

	$wp_customize->add_setting( 'driving_school_lite_button_excerpt_suffix', array(
		'default'   => '...',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'driving_school_lite_button_excerpt_suffix', array(
		'label'       => esc_html__( 'Post Excerpt Suffix','driving-school-lite' ),
		'section'     => 'driving_school_lite_theme_layout',
		'type'        => 'text',
		'settings'    => 'driving_school_lite_button_excerpt_suffix',
		'active_callback' => 'driving_school_lite_excerpt_enabled'
	) );

	$wp_customize->add_setting('driving_school_lite_related_posts',array(
       'default' => true,
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('driving_school_lite_related_posts',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Related Posts','driving-school-lite'),
       'section' => 'driving_school_lite_theme_layout'
    ));

    $wp_customize->add_setting('driving_school_lite_related_posts_title',array(
       'default' => __('You May Also Like','driving-school-lite'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('driving_school_lite_related_posts_title',array(
       'type' => 'text',
       'label' => __('Related Posts Title','driving-school-lite'),
       'section' => 'driving_school_lite_theme_layout'
    ));

    $wp_customize->add_setting( 'driving_school_lite_related_post_count', array(
		'default' => 3,
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'driving_school_lite_related_post_count', array(
		'label' => esc_html__( 'Related Posts Count','driving-school-lite' ),
		'section' => 'driving_school_lite_theme_layout',
		'type' => 'number',
		'settings' => 'driving_school_lite_related_post_count',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 6,
		),
	) );

    $wp_customize->add_setting( 'driving_school_lite_post_shown_by', array(
        'default' => 'categories',
        'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control( 'driving_school_lite_post_shown_by', array(
        'section' => 'driving_school_lite_theme_layout',
        'type' => 'radio',
        'label' => __( 'Related Posts must be shown:', 'driving-school-lite' ),
        'choices'		=> array(
            'categories'  => __('By Categories', 'driving-school-lite'),
            'tags' => __( 'By Tags', 'driving-school-lite' ),
    )));

	// Button option
	$wp_customize->add_section( 'driving_school_lite_button_options', array(
		'title' =>  __( 'Button Options', 'driving-school-lite' ),
		'panel' => 'driving_school_lite_panel_id',
	));

    $wp_customize->add_setting( 'driving_school_lite_blog_button_text', array(
		'default'   => 'Read Full',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'driving_school_lite_blog_button_text', array(
		'label'       => esc_html__( 'Blog Post Button Label','driving-school-lite' ),
		'section'     => 'driving_school_lite_button_options',
		'type'        => 'text',
		'settings'    => 'driving_school_lite_blog_button_text'
	) );

	$wp_customize->add_setting('driving_school_lite_button_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('driving_school_lite_button_padding',array(
		'label'	=> esc_html__('Button Padding','driving-school-lite'),
		'section'=> 'driving_school_lite_button_options',
		'active_callback' => 'driving_school_lite_button_enabled'
	));

	$wp_customize->add_setting('driving_school_lite_top_button_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('driving_school_lite_top_button_padding',array(
		'label'	=> __('Top','driving-school-lite'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'driving_school_lite_button_options',
		'type'=> 'number',
		'active_callback' => 'driving_school_lite_button_enabled'
	));

	$wp_customize->add_setting('driving_school_lite_bottom_button_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('driving_school_lite_bottom_button_padding',array(
		'label'	=> __('Bottom','driving-school-lite'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'driving_school_lite_button_options',
		'type'=> 'number',
		'active_callback' => 'driving_school_lite_button_enabled'
	));

	$wp_customize->add_setting('driving_school_lite_left_button_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('driving_school_lite_left_button_padding',array(
		'label'	=> __('Left','driving-school-lite'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'driving_school_lite_button_options',
		'type'=> 'number',
		'active_callback' => 'driving_school_lite_button_enabled'
	));

	$wp_customize->add_setting('driving_school_lite_right_button_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('driving_school_lite_right_button_padding',array(
		'label'	=> __('Right','driving-school-lite'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'driving_school_lite_button_options',
		'type'=> 'number',
		'active_callback' => 'driving_school_lite_button_enabled'
	));

	$wp_customize->add_setting( 'driving_school_lite_button_border_radius', array(
		'default'=> 0,
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( new Driving_School_Lite_WP_Customize_Range_Control( $wp_customize, 'driving_school_lite_button_border_radius', array(
            'label'  => __('Border Radius','driving-school-lite'),
            'section'  => 'driving_school_lite_button_options',
            'description' => __('Measurement is in pixel.','driving-school-lite'),
            'input_attrs' => array(
                'min' => 0,
                'max' => 50,
            ),
			'active_callback' => 'driving_school_lite_button_enabled'
    )));

    //Advance Options
	$wp_customize->add_section( 'driving_school_lite_advance_options', array(
    	'title' => __( 'Advance Options', 'driving-school-lite' ),
		'priority'   => null,
		'panel' => 'driving_school_lite_panel_id'
	) );

	$wp_customize->add_setting('driving_school_lite_preloader',array(
       'default' => 'true',
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('driving_school_lite_preloader',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Preloader','driving-school-lite'),
       'section' => 'driving_school_lite_advance_options'
    ));

    $wp_customize->add_setting( 'driving_school_lite_preloader_color', array(
	    'default' => '#333333',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'driving_school_lite_preloader_color', array(
  		'label' => __('Preloader Color', 'driving-school-lite'),
	    'section' => 'driving_school_lite_advance_options',
	    'settings' => 'driving_school_lite_preloader_color',
  	)));

  	$wp_customize->add_setting( 'driving_school_lite_preloader_bg_color', array(
	    'default' => '#ffffff',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'driving_school_lite_preloader_bg_color', array(
  		'label' => __('Preloader Background Color', 'driving-school-lite'),
	    'section' => 'driving_school_lite_advance_options',
	    'settings' => 'driving_school_lite_preloader_bg_color',
  	)));

	$wp_customize->add_setting('driving_school_lite_theme_layout_options',array(
        'default' => __('Default Theme','driving-school-lite'),
        'sanitize_callback' => 'driving_school_lite_sanitize_choices'
	));
	$wp_customize->add_control('driving_school_lite_theme_layout_options',array(
        'type' => 'radio',
        'label' => __('Theme Layout','driving-school-lite'),
        'section' => 'driving_school_lite_advance_options',
        'choices' => array(
            'Default Theme' => __('Default Theme','driving-school-lite'),
            'Container Theme' => __('Container Theme','driving-school-lite'),
            'Box Container Theme' => __('Box Container Theme','driving-school-lite'),
        ),
	) );

	//404 Page Option
	$wp_customize->add_section('driving_school_lite_404_settings',array(
		'title'	=> __('404 Settings','driving-school-lite'),
		'priority'	=> null,
		'panel' => 'driving_school_lite_panel_id',
	));

	$wp_customize->add_setting('driving_school_lite_404_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('driving_school_lite_404_title',array(
		'label'	=> __('404 Title','driving-school-lite'),
		'section'	=> 'driving_school_lite_404_settings',
		'type'		=> 'text'
	));	

	$wp_customize->add_setting('driving_school_lite_404_button_label',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('driving_school_lite_404_button_label',array(
		'label'	=> __('404 button Label','driving-school-lite'),
		'section'	=> 'driving_school_lite_404_settings',
		'type'		=> 'text'
	));	

	//footer text
	$wp_customize->add_section('driving_school_lite_footer_section',array(
		'title'	=> __('Footer Section','driving-school-lite'),
		'panel' => 'driving_school_lite_panel_id'
	));

	$wp_customize->add_setting('driving_school_lite_hide_scroll',array(
        'default' => 'true',
        'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('driving_school_lite_hide_scroll',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Back To Top','driving-school-lite'),
      	'section' => 'driving_school_lite_footer_section',
	));

	$wp_customize->add_setting('driving_school_lite_back_to_top',array(
        'default' => __('Right','driving-school-lite'),
        'sanitize_callback' => 'driving_school_lite_sanitize_choices'
	));
	$wp_customize->add_control('driving_school_lite_back_to_top',array(
        'type' => 'radio',
        'label' => __('Back to Top Alignment','driving-school-lite'),
        'section' => 'driving_school_lite_footer_section',
        'choices' => array(
            'Left' => __('Left','driving-school-lite'),
            'Right' => __('Right','driving-school-lite'),
            'Center' => __('Center','driving-school-lite'),
        ),
	) );

	$wp_customize->add_setting('driving_school_lite_footer_widget',array(
        'default'           => '4',
        'sanitize_callback' => 'driving_school_lite_sanitize_choices',
    ));
    $wp_customize->add_control('driving_school_lite_footer_widget',array(
        'type'        => 'radio',
        'label'       => __('No. of Footer columns', 'driving-school-lite'),
        'section'     => 'driving_school_lite_footer_section',
        'description' => __('Select the number of footer columns and add your widgets in the footer.', 'driving-school-lite'),
        'choices' => array(
            '1'     => __('One column', 'driving-school-lite'),
            '2'     => __('Two columns', 'driving-school-lite'),
            '3'     => __('Three columns', 'driving-school-lite'),
            '4'     => __('Four columns', 'driving-school-lite')
        ),
    )); 

    $wp_customize->add_setting('driving_school_lite_copyright_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('driving_school_lite_copyright_padding',array(
		'label'	=> esc_html__('Copyright Padding','driving-school-lite'),
		'section'=> 'driving_school_lite_footer_section',
	));

    $wp_customize->add_setting('driving_school_lite_top_copyright_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('driving_school_lite_top_copyright_padding',array(
		'description'	=> __('Top','driving-school-lite'),
		'input_attrs' => array(
            'step' => 1,
			'min' => 0,
			'max' => 50,
        ),
		'section'=> 'driving_school_lite_footer_section',
		'type'=> 'number'
	));

	$wp_customize->add_setting('driving_school_lite_bottom_copyright_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('driving_school_lite_bottom_copyright_padding',array(
		'description'	=> __('Bottom','driving-school-lite'),
		'input_attrs' => array(
            'step' => 1,
			'min' => 0,
			'max' => 50,
        ),
		'section'=> 'driving_school_lite_footer_section',
		'type'=> 'number'
	));

	$wp_customize->add_setting('driving_school_lite_copyright_alignment',array(
        'default' => 'center',
        'sanitize_callback' => 'driving_school_lite_sanitize_choices'
	));
	$wp_customize->add_control('driving_school_lite_copyright_alignment',array(
        'type' => 'radio',
        'label' => __('Copyright Alignment','driving-school-lite'),
        'section' => 'driving_school_lite_footer_section',
        'choices' => array(
            'left' => __('Left','driving-school-lite'),
            'right' => __('Right','driving-school-lite'),
            'center' => __('Center','driving-school-lite'),
        ),
	) );

	$wp_customize->add_setting( 'driving_school_lite_copyright_font_size', array(
		'default'=> '15',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( new Driving_School_Lite_WP_Customize_Range_Control( $wp_customize, 'driving_school_lite_copyright_font_size', array(
            'label'  => __('Copyright Font Size','driving-school-lite'),
            'section'  => 'driving_school_lite_footer_section',
            'description' => __('Measurement is in pixel.','driving-school-lite'),
            'input_attrs' => array(
                'min' => 0,
                'max' => 50,
            )
    ))); 
	
	$wp_customize->add_setting('driving_school_lite_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('driving_school_lite_text',array(
		'label'	=> __('Copyright Text','driving-school-lite'),
		'description'	=> __('Add some text for footer like copyright etc.','driving-school-lite'),
		'section'	=> 'driving_school_lite_footer_section',
		'type'		=> 'text'
	));	
}
add_action( 'customize_register', 'driving_school_lite_customize_register' );	

// logo resize
load_template( trailingslashit( get_template_directory() ) . '/inc/logo/logo-resizer.php' );

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Driving_School_Lite_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Driving_School_Lite_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Driving_School_Lite_Customize_Section_Pro(
			$manager,
			'example_1',
				array(
				'priority'   => 9,
				'title'    => esc_html__( 'Driving School Pro', 'driving-school-lite' ),
				'pro_text' => esc_html__( 'Go Pro', 'driving-school-lite' ),
				'pro_url'  => esc_url('https://www.themesglance.com/themes/driving-school-lite-wordpress-theme/')					
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'driving-school-lite-customize-controls', trailingslashit( get_template_directory_uri() ) . '/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'driving-school-lite-customize-controls', trailingslashit( get_template_directory_uri() ) . '/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Driving_School_Lite_Customize::get_instance();