<div class="container">
    <div class="row text-center">
        <h2><span>Why Us</span></h2>
    </div>
    <div class="row">
        <div class="col-md-3 col-xs-6 feature-item-wrap">
            <div class="feature-item item_1">
            <div class="feature_item_img">
                <?php if (kailaji_get_option('kailaji_whyus_img1') != '') {
                    $feature_two_url = esc_url(kailaji_get_option('kailaji_whyus_link1'));
                    if ($feature_two_url) {
                        ?>
                        <a class="kailaji_whyus_img1" href="<?php echo $feature_two_url; ?>"><img src="<?php echo esc_url(kailaji_get_option('kailaji_whyus_img1')); ?>" alt="<?php _e('Feature Image', 'andrina-lite'); ?>"/></a>
                    <?php } else { ?>
                        <span class="kailaji_whyus_img1"><img src="<?php echo esc_url(kailaji_get_option('kailaji_whyus_img1')); ?>" alt="<?php _e('Feature Image', 'andrina-lite'); ?>"/></span>
                    <?php
                    }
                 } else { ?>
                    <a class="kailaji_whyus_img1" href="#"><img src="<?php echo ANDRINA_DIR_URI; ?>assets/images/img.png" alt="Feature Image 1"/></a>
                    <?php }
                ?>
                    </div>
                    <div class="img_con">              

                        <?php
                        if (kailaji_get_option('kailaji_whyus_head1') != '') {
                            ?>
                            <h4 class="kailaji_whyus_head1"><?php echo wp_kses_post(kailaji_get_option('kailaji_whyus_head1')); ?></h4>
                        <?php } else { ?>            
                            <h4 class="kailaji_whyus_head1"><?php _e('Fully Responsive', 'kailaji-alloys'); ?></h4>
                            <?php
                        }
                        if (kailaji_get_option('kailaji_whyus_des1') != '') {
                            ?>
                            <p class="kailaji_whyus_des1"><?php echo wp_kses_post(kailaji_get_option('kailaji_whyus_des1')); ?></p>
                        <?php } else { ?>
                            <p class="kailaji_whyus_des1"><?php _e('Andrina is a unique responsive WordPress theme. The theme design is fabulous enough giving your visitors the absolute reason to stay on your site.', 'kailaji-alloys'); ?></p>
                        <?php } ?>            
                    </div>
            </div>
        </div>
        <div class="col-md-3 col-xs-6 feature-item-wrap">
            <div class="feature-item item_2">
        <div class="feature_item_img">
                <?php if (kailaji_get_option('kailaji_whyus_img2') != '') {
                    $feature_two_url = esc_url(kailaji_get_option('kailaji_whyus_link2'));
                    if ($feature_two_url) {
                        ?>
                        <a class="kailaji_whyus_img2" href="<?php echo $feature_two_url; ?>"><img src="<?php echo esc_url(kailaji_get_option('kailaji_whyus_img2')); ?>" alt="<?php _e('Feature Image', 'andrina-lite'); ?>"/></a>
                    <?php } else { ?>
                        <span class="kailaji_whyus_img2"><img src="<?php echo esc_url(kailaji_get_option('kailaji_whyus_img2')); ?>" alt="<?php _e('Feature Image', 'andrina-lite'); ?>"/></span>
                    <?php
                    }
                 } else { ?>
                    <a class="kailaji_whyus_img2" href="#"><img src="<?php echo ANDRINA_DIR_URI; ?>assets/images/img.png" alt="Feature Image 2"/></a>
                    <?php }
                ?>
                    </div>
                    <div class="img_con">
                        <?php
                        if (kailaji_get_option('kailaji_whyus_head2') != '') {
                            ?>
                            <h4 class="kailaji_whyus_head2"><?php echo wp_kses_post(kailaji_get_option('kailaji_whyus_head2')); ?></h4>
                        <?php } else { ?>            
                            <h4 class="kailaji_whyus_head2"><?php _e('Easy to Customize', 'kailaji-alloys'); ?></h4>
                            <?php
                        }
                        if (kailaji_get_option('kailaji_whyus_des2') != '') {
                            ?>
                            <p class="kailaji_whyus_des2"><?php echo wp_kses_post(kailaji_get_option('kailaji_whyus_des2')); ?></p>
                        <?php } else { ?>
                            <p class="kailaji_whyus_des2"><?php _e('The speciality of the Theme is the easiness through which you can get the site ready for yourself or your client.', 'kailaji-alloys'); ?></p>
                        <?php } ?>            
                    </div>
            </div>
        </div>
        <div class="col-md-3 col-xs-6 feature-item-wrap">
            <div class="feature-item item_3">
        <div class="feature_item_img">
                <?php if (kailaji_get_option('kailaji_whyus_img3') != '') {
                    $feature_two_url = esc_url(kailaji_get_option('kailaji_whyus_link3'));
                    if ($feature_two_url) {
                        ?>
                        <a class="kailaji_whyus_img3" href="<?php echo $feature_two_url; ?>"><img src="<?php echo esc_url(kailaji_get_option('kailaji_whyus_img3')); ?>" alt="<?php _e('Feature Image', 'andrina-lite'); ?>"/></a>
                    <?php } else { ?>
                        <span class="kailaji_whyus_img3"><img src="<?php echo esc_url(kailaji_get_option('kailaji_whyus_img3')); ?>" alt="<?php _e('Feature Image', 'andrina-lite'); ?>"/></span>
                    <?php
                    }
                 } else { ?>
                    <a class="kailaji_whyus_img3" href="#"><img src="<?php echo ANDRINA_DIR_URI; ?>assets/images/img.png" alt="Feature Image 3"/></a>
                    <?php }
                ?>
                    </div>
                    <div class="img_con">
                        <?php
                        if (kailaji_get_option('kailaji_whyus_head3') != '') {
                            ?>
                            <h4 class="kailaji_whyus_head3"><?php echo wp_kses_post(kailaji_get_option('kailaji_whyus_head3')); ?></h4>
                        <?php } else { ?>            
                            <h4 class="kailaji_whyus_head3"><?php _e('Elegant & Simple', 'kailaji-alloys'); ?></h4>
                            <?php
                        }
                        if (kailaji_get_option('kailaji_whyus_des3') != '') {
                            ?>
                            <p class="kailaji_whyus_des3"><?php echo wp_kses_post(kailaji_get_option('kailaji_whyus_des3')); ?></p>
                        <?php } else { ?>
                            <p class="kailaji_whyus_des3"><?php _e('Easily controls the look and feel of your whole website and over 10+ stylish color schemes gives your website a fresh new look.', 'kailaji-alloys'); ?></p>
                        <?php } ?>            
                    </div>
            </div>
        </div>
        <div class="col-md-3 col-xs-6 feature-item-wrap">
            <div class="feature-item item_4">
        <div class="feature_item_img">
                <?php if (kailaji_get_option('kailaji_whyus_img4') != '') {
                    $feature_two_url = esc_url(kailaji_get_option('kailaji_whyus_link4'));
                    if ($feature_two_url) {
                        ?>
                        <a class="kailaji_whyus_img4" href="<?php echo $feature_two_url; ?>"><img src="<?php echo esc_url(kailaji_get_option('kailaji_whyus_img4')); ?>" alt="<?php _e('Feature Image', 'andrina-lite'); ?>"/></a>
                    <?php } else { ?>
                        <span class="kailaji_whyus_img4"><img src="<?php echo esc_url(kailaji_get_option('kailaji_whyus_img4')); ?>" alt="<?php _e('Feature Image', 'andrina-lite'); ?>"/></span>
                    <?php
                    }
                 } else { ?>
                    <a class="kailaji_whyus_img4" href="#"><img src="<?php echo ANDRINA_DIR_URI; ?>assets/images/img.png" alt="Feature Image 4"/></a>
                    <?php }
                ?>
                    </div>
                    <div class="img_con">
                        <?php
                        if (kailaji_get_option('kailaji_whyus_head4') != '') {
                            ?>
                            <h4 class="kailaji_whyus_head4"><?php echo wp_kses_post(kailaji_get_option('kailaji_whyus_head4')); ?></h4>
                        <?php } else { ?>            
                            <h4 class="kailaji_whyus_head4"><?php _e('Search Optimized', 'kailaji-alloys'); ?></h4>
                            <?php
                        }
                        if (kailaji_get_option('kailaji_whyus_des4') != '') {
                            ?>
                            <p class="kailaji_whyus_des4"><?php echo wp_kses_post(kailaji_get_option('kailaji_whyus_des4')); ?></p>
                        <?php } else { ?>
                            <p class="kailaji_whyus_des4"><?php _e('Just a click and your website is ready to use. Theme is better suitable for any business or personal website. The theme is compatible with various niches.', 'kailaji-alloys'); ?></p>
                        <?php } ?>            
                    </div>
            </div>
        </div>

    </div>
</div>