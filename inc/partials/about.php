<main id="about" class="about inside-card pt-12 pb-12">

    <div class="grid grid-cols-2 lg:mx-16 lg:items-start">
        
        <div class="about__column1 order-2 text-secondary-500 col-span-2
                    md:order-1 md:col-span-1">
            <h1 class="about__title title-section mb-4 text-center init-fadeInL2R
                       md:mb-6 md:text-left">
                ¡Hola! Soy Carlos Merizalde
            </h1>
        
            <div class="about__social-links mb-6 init-fadeInZoom
                        md:hidden">
                <?php is_dynamic_sidebar('wt_social_links') ? dynamic_sidebar('wt_social_links') : '' ?>
            </div>

            <p class="about__paragraph text-base leading-8 text-justify mb-8 init-fadeInL2R
                      md:text-left">
                <?= get_the_excerpt() ?>
            </p>

            <div class="about__buttons flex justify-center flex-col init-fadeInL2R
                        sm:flex-row md:justify-start">
                <a class="btn--primary inline-block whitespace-nowrap mb-4
                          sm:mb-0 sm:mr-4" href="<?= get_field('curriculum_vitae', $post) ?>" target="_blank" rel="noopener">
                    Ver mi CV
                </a>
                <a href="#contact" class="btn--primary inline-block whitespace-nowrap">
                    Contactarme
                </a>
            </div>            
        </div>

        <figure class="about__column2 order-1 md:order-2 col-span-2 md:col-span-1">
            <img class="about__photo mx-auto md:ml-auto md:mr-0 w-11/12 mb-10 md:mb-0 init-fadeInR2L" src="<?php the_post_thumbnail_url() ?>" alt="">
        </figure>
    </div>
</main>