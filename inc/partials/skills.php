<section id="skills" class="skills inside-card text-secondary-500 pt-12 pb-12">

    <h2 class="skills__title title-section mx-auto mb-16 text-center init-fadeInU2D">
        Mis Habilidades
    </h2>

    <div class="grid grid-cols-5 gap-x-8 items-start">
        
        <div class="skills__column1 col-span-5 lg:col-span-3">
            <div class="skills__grid w-full grid grid-cols-1 sm:grid-cols-2 gap-4 mb-12 xl:mb-0 text-center sm:text-left">
                <?php
                    wt_standard_post_query('skills', 10000, 'DESC', 'modified', 'inc/template-parts/skill-card');
                ?>
            </div>
        </div>

        <div class="skills__column2 technologies-container col-span-5 lg:col-span-2 init-fadeIn">
            <?php is_dynamic_sidebar('wt_technologies') ? dynamic_sidebar('wt_technologies') : ''; ?>
        </div>
    </div>
</section>