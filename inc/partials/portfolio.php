<section id="portfolio" class="portfolio inside-card text-secondary-500 pt-12 pb-12 relative">
    
    <div class="w-full mx-auto ml:w-11/12 lg:w-10/12 mb-24">
        <h2 class="portfolio__title title-section mx-auto mb-16 text-center init-fadeInU2D">
            Proyectos destacados
        </h2>
        <div class="portfolio__featured flex flex-col gap-24">
            <?php wt_portfolio_projects('post', 10000, 'DESC', 'modified', 'published', 'inc/template-parts/project-featured') ?>
        </div>
    </div>

    <div class="w-full">
        <h2 class="portfolio__title title-section mx-auto mb-16 text-center init-fadeInU2D">
            Otros proyectos
        </h2>
        <div class="portfolio__others grid grid-cols-2 gap-8 items-center">
            <?php wt_portfolio_projects('projects', 10000, 'DESC', 'modified', 'published', 'inc/template-parts/project-card') ?>
        </div>
    </div>

    <div class="project-modal-container fixed inset-0 flex justify-center items-center init-slideInD2U">
        <div class="project-modal flex flex-col bg-white overflow-hidden">
            <div class="project-modal__navbar relative text-right">
                <button class="project-modal__close-button absolute right-0 top-0 z-10 p-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-300 hover:text-red-500 transition-colors" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>
            </div>

            <div class="project-modal__content flex-1 relative">
            </div>
        </div>
    </div>
    

</section>