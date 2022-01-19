<?php 

get_header();

?>

<section id="post" class="post inside-card md:max-w-4xl mx-auto pt-16 pb-12 text-secondary-500">
    <div class="post__controls w-full md:w-3/4 mx-auto">
        <a href="<?= get_home_url(); ?>#portfolio" class="inline-flex items-center gap-2 mb-8">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd" />
                <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z" />
            </svg>
            <span>Volver a proyectos</span>
        </a>
    </div>
    
    <h1 class="post__title w-full md:w-3/4 mx-auto text-3xl md:text-5xl font-medium leading-normal md:leading-normal mb-8"><?php the_title(); ?></h1>
    <p class="post__excerpt w-full md:w-3/4 mx-auto mb-8"><?= get_the_excerpt(); ?></p>
    
    <figure class="post__img block mb-8">
        <?php the_post_thumbnail(); ?>
    </figure>
    <div class="post__content w-full md:w-3/4 mx-auto">
        <?php the_content(); ?>
    </div>
    
</section>


<?php

get_footer(); 

?>