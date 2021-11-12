<section id="contact" class="contact inside-card pt-12 pb-24">
    <div class="grid grid-cols-2 gap-8 lg:mx-16 items-center text-secondary-500">
    
        <figure class="contact__column1 col-span-1 hidden md:block">
            <img class="mx-auto w-4/5 xs:w-full mb-10 init-fadeInL2R" src="<?php the_post_thumbnail_url() ?>" alt="">
        </figure>

        <div class="contact__column2 col-span-2 md:col-span-1">
            <h2 class="contact__title title-section mx-auto mb-10 text-center md:text-left init-fadeInR2L">
                Contáctame
            </h2>
            <p class="contact__paragraph leading-8 text-base text-justify md:text-left mb-8 init-fadeInR2L">
                Si necesitas información adicional o estás interesado en trabajar conmigo puedes contactarme a través de los medios detallados a continuación.
            </p>

            <div class="contact__info init-fadeInZoom">
                <?php is_dynamic_sidebar('wt_contact_info') ? dynamic_sidebar('wt_contact_info') : ''; ?>
            </div>

        </div>

    </div>
</section>