<div class="container">
    <div class="row text-center">
        <h2><span>Our Range</span></h2>
    </div>
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="feature-item item_1">
            <div class="feature_item_img">
                <?php if (andrina_get_option('andrina_feature_img1') != '') { 
                    $feature_one_url = esc_url(andrina_get_option('andrina_link1'));
                    if ($feature_one_url) {
                        ?>
                        <a class="andrina_feature_img1" href="<?php echo $feature_one_url; ?>"><img src="<?php echo esc_url(andrina_get_option('andrina_feature_img1')); ?>" alt="<?php _e('Feature Image', 'andrina-lite'); ?>"/></a>
                    <?php } else { ?>
                        <span class="andrina_feature_img1"><img src="<?php echo esc_url(andrina_get_option('andrina_feature_img1')); ?>" alt="<?php _e('Feature Image', 'andrina-lite'); ?>"/></span>
                    <?php
                    }
                } else { ?>
                    <a class="andrina_feature_img1" href="#"><img src="<?php echo ANDRINA_DIR_URI; ?>assets/images/img.png" alt="Feature Image 1"/></a>
                    <?php }
                ?>
                    </div>
                    <div class="img_con">              

                        <?php
                        if (andrina_get_option('andrina_f_head1') != '') {
                            ?>
                            <h4 class="andrina_f_head1"><?php echo wp_kses_post(andrina_get_option('andrina_f_head1')); ?></h4>
                        <?php 
                        }
                        if (andrina_get_option('andrina_f_des1') != '') {
                            ?>
                            <p class="andrina_f_des1"><?php echo wp_kses_post(andrina_get_option('andrina_f_des1')); ?></p>
                        <?php } ?>            
                    </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="feature-item item_2">
        <div class="feature_item_img">
                <?php if (andrina_get_option('andrina_feature_img2') != '') {
                    $feature_two_url = esc_url(andrina_get_option('andrina_link2'));
                    if ($feature_two_url) {
                        ?>
                        <a class="andrina_feature_img2" href="<?php echo $feature_two_url; ?>"><img src="<?php echo esc_url(andrina_get_option('andrina_feature_img2')); ?>" alt="<?php _e('Feature Image', 'andrina-lite'); ?>"/></a>
                    <?php } else { ?>
                        <span class="andrina_feature_img2"><img src="<?php echo esc_url(andrina_get_option('andrina_feature_img2')); ?>" alt="<?php _e('Feature Image', 'andrina-lite'); ?>"/></span>
                    <?php
                    }
                 } else { ?>
                    <a class="andrina_feature_img2" href="#"><img src="<?php echo ANDRINA_DIR_URI; ?>assets/images/img.png" alt="Feature Image 2"/></a>
                    <?php }
                ?>
                    </div>
                    <div class="img_con">
                        <?php
                        if (andrina_get_option('andrina_f_head2') != '') {
                            ?>
                            <h4 class="andrina_f_head2"><?php echo wp_kses_post(andrina_get_option('andrina_f_head2')); ?></h4>
                            <?php
                        }
                        if (andrina_get_option('andrina_f_des2') != '') {
                            ?>
                            <p class="andrina_f_des2"><?php echo wp_kses_post(andrina_get_option('andrina_f_des2')); ?></p>
                        <?php } ?>            
                    </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="feature-item item_3">
        <div class="feature_item_img">
                <?php if (andrina_get_option('andrina_feature_img3') != '') {
                    $feature_three_url = esc_url(andrina_get_option('andrina_link3'));
                    if ($feature_three_url) {
                        ?>
                        <a class="andrina_feature_img3" href="<?php echo $feature_three_url; ?>"><img src="<?php echo esc_url(andrina_get_option('andrina_feature_img3')); ?>" alt="<?php _e('Feature Image', 'andrina-lite'); ?>"/></a>
                    <?php } else { ?>
                        <span class="andrina_feature_img3"><img src="<?php echo esc_url(andrina_get_option('andrina_feature_img3')); ?>" alt="<?php _e('Feature Image', 'andrina-lite'); ?>"/></span>
                    <?php
                    }
                } else { ?>
                    <a class="andrina_feature_img3" href="#"><img src="<?php echo ANDRINA_DIR_URI; ?>assets/images/img.png" alt="Feature Image 3"/></a>
                    <?php }
                ?>
                    </div>
                    <div class="img_con">
                        <?php
                        if (andrina_get_option('andrina_f_head3') != '') {
                            ?>
                            <h4 class="andrina_f_head3"><?php echo wp_kses_post(andrina_get_option('andrina_f_head3')); ?></h4>
                            <?php
                        }
                        if (andrina_get_option('andrina_f_des3') != '') {
                            ?>
                            <p class="andrina_f_des3"><?php echo wp_kses_post(andrina_get_option('andrina_f_des3')); ?></p>
                        <?php } ?>            
                    </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="feature-item item_4">
        <div class="feature_item_img">
                <?php if (andrina_get_option('andrina_feature_img4') != '') {
                    $feature_four_url = esc_url(andrina_get_option('andrina_link4'));
                    if ($feature_four_url) {
                        ?>
                        <a class="andrina_feature_img4" href="<?php echo $feature_four_url; ?>"><img src="<?php echo esc_url(andrina_get_option('andrina_feature_img4')); ?>" alt="<?php _e('Feature Image', 'andrina-lite'); ?>"/></a>
                    <?php } else { ?>
                        <span class="andrina_feature_img4"><img src="<?php echo esc_url(andrina_get_option('andrina_feature_img4')); ?>" alt="<?php _e('Feature Image', 'andrina-lite'); ?>"/></span>
                    <?php
                    }
                } else { ?>
                    <a class="andrina_feature_img4" href="#"><img src="<?php echo ANDRINA_DIR_URI; ?>assets/images/img.png" alt="Feature Image 4"/></a>
                    <?php }
                ?>
                    </div>
                    <div class="img_con">
                        <?php
                        if (andrina_get_option('andrina_f_head4') != '') {
                            ?>
                            <h4 class="andrina_f_head4"><?php echo wp_kses_post(andrina_get_option('andrina_f_head4')); ?></h4>
                            <?php
                        }
                        if (andrina_get_option('andrina_f_des4') != '') {
                            ?>
                            <p class="andrina_f_des4"><?php echo wp_kses_post(andrina_get_option('andrina_f_des4')); ?></p>
                        <?php } ?>            
                    </div>
            </div>
        </div>

    </div>
</div>