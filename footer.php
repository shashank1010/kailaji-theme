<footer>
    <div class="container">
        <div class="row footer">
            <!--Start Footer-->
                <?php
                /* A sidebar in the footer? Yep. You can can customize
                    * your footer with four columns of widgets.
                    */
                get_sidebar('footer');
                ?>
            <!--End Footer-->
        </div>
        <?php if (is_active_sidebar('full-width-footer')) { ?>
        <ul class="row full-width-footer">
            <!--Start Footer-->
                <?php
                /* A sidebar in the footer? Yep. You can can customize
                    * your footer with four columns of widgets.
                    */
                    dynamic_sidebar( 'full-width-footer' );
                ?>
            <!--End Footer-->
        </ul>
        <?php } ?>
    </div>

    <!--Start Footer bottom-->
    <!--Start footer bottom inner-->
    <?php if (andrina_get_option('andrina_footertext') != '') { ?>
        <div class="container">
            <div class="row">
                <div class="bottom-footer">
                    <div class="col-md-12">
                        <div class="footer_bottom_inner">  
                                <span class="copyright andrina_footertext"><?php echo esc_attr(andrina_get_option('andrina_footertext')); ?></span> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
    <!--End Footer bottom inner-->
    <!--End Footer bottom-->
    <?php wp_footer(); ?>
</footer>

</body>
</html>