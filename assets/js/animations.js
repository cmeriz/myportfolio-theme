jQuery(document).ready(function($) {

    console.log('animations.js loaded');

    triggerAnimations();
    heroAnimations();
    

    // Adding a listener to the window to trigger the animations as the user scrolls the website
    
    $(window).scroll(function () { 
        triggerAnimations();
    });
    

    // Function to trigger all kinds of animations
    function triggerAnimations(){
        $('.init-fadeIn').each(function(){
            animate(this, 'fadeIn');
        });
        $('.init-fadeInZoom').each(function(){
            animate(this, 'fadeInZoom');
        });
        $('.init-fadeInU2D').each(function(){
            animate(this, 'fadeInU2D');
        });
        $('.init-fadeInU2D-lg').each(function(){
            animate(this, 'fadeInU2D-lg');
        });
        $('.init-fadeInD2U').each(function(){
            animate(this, 'fadeInD2U');
        });
        $('.init-fadeInL2R').each(function(){
            animate(this, 'fadeInL2R');
        });
        $('.init-fadeInR2L').each(function(){
            animate(this, 'fadeInR2L');
        });
        $('.init-fadeInL2R-lg').each(function(){
            animate(this, 'fadeInL2R-lg');
        });
        $('.init-fadeInR2L-lg').each(function(){
            animate(this, 'fadeInR2L-lg');
        });
        $('.init-fadeInRotateClock-sm').each(function(){
            animate(this, 'fadeInRotateClock-sm');
        });
    }

    function heroAnimations(){
        $('.init-heroL2R').each(function(){
            animateAtStart(this, 'fadeInL2R');
        });
    }


    function animateAtStart(element, animation_class){
        $(element).addClass(animation_class);
    }

    function animate(element, animation_class){

        var element_top = $(element).offset().top;
        var pos_scroll_top = $(window).scrollTop() + $(window).height() * 0.8;
        if(pos_scroll_top > element_top){
            $(element).addClass(animation_class);
        }
    }
});