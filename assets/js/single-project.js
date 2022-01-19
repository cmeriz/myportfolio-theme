jQuery(document).ready(function($) {

    var modal_background = $('.modal-background');
    var modal = $('.project-modal-container');
    var modal_content = $('.project-modal__content');

    $('body').on('click', '.project-card__button', function(e){
        e.preventDefault();

        openModal();
        $(modal_content).append('<span class="loader absolute inset-0 m-auto"></span>');

        var post_name = $(this).attr('data-project');

        $.ajax({
            type: "GET",
            url: admin_url.ajax_url,
            data: { action: 'wt_get_single_project', post_name},
            success: function (data) {
                var project = JSON.parse(data);
                modal_content.empty();

                // Generate HTML
                var html = `
                
                    <div class="single-project absolute inside-card inset-0 py-16 text-secondary-500 overflow-y-scroll">                        
                        <div class="grid grid-cols-2 gap-8 items-center">
                `;


                if(project.gallery_urls){
                    html += '<div class="single-project__carousel col-span-2 lg:col-span-1 mb-12 lg:mb-0 shadow-lg">';
                    project.gallery_urls.forEach(photo_url => 
                        html += `<div class="single-project__carousel-item"><img src="${photo_url}"></div>`
                        );
                    html += '</div>';
                }

                html += `         
                            <article class="single-project__details col-span-2 lg:col-span-1">
                                <h3 class="single-project__title font-bold text-2xl mb-2">${project.title}</h3>
                                <span class="single-project__excerpt block text-xl mb-6">${project.excerpt}</span>
                                <div class="single-project__features mb-4">
                                ${project.content}
                                </div>        
                `;

                if(project.technologies){
                    html += '<ul>';
                    project.technologies.forEach(technology => html += `<li class="single-project__technology inline-block bg-gray-200 text-sm text-gray-500 font-semibold py-1 px-2 mr-1 mb-1 rounded-lg">${technology.name}</li>`);
                    html += '</ul>';
                }

                if(project.web_url){
                    html += `<a class="btn--primary block xs:inline-block mt-6 mb-4 xs:mb-0 xs:mr-4" href="${project.web_url}" target="_blank" rel="noopener">Visitar sitio</a>`;
                }

                if(project.github_url){
                    html += `
                        <a class="btn--primary--outlined block xs:inline-block mt-6 mb-4 xs:mb-0" href="${project.github_url}" target="_blank" rel="noopener">Repositorio</a>`
                    ;
                }

                html += `
                            </article>
                        </div>
                    </div>
                `

                $(modal_content).append(html);


                $('.single-project__carousel').slick({
                    autoplay: true,
                    infinite: true,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                    dots: true,            
                });                
            }
        });

    });

    $('.project-modal__close-button').click(closeModal);

    function openModal(){
        modal_background.fadeIn();
        modal.addClass('slideInD2U')
             .removeClass('slideOutU2D');
        $('html, body').css('overflow', 'hidden');
    }

    function closeModal(){
        modal_background.fadeOut();
        modal.addClass('slideOutU2D')
             .removeClass('slideInD2U');
        modal_content.empty();
        
        $('html, body').css('overflow', 'initial');
    }

});