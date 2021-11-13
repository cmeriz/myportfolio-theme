<?php 

$project = get_post();
$name = $project->post_name;
$title = $project->post_title;
$excerpt = $project->post_excerpt;
$gallery_ids = get_post_custom($project->id)['_gallery'][0];
$show = get_field('visibility', $project->ID);

if($show):

?>

<article class="project-card relative col-span-2 lg:col-span-1 rounded-b-lg overflow-hidden lg:rounded-none mb-12 lg:mb-0 init-fadeInD2U">
    <?php the_post_thumbnail() ?>
    <div class="project-card__content p-6 
                lg:absolute top-0 right-0 bottom-0 left-0 
                flex justify-center sm:items-center flex-col 
                text-secondary-500 lg:text-white
                text-left sm:text-center">
        <h3 class="project-card__title text-xl font-bold mb-3 lg:mt-0 lg:mb-2"><?= $title ?></h3>
        <p class="project-card__excerpt mb-4 lg:mb-2"><?= $excerpt ?></p>
        <a data-project="<?= $name ?>" class="project-card__button btn--primary inline-block whitespace-nowrap cursor-pointer" target="_blank" rel="noopener">
            Ver detalles
        </a>
    </div>
</article>

<?php

endif;