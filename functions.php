<?
    /**
     * Defining Relative and Absolute Path of Theme's root directory by Constant
     * Relative Path - KAILAJI_DIR
     * Absolute Path - KAILAJI_DIR_URI
     */
    if (!defined('KAILAJI_DIR')) {
        define('KAILAJI_DIR', get_stylesheet_directory() . '/');
    }
    if (!defined('KAILAJI_DIR_URI')) {
        define('KAILAJI_DIR_URI', get_stylesheet_directory_uri() . '/');
    }
    require_once KAILAJI_DIR . 'includes/customizer.php';

    function product_menu() {
        wp_nav_menu(array(
            'theme_location' => 'product_menu',
            'container' => 'nav',
            'container_id' => 'product-menu',
            'container_class' => 'row',
            'menu_class' => 'container product-menu',
            'depth' => 2
        ));
    }

    function kailaji_widgets() {
        register_sidebar( array(
            'name'          => 'Homepage About Section',
            'id'            => 'home-about-section',
            'before_widget' => '<div class="about-us-widget">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2><span>',
            'after_title'  => '</span></h2>',
        ) );
        register_sidebar( array(
            'name'          => 'Homepage About Slider',
            'id'            => 'home-about-slider',
            'before_widget' => '<li class="slide about-us-slide">',
            'after_widget'  => '</li>',
            'before_title'  => '<h2><span>',
            'after_title'  => '</span></h2>',
        ) );
        register_sidebar( array(
            'name'          => 'Homepage Applications Section',
            'id'            => 'home-applications',
            'before_widget' => '<section class="applications-section" role="complementary"><div class="container text-center">',
            'after_widget'  => '</div></section>',
            'before_title'  => '<h2><span>',
            'after_title'  => '</span></h2>',
        ) );
        register_sidebar( array(
            'name'          => 'Full Width Footer',
            'id'            => 'full-width-footer',
        ) );
        register_sidebar( array(
            'name'          => 'Packaging Widgets',
            'id'            => 'packaging-section',
        ) );
    }

    function on_admin_init() {
        if ( !current_user_can( 'publish_posts' ) ) 
        return;

        add_meta_box('post-package-info', __( 'After Packaging', 'textdomain' ), 'after_packaging_callback', 'page' );
        add_action('save_post', 'after_packaging_save');
    }

    //This function saves the data you put in the meta box
    function after_packaging_save($post_id) {
        if( isset( $_POST['post_package_info_nonce'] ) && isset( $_POST['post_type'] ) ) {
            //Not save if the user hasn't submitted changes
            if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
            return;
            } 
    
            // Verifying whether input is coming from the proper form
            if ( ! wp_verify_nonce ( $_POST['post_package_info_nonce'] ) ) {
            return;
            } 
    
            // Making sure the user has permission
            if( 'page' == $_POST['post_type'] ) {
                if( ! current_user_can( 'edit_pages', $post_id ) ) {
                        return;
                }
            } 
        } 

        $data = !empty($_POST['post_package_info']) ? $_POST['post_package_info'] : NULL;
        update_post_meta($post_id, 'post_package_info', $data);
    }


    /**
     * Get post meta in a callback
     *
     * @param WP_Post $post    The current post.
     * @param array   $metabox With metabox id, title, callback, and args elements.
     */
    
    function after_packaging_callback( $post, $metabox ) {
        // Output last time the post was modified.
        $post_package_info = get_post_meta( $post->ID, 'post_package_info', true );

        wp_editor ( 
            $post_package_info , 
            'post_package_info'
        );
    }

    function kailaji_setup() {
        register_nav_menu('product_menu', __('Product Menu', 'kailaji-alloys'));
        add_theme_support( 'post-thumbnails' );
        add_action( 'widgets_init', 'kailaji_widgets' );
        add_action( 'admin_init', 'on_admin_init' );
    }
    
    
    //get the theme option from options array
    function kailaji_get_option($name, $default = '') {
        //    echo $default;
        $options = get_option('kailaji_options');
        if (isset($options[$name]) && $options[$name] != '') {
            return $options[$name];
        }
    }

    // Save all option in single array
    function kailaji_save_option($option) {
        if (!empty($option)) {
            return update_option('kailaji_options', $option);
        }
    }

    //update theme option
    function kailaji_update_option($name, $value) {
        $options = get_option('kailaji_options');
        $options[$name] = $value;
        return update_option('kailaji_options', $options);
    }

    //delete theme option
    function kailaji_delete_option($name) {
        $options = get_option('kailaji_options');
        unset($options[$name]);
        return update_option('kailaji_options', $options);
    }

    function kailaji_dequeue_scripts() {
        if (!is_admin()) {
            wp_dequeue_script('andrina-ddsmoothmenu', ANDRINA_DIR_URI . 'assets/js/ddsmoothmenu.js', array('jquery'));
            wp_dequeue_script('andrina-custom', ANDRINA_DIR_URI . 'assets/js/custom.js', array('jquery'));


            /**
             * Zoom Box JS File
             * Dependency : jQuery
             */
            // wp_dequeue_script('andrina-zoombox', ANDRINA_DIR_URI . 'assets/js/zoombox.js', array('jquery'));
            /**
             * customizer preview
             * Dependency : jQuery
             */
            //wp_enqueue_script('andrina-preview', ANDRINA_DIR_URI . 'assets/js/customize-preview.js', array('jquery'));

            /**
             * jQuery Validate JS File 
             * Dependency : jQuery
             */
            // wp_dequeue_script('andrina-validate', ANDRINA_DIR_URI . 'assets/js/jquery.validate.min.js', array('jquery'));

            /**
             * Captcha JS File 
             * Dependency : jQuery
             */
            wp_dequeue_script('andrina-recaptcha', 'https://www.google.com/recaptcha/api.js', array('jquery'), true);


            /**
             * Comment Reply JS File
             * 
             */
            wp_dequeue_script('comment-reply');
        }
    }

    function kailaji_enqueue_scripts() {
        wp_enqueue_script('kailaji-custom', KAILAJI_DIR_URI . 'assets/js/custom.js', array('jquery'));
    }

    /*
    * * Enqueue Google Fonts
    */

    function andrina_gfonts_scripts() {
        add_action('wp_head', 'andrina_typography');
        wp_enqueue_style('andrina-google-fonts', andrina_google_fonts());
    }
    add_action('wp_enqueue_scripts', 'andrina_gfonts_scripts');
    
    $fonts = array('ABeeZee', 'Abel', 'Abril Fatface', 'Aclonica', 'Acme', 'Actor', 'Adamina', 'Advent Pro', 'Aguafina Script', 'Akronim', 'Aladin', 'Aldrich', 'Alef', 'Alegreya', 'Alegreya SC', 'Alex Brush', 'Alfa Slab One', 'Alice', 'Alike', 'Alike Angular', 'Allan', 'Allerta', 'Allerta Stencil', 'Allura', 'Almendra', 'Almendra Display', 'Almendra SC', 'Amarante', 'Amaranth', 'Amatic SC', 'Amethysta', 'Anaheim', 'Andada', 'Andika', 'Angkor', 'Annie Use Your Telescope', 'Anonymous Pro', 'Antic', 'Antic Didone', 'Antic Slab', 'Anton', 'Arapey', 'Arbutus', 'Arbutus Slab', 'Architects Daughter', 'Archivo Black', 'Archivo Narrow', 'Arial Black', 'Arial Narrow', 'Arimo', 'Arizonia', 'Armata', 'Artifika', 'Arvo', 'Asap', 'Asset', 'Astloch', 'Asul', 'Atomic Age', 'Aubrey', 'Audiowide', 'Autour One', 'Average', 'Average Sans', 'Averia Gruesa Libre', 'Averia Libre', 'Averia Sans Libre', 'Averia Serif Libre', 'Bad Script', 'Balthazar', 'Bangers', 'Basic', 'Battambang', 'Baumans', 'Bayon', 'Belgrano', 'Bell MT', 'Bell MT Alt', 'Belleza', 'BenchNine', 'Bentham', 'Berkshire Swash', 'Bevan', 'Bigelow Rules', 'Bigshot One', 'Bilbo', 'Bilbo Swash Caps', 'Bitter', 'Black Ops One', 'Bodoni', 'Bokor', 'Bonbon', 'Boogaloo', 'Bowlby One', 'Bowlby One SC', 'Brawler', 'Bree Serif', 'Bubblegum Sans', 'Bubbler One', 'Buenard', 'Butcherman', 'Butcherman Caps', 'Butterfly Kids', 'Cabin', 'Cabin Condensed', 'Cabin Sketch', 'Caesar Dressing', 'Cagliostro', 'Calibri', 'Calligraffitti', 'Cambo', 'Cambria', 'Candal', 'Cantarell', 'Cantata One', 'Cantora One', 'Capriola', 'Cardo', 'Carme', 'Carrois Gothic', 'Carrois Gothic SC', 'Carter One', 'Caudex', 'Cedarville Cursive', 'Ceviche One', 'Changa One', 'Chango', 'Chau Philomene One', 'Chela One', 'Chelsea Market', 'Chenla', 'Cherry Cream Soda', 'Cherry Swash', 'Chewy', 'Chicle', 'Chivo', 'Cinzel', 'Cinzel Decorative', 'Clara', 'Clicker Script', 'Coda', 'Codystar', 'Combo', 'Comfortaa', 'Coming Soon', 'Concert One', 'Condiment', 'Consolas', 'Content', 'Contrail One', 'Convergence', 'Cookie', 'Copse', 'Corben', 'Corsiva', 'Courgette', 'Courier New', 'Cousine', 'Coustard', 'Covered By Your Grace', 'Crafty Girls', 'Creepster', 'Creepster Caps', 'Crete Round', 'Crimson Text', 'Croissant One', 'Crushed', 'Cuprum', 'Cutive', 'Cutive Mono', 'Damion', 'Dancing Script', 'Dangrek', 'Dawning of a New Day', 'Days One', 'Delius', 'Delius Swash Caps', 'Delius Unicase', 'Della Respira', 'Denk One', 'Devonshire', 'Dhyana', 'Didact Gothic', 'Diplomata', 'Diplomata SC', 'Domine', 'Donegal One', 'Doppio One', 'Dorsa', 'Dosis', 'Dr Sugiyama', 'Droid Arabic Kufi', 'Droid Arabic Naskh', 'Droid Sans', 'Droid Sans Mono', 'Droid Sans TV', 'Droid Serif', 'Duru Sans', 'Dynalight', 'EB Garamond', 'Eagle Lake', 'Eater', 'Eater Caps', 'Economica', 'Electrolize', 'Elsie', 'Elsie Swash Caps', 'Emblema One', 'Emilys Candy', 'Engagement', 'Englebert', 'Enriqueta', 'Erica One', 'Esteban', 'Euphoria Script', 'Ewert', 'Exo', 'Expletus Sans', 'Fanwood Text', 'Fascinate', 'Fascinate Inline', 'Faster One', 'Fasthand', 'Fauna One', 'Federant', 'Federo', 'Felipa', 'Fenix', 'Finger Paint', 'Fjalla One', 'Fjord One', 'Flamenco', 'Flavors', 'Fondamento', 'Fontdiner Swanky', 'Forum', 'Francois One', 'Freckle Face', 'Fredericka the Great', 'Fredoka One', 'Freehand', 'Fresca', 'Frijole', 'Fruktur', 'Fugaz One', 'GFS Didot', 'GFS Neohellenic', 'Gabriela', 'Gafata', 'Galdeano', 'Galindo', 'Garamond', 'Gentium Basic', 'Gentium Book Basic', 'Geo', 'Geostar', 'Geostar Fill', 'Germania One', 'Gilda Display', 'Give You Glory', 'Glass Antiqua', 'Glegoo', 'Gloria Hallelujah', 'Goblin One', 'Gochi Hand', 'Gorditas', 'Goudy Bookletter 1911', 'Graduate', 'Grand Hotel', 'Gravitas One', 'Great Vibes', 'Griffy', 'Gruppo', 'Gudea', 'Habibi', 'Hammersmith One', 'Hanalei', 'Hanalei Fill', 'Handlee', 'Hanuman', 'Happy Monkey', 'Headland One', 'Helvetica Neue', 'Henny Penny', 'Herr Von Muellerhoff', 'Holtwood One SC', 'Homemade Apple', 'Homenaje', 'IM Fell DW Pica', 'IM Fell DW Pica SC', 'IM Fell Double Pica', 'IM Fell Double Pica SC', 'IM Fell English', 'IM Fell English SC', 'IM Fell French Canon', 'IM Fell French Canon SC', 'IM Fell Great Primer', 'IM Fell Great Primer SC', 'Iceberg', 'Iceland', 'Imprima', 'Inconsolata', 'Inder', 'Indie Flower', 'Inika', 'Irish Grover', 'Irish Growler', 'Istok Web', 'Italiana', 'Italianno', 'Jacques Francois', 'Jacques Francois Shadow', 'Jim Nightshade', 'Jockey One', 'Jolly Lodger', 'Josefin Sans', 'Josefin Sans Std Light', 'Josefin Slab', 'Joti One', 'Judson', 'Julee', 'Julius Sans One', 'Junge', 'Jura', 'Just Another Hand', 'Just Me Again Down Here', 'Kameron', 'Karla', 'Kaushan Script', 'Kavoon', 'Keania One', 'Kelly Slab', 'Kenia', 'Khmer', 'Kite One', 'Knewave', 'Kotta One', 'Koulen', 'Kranky', 'Kreon', 'Kristi', 'Krona One', 'La Belle Aurore', 'Lancelot', 'Lateef', 'Lato', 'League Script', 'Leckerli One', 'Ledger', 'Lekton', 'Lemon', 'Lemon One', 'Libre Baskerville', 'Life Savers', 'Lilita One', 'Lily Script One', 'Limelight', 'Linden Hill', 'Lobster', 'Lobster Two', 'Lohit Bengali', 'Lohit Devanagari', 'Lohit Tamil', 'Londrina Outline', 'Londrina Shadow', 'Londrina Sketch', 'Londrina Solid', 'Lora', 'Love Ya Like A Sister', 'Loved by the King', 'Lovers Quarrel', 'Luckiest Guy', 'Lusitana', 'Lustria', 'Macondo', 'Macondo Swash Caps', 'Magra', 'Maiden Orange', 'Mako', 'Marcellus', 'Marcellus SC', 'Marck Script', 'Margarine', 'Marko One', 'Marmelad', 'Marvel', 'Mate', 'Mate SC', 'Maven Pro', 'McLaren', 'Meddon', 'MedievalSharp', 'Medula One', 'Megrim', 'Meie Script', 'Merienda', 'Merienda One', 'Merriweather', 'Merriweather Sans', 'Metal', 'Metal Mania', 'Metamorphous', 'Metrophobic', 'Michroma', 'Milonga', 'Miltonian', 'Miltonian Tattoo', 'Miniver', 'Miss Fajardose', 'Miss Saint Delafield', 'Modern Antiqua', 'Molengo', 'Monda', 'Monofett', 'Monoton', 'Monsieur La Doulaise', 'Montaga', 'Montez', 'Montserrat', 'Montserrat Alternates', 'Montserrat Subrayada', 'Moul', 'Moulpali', 'Mountains of Christmas', 'Mouse Memoirs', 'Mr Bedford', 'Mr Bedfort', 'Mr Dafoe', 'Mr De Haviland', 'Mrs Saint Delafield', 'Mrs Sheppards', 'Muli', 'Mystery Quest', 'Neucha', 'Neuton', 'New Rocker', 'News Cycle', 'Niconne', 'Nixie One', 'Nobile', 'Nokora', 'Norican', 'Nosifer', 'Nosifer Caps', 'Nothing You Could Do', 'Noticia Text', 'Noto Sans', 'Noto Sans UI', 'Noto Serif', 'Nova Cut', 'Nova Flat', 'Nova Mono', 'Nova Oval', 'Nova Round', 'Nova Script', 'Nova Slim', 'Nova Square', 'Numans', 'Nunito', 'OFL Sorts Mill Goudy TT', 'Odor Mean Chey', 'Offside', 'Old Standard TT', 'Oldenburg', 'Oleo Script', 'Oleo Script Swash Caps', 'Open Sans', 'Oranienbaum', 'Orbitron', 'Oregano', 'Orienta', 'Original Surfer', 'Oswald', 'Over the Rainbow', 'Overlock', 'Overlock SC', 'Ovo', 'Oxygen', 'Oxygen Mono', 'PT Mono', 'PT Sans', 'PT Sans Caption', 'PT Sans Narrow', 'PT Serif', 'PT Serif Caption', 'Pacifico', 'Paprika', 'Parisienne', 'Passero One', 'Passion One', 'Pathway Gothic One', 'Patrick Hand', 'Patrick Hand SC', 'Patua One', 'Paytone One', 'Peralta', 'Permanent Marker', 'Petit Formal Script', 'Petrona', 'Philosopher', 'Piedra', 'Pinyon Script', 'Pirata One', 'Plaster', 'Play', 'Playball', 'Playfair Display', 'Playfair Display SC', 'Podkova', 'Poiret One', 'Poller One', 'Poly', 'Pompiere', 'Pontano Sans', 'Port Lligat Sans', 'Port Lligat Slab', 'Prata', 'Preahvihear', 'Press Start 2P', 'Princess Sofia', 'Prociono', 'Prosto One', 'Proxima Nova', 'Proxima Nova Tabular Figures', 'Puritan', 'Purple Purse', 'Quando', 'Quantico', 'Quattrocento', 'Quattrocento Sans', 'Questrial', 'Quicksand', 'Quintessential', 'Qwigley', 'Racing Sans One', 'Radley', 'Raleway', 'Raleway Dots', 'Rambla', 'Rammetto One', 'Ranchers', 'Rancho', 'Rationale', 'Redressed', 'Reenie Beanie', 'Revalia', 'Ribeye', 'Ribeye Marrow', 'Righteous', 'Risque', 'Roboto', 'Roboto Condensed', 'Roboto Slab', 'Rochester', 'Rock Salt', 'Rokkitt', 'Romanesco', 'Ropa Sans', 'Rosario', 'Rosarivo', 'Rouge Script', 'Ruda', 'Rufina', 'Ruge Boogie', 'Ruluko', 'Rum Raisin', 'Ruslan Display', 'Russo One', 'Ruthie', 'Rye', 'Sacramento', 'Sail', 'Salsa', 'Sanchez', 'Sancreek', 'Sansita One','Sans Serif', 'Sarina', 'Satisfy', 'Scada', 'Scheherazade', 'Schoolbell', 'Seaweed Script', 'Sevillana', 'Seymour One', 'Shadows Into Light', 'Shadows Into Light Two', 'Shanti', 'Share', 'Share Tech', 'Share Tech Mono', 'Shojumaru', 'Short Stack', 'Siamreap', 'Siemreap', 'Sigmar One', 'Signika', 'Signika Negative', 'Simonetta', 'Sintony', 'Sirin Stencil', 'Six Caps', 'Skranji', 'Slackey', 'Smokum', 'Smythe', 'Snippet', 'Snowburst One', 'Sofadi One', 'Sofia', 'Sonsie One', 'Sorts Mill Goudy', 'Source Code Pro', 'Source Sans Pro', 'Special Elite', 'Spicy Rice', 'Spinnaker', 'Spirax', 'Squada One', 'Stalemate', 'Stalin One', 'Stalinist One', 'Stardos Stencil', 'Stint Ultra Condensed', 'Stint Ultra Expanded', 'Stoke', 'Strait', 'Sue Ellen Francisco', 'Sunshiney', 'Supermercado One', 'Suwannaphum', 'Swanky and Moo Moo', 'Syncopate', 'Tahoma', 'Tangerine', 'Taprom', 'Tauri', 'Telex', 'Tenor Sans', 'Terminal Dosis', 'Terminal Dosis Light', 'Text Me One', 'Thabit', 'The Girl Next Door', 'Tienne', 'Tinos', 'Titan One', 'Titillium Web', 'Trade Winds', 'Trocchi', 'Trochut', 'Trykker', 'Tulpen One', 'Ubuntu', 'Ubuntu Condensed', 'Ubuntu Mono', 'Ultra', 'Uncial Antiqua', 'Underdog', 'Unica One', 'UnifrakturMaguntia', 'Unkempt', 'Unlock', 'Unna', 'VT323', 'Vampiro One', 'Varela', 'Varela Round', 'Vast Shadow', 'Vibur', 'Vidaloka', 'Viga', 'Voces', 'Volkhov', 'Vollkorn', 'Voltaire', 'Waiting for the Sunrise', 'Wallpoet', 'Walter Turncoat', 'Warnes', 'Wellfleet', 'Wendy One', 'Wire One', 'Yanone Kaffeesatz', 'Yellowtail', 'Yeseva One', 'Yesteryear', 'Zeyada', 'jsMath cmbx10', 'jsMath cmex10', 'jsMath cmmi10', 'jsMath cmr10', 'jsMath cmsy10', 'jsMath cmti10');
    
    /* String of Google fonts */
    function andrina_google_fonts() {
        global $fonts;
        $index = andrina_get_option('typography_logo_family');
        $index1 = andrina_get_option('typography_nav_family');
        $selectedFonts = array();
        if($index) {
            array_push($selectedFonts, $fonts[$index].':400,300,500,600,700,800');
        }
        if($index1) {
            array_push($selectedFonts, $fonts[$index1].':400,300,500,600,700,800');
        }
        $fonts_collection = add_query_arg(array(
            "family" => urlencode(implode("|", $selectedFonts)),
            "subset" => "latin"
        ), 'https://fonts.googleapis.com/css');    
        return $fonts_collection;   
    }
    
    /* typography style CSS code function */
    function andrina_typography() {
        global $fonts;
        $index = andrina_get_option('typography_logo_family');
        $index1 = andrina_get_option('typography_nav_family');

        if (andrina_get_option('typography_logo_family')!=''){
            array_push($selectedFonts, $fonts[$index]);
            echo "<style type='text/css'> h1, h2, h3, h4, h5, h6, .font-family-1{ font-family: " . $fonts[$index] . ", sans-serif!important; font-weight:700; }</style>";
        }
        
        if (andrina_get_option('typography_nav_family')!=''){
            array_push($selectedFonts, $fonts[$index1]);
            echo "<style type='text/css'> body, .font-family-2{ font-family: " . $fonts[$index1] . ", sans-serif!important; font-weight:400; }</style>";
        }
    }


    function kailaji_dequeue_styles() {
        wp_dequeue_style('andrina-zoombox');
        wp_dequeue_style('andrina-meanmenu');
        wp_dequeue_style('slice-hp-animation');
        wp_dequeue_style('andrina-woocommerce');
        wp_dequeue_style('andrina-responsive');
        wp_dequeue_style('andrina-Montserrat-font');
        wp_dequeue_style('andrina-opensans-font');
        wp_dequeue_style('andrina-font_awesome');
        wp_dequeue_style('andrina-font-awesome');
        wp_dequeue_style('andrina-fontawesome');
    }

    function kailaji_enqueue_styles() {
        wp_enqueue_style('kailaji-fontawesome', KAILAJI_DIR_URI . "assets/font-awesome/css/font-awesome.css", '', '', 'all');
        wp_enqueue_style('kailaji-responsive', KAILAJI_DIR_URI . "assets/css/responsive.css", '', '', 'all');
    }

    add_action('after_setup_theme', 'kailaji_setup');
    add_action('wp_enqueue_scripts', 'kailaji_dequeue_scripts', 100);
    add_action( 'wp_enqueue_scripts', 'kailaji_dequeue_styles', 100);
    add_action( 'wp_enqueue_scripts', 'kailaji_enqueue_scripts', 100);
    add_action( 'wp_enqueue_scripts', 'kailaji_enqueue_styles', 100);
?>