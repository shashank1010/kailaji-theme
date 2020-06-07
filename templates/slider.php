<!--Start Slider 1-->     
<!-- Place somewhere in the <body> of your page -->

    <div class="slider-wrapper">
    <div class="flexslider">
        <ul class="slides clearfix">
            <?php if (andrina_get_option('andrina_slideimage1') != '') { ?>    
                <li>
                    <div class="slide">
                        <?php
                            $link1 = andrina_get_option('andrina_Slider_link1');
                            $before1 = $link1 != '' ? '<a class="slide-image andrina_slideimage1" href="'. esc_url($link1) .'" >' : '<div class="slide-image andrina_slideimage1">';
                            $after1 = $link1 != '' ? '</a>' : '</div>';
                            echo $before1;
                        ?>
                            <img src="<?php echo esc_url(andrina_get_option('andrina_slideimage1')); ?>"  alt="<?php echo wp_kses_post(andrina_get_option('andrina_slider_des1')); ?>"/>
                        <?php echo $after1; ?>
                        <div class="caption-wrapper">                            
                            <div class="caption animated">                            
                                <div class="caption-inner">
                                    <?php if (andrina_get_option('andrina_slider_heading1') != '') {
                                        echo $before1;
                                        ?>                             
                                            <h2 class="font-family-2 animated andrina_slider_heading1"><?php echo stripslashes(andrina_get_option('andrina_slider_heading1')); ?></h2>
                                        <?php
                                        echo $after1;
                                    }
                                    if (andrina_get_option('andrina_slider_subheading1') != '') {
                                        ?>                             
                                        <h3 class="animated andrina_slider_subheading1"><?php echo stripslashes(andrina_get_option('andrina_slider_subheading1')); ?></h3>
                                        <?php
                                    }
                                    ?>
                                    <div class="slider-separator"></div>
                                    <?php
                                    /*if (andrina_get_option('andrina_slider_des1') != '') {
                                        ?>                              
                                        <p class="animated andrina_slider_des1"> <?php echo wp_kses_post(andrina_get_option('andrina_slider_des1')); ?></p>
                                        <?php
                                    }*/
                                    ?>
                                    <?php
                                    if (andrina_get_option('andrina_Slider_btntext1') != '') {
                                        ?>
                                        <a class='read-more-btn animated andrina_Slider_btntext1' href="<?php echo esc_url(andrina_get_option('andrina_Slider_link1')); ?>"><?php echo esc_attr(andrina_get_option('andrina_Slider_btntext1')); ?></a>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>    
                </li>
            <?php } ?>
            <?php if (andrina_get_option('andrina_slideimage2') != '') { ?>    
                <li>
                    <div class="slide">
                        <?php
                            $link2 = andrina_get_option('andrina_Slider_link2');
                            $before2 = $link2 != '' ? '<a class="slide-image andrina_slideimage2" href="'. esc_url($link2) .'" >' : '<div class="slide-image andrina_slideimage2">';
                            $after2 = $link2 != '' ? '</a>' : '</div>';
                            echo $before2;
                        ?>
                            <img src="<?php echo esc_url(andrina_get_option('andrina_slideimage2')); ?>"  alt="<?php echo wp_kses_post(andrina_get_option('andrina_slider_des1')); ?>"/>
                        <?php echo $after2; ?>
                        <div class="caption-wrapper">                            
                            <div class="caption animated">                            
                                <div class="caption-inner">
                                    <?php if (andrina_get_option('andrina_slider_heading2') != '') { 
                                        echo $before2; ?>
                                            <h2 class="font-family-2 animated andrina_slider_heading2"><?php echo stripslashes(andrina_get_option('andrina_slider_heading2')); ?></h2>
                                        <?php
                                        echo $after2;
                                    }
                                    if (andrina_get_option('andrina_slider_subheading2') != '') {
                                        ?>                             
                                        <h3 class="animated andrina_slider_subheading2"><?php echo stripslashes(andrina_get_option('andrina_slider_subheading2')); ?></h3>
                                        <?php
                                    }
                                    ?>
                                    <div class="slider-separator"></div>
                                    <?php /*
                                    if (andrina_get_option('andrina_slider_des2') != '') {
                                        ?>                              
                                        <p class="animated andrina_slider_des2"> <?php echo wp_kses_post(andrina_get_option('andrina_slider_des2')); ?></p>
                                        <?php
                                    }*/
                                    ?>
                                    <?php
                                    if (andrina_get_option('andrina_Slider_btntext2') != '') {
                                        ?>
                                        <a class='read-more-btn animated andrina_Slider_btntext2' href="<?php echo esc_url(andrina_get_option('andrina_Slider_link2')); ?>"><?php echo esc_attr(andrina_get_option('andrina_Slider_btntext2')); ?></a>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div> 
                </li>
            <?php } ?>
            <?php if (andrina_get_option('andrina_slideimage3') != '') { ?>    
                <li>
                    <div class="slide">
                        <?php
                            $link3 = andrina_get_option('andrina_Slider_link3');
                            $before3 = $link3 != '' ? '<a class="slide-image andrina_slideimage3" href="'. esc_url($link3) .'" >' : '<div class="slide-image andrina_slideimage3">';
                            $after3 = $link3 != '' ? '</a>' : '</div>';
                            echo $before3;
                        ?>
                            <img src="<?php echo esc_url(andrina_get_option('andrina_slideimage3')); ?>"  alt="<?php echo wp_kses_post(andrina_get_option('andrina_slider_des3')); ?>"/>
                        <?php echo $after3; ?>                
                        <div class="caption-wrapper">                            
                            <div class="caption animated">                            
                                <div class="caption-inner">
                                    <?php if (andrina_get_option('andrina_slider_heading3') != '') { 
                                        echo $before3; ?>
                                            <h3 class="animated andrina_slider_heading3"><?php echo stripslashes(andrina_get_option('andrina_slider_heading3')); ?></h3>
                                        <?php
                                        echo $after3;
                                    }
                                    if (andrina_get_option('andrina_slider_subheading3') != '') {
                                        ?>                             
                                        <h3 class="animated andrina_slider_subheading3"><?php echo stripslashes(andrina_get_option('andrina_slider_subheading3')); ?></h3>
                                        <?php
                                    }
                                    ?>
                                    <div class="slider-separator"></div>
                                    <?php /*
                                    if (andrina_get_option('andrina_slider_des3') != '') {
                                        ?>                              
                                        <p class="animated andrina_slider_des3"> <?php echo wp_kses_post(andrina_get_option('andrina_slider_des3')); ?></p>
                                        <?php
                                    }*/
                                    ?>
                                    <?php
                                    if (andrina_get_option('andrina_Slider_btntext3') != '') {
                                        ?>
                                        <a class='read-more-btn animated andrina_Slider_btntext3' href="<?php echo esc_url(andrina_get_option('andrina_Slider_link3')); ?>"><?php echo esc_attr(andrina_get_option('andrina_Slider_btntext3')); ?></a>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div> 
                </li>
            <?php } ?>
            <!--DEFAULT SLIDER-->
            <?php if (andrina_get_option('andrina_slideimage1') == '' && andrina_get_option('andrina_slideimage2') == '') { ?>    
                <li>
                    <div class="slide">                         
                        <a href="#" class="slide-image andrina_slideimage1" >
                            <img src="<?php echo ANDRINA_DIR_URI; ?>assets/images/slideimg.png"  alt="<?php _e('Slide 6', 'andrina-lite'); ?>"/>
                        </a>
                        <div class="caption-wrapper">                            
                            <div class="caption animated">                            
                                <div class="caption-inner">
                                    <a href="#"><h2 class="animated"><?php _e('Andrina Theme Heading', 'andrina-lite'); ?></h2></a>
                                    <a href="#"><h3 class="animated"><?php _e('Andrina Theme Subheading', 'andrina-lite'); ?></h3></a>
                                    <div class="slider-separator"></div>
                                    <p class="animated"><?php _e('Customize your Slider by adding Images, Headings, Subheading, Descriptions and Links.', 'andrina-lite'); ?></p>
                                    <a class='read-more-btn animated' href="#"><?php _e('Button Text', 'andrina-lite'); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            <?php } ?>    
            <!--END DEFAULT SLIDER-->
        </ul>
        <div class="clearfix"></div>
    </div>
    </div>
    

