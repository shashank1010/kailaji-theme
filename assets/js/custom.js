jQuery(document).ready(function () {
    jQuery(".displaywell").mouseover(function () {
        jQuery(this).addClass('now_see');
        //        alert('hello');
    });
    jQuery(".displaywell").mouseout(function () {
        jQuery(this).removeClass('now_see');
        //        alert('hello');
    });
});


/**
 * 
 * Disable top level product menu links
 */
jQuery(document).ready(function() {
    jQuery("#menu-product-menu > .menu-item-has-children > a").click(function(e) {
        e.preventDefault()
        return false;
    });
});


// add new class in woocommerce product image

jQuery(window).ready(function () {
    jQuery(".woocommerce ul.products li.product a img").wrap("<div class='new'></div>");
});

jQuery(window).load(function () {
    jQuery('.flexslider').flexslider({
        controlNav: false
    });
});

jQuery(window).ready(function () {
    jQuery('.flexslider_gallery').flexslider({
        animation: "slide"
    });
});


// this code is creating ,masonry layout of picture
jQuery(window).load(function () {
    jQuery('div.layout-wrapper-4').masonry({
        itemSelector: '.layer_type4',
    });
    jQuery('div.gallery .thumbnail').masonry({
        itemSelector: '.displaywell',
    });
});


//Gallery Thumbnail Zoombox
jQuery(function () {
    jQuery('a.zoombox').zoombox();
});

//Contact validate
jQuery(document).ready(function () {
    /**
     * Validation For Contact Form
     */
    jQuery("#contactForm").validate();
    /**
     * Flex Slider
     */
    jQuery('.flexslider').flexslider();
    /**
     * Mean Menu (Mobile Menu)
     */
    jQuery('#product-menu').meanmenu({
        meanScreenWidth: "991",
        meanMenuClose: '',
    });
    /**
     * Miscellaneous JS
     */
    jQuery("div.comment-body").prepend("<span class='tip tip-left'></span>");
    jQuery(".depth-5 div.comment-body").append("<div class='reply'></div>");
});


// <!--Start of Tawk.to Script-->

(function(){
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/60b3e3126699c7280da9beb5/1f6vau0a9';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
})();

// <!--End of Tawk.to Script-->