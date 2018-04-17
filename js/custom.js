/**
 * Created by Gourav on 2/27/2018.
 */

jQuery(document).ready( function() {
    jQuery('#searchicon').click(function() {
        jQuery('#jumbosearch').fadeIn();
        jQuery('#jumbosearch input').focus();
    });
    jQuery('#jumbosearch .closeicon').click(function() {
        jQuery('#jumbosearch').fadeOut();
    });
    jQuery('body').keydown(function(e){

        if(e.keyCode == 27){
            jQuery('#jumbosearch').fadeOut();
        }
    });
    // init Masonry
    var $grid = jQuery('.masonry-main').masonry({
        itemSelector: '.'
    });
    // layout Masonry after each image loads
    $grid.imagesLoaded().progress( function() {
        $grid.masonry('layout');
    });

    jQuery('.menu-link').bigSlide(
        {
            easyClose:true,
            activeBtn:true
        }
    );

    

});
//SLIDER
jQuery(function(){
    var mySlider = jQuery('.slider-container').swiper({
        pagination: '.swiper-pagination',
        paginationClickable: '.swiper-pagination',
        nextButton: '.sliderext',
        prevButton: '.sliderprev',
        spaceBetween: 30,
        autoplay: 2500,
        effect: 'fade'
    });
});