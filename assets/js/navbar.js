jQuery(document).ready(function($) {
    
    /* -------------------------------------------------------------------------- */
    /*                            ACTIVE NAVBAR BUTTON                            */
    /* -------------------------------------------------------------------------- */

    var about = { id: '#about', link_id: '#about-link' }
    var skills = { id: '#skills', link_id: '#skills-link' }
    var portfolio = { id: '#portfolio', link_id: '#portfolio-link' }
    var contact = { id: '#contact', link_id: '#contact-link' }

    $(document).scroll(function () { 
        isActiveNavLink(about);
        isActiveNavLink(skills);
        isActiveNavLink(portfolio);
        isActiveNavLink(contact);
    });


    function isActiveNavLink(object){

        let currentTop = $(document).scrollTop();
        let scrollTop = $(object.id).offset().top;
        let height = $(object.id).height();

        if((currentTop+200) > scrollTop && (currentTop+200) < scrollTop + height){
            $(object.link_id).addClass('active');
        }else{
            $(object.link_id).removeClass('active');
        }
    }

});