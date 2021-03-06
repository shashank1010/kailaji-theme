<?php
/**
 * The template for displaying front page pages.
 *
 */
get_header();
?>
<div class="main-slider-wrapper">
    <div id="container">
        <div id="example">
            <div id="slides" class="clearfix">
                <?php                
                get_template_part('templates/slider')
                ?>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</div>
<div class="full-content">
    <section class="about-section-wrapper">
        <div class="container about-section">
            <?php
                if (is_active_sidebar('home-about-section')) {
                    ?>
                    <div id="about-section" class="about">
                        <?php dynamic_sidebar( 'home-about-section' ); ?>
                    </div>
                    <?php
                }
                if (is_active_sidebar('home-about-slider')) {
                    ?>
                    <div id="about-slider" class='about-slider flexslider' role="complementary">
                        <ul class="slides clearfix">
                            <?php dynamic_sidebar( 'home-about-slider' ); ?>
                        </ul>
                    </div>
                    <?php
                }
            ?>
        </div>
    </section>
    <section class="feature-content feature-section">
        <?php
            get_template_part('templates/home', 'feature');
        ?>
    </section>
    <section class="why-us-section">
        <?php
            get_template_part('templates/home', 'whyus');
        ?>
    </section>
    <?php
        if (is_active_sidebar('home-applications')) {
            dynamic_sidebar( 'home-applications' );
        }
    ?>
</div>
<!-- <div class="row">
    <div class="index-info">    
        <?php
        // get_template_part('templates/home', 'infobar');
        ?>
    </div>
</div> -->
</div>

<?php
get_footer();
