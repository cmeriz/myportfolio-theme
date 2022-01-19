<?php 

    $project = get_post();
    $title = $project->post_title;
    $excerpt = $project->post_excerpt;
    $post_url = get_permalink();
    $web_url = get_field('web_url', $project);
    $repository_url = get_field('github_url', $project);
    $technologies = get_the_terms($project, 'technologies');

?>

<article class="project-featured flex flex-col ml:flex-row items-center gap-16 init-fadeInD2U">
    <div class="project-featured__content w-full ml:w-7/12">
        <h3 class="project-featured__title text-3xl font-medium leading-normal ml:leading-normal mb-4"><?= $title ?></h3>
        <p class="project-featured__excerpt text-base leading-8 mb-4"><?= $excerpt ?>
            <?php if($web_url): ?>
                Puedes visitar el sitio <a href="<?= $web_url ?>" target="_blank" rel="noopener">aquí</a>.
            <?php endif; ?>
        </p>

        <ul class="project-featured__technologies mb-4">
            <?php foreach($technologies as $technology): ?>
                <li class="project-featured__technology inline-block bg-gray-200 text-sm text-gray-500 font-semibold py-1 px-2 mr-1 mb-1 rounded-lg">
                    <?= $technology->name ?>
                </li>
            <?php endforeach; ?>
        </ul>

        <div class="project-featured__buttons flex flex-col sm:flex-row gap-4">
            <a href="<?= $post_url ?>" class="btn--primary">Saber más</a>

            <?php if($repository_url): ?>
                <a href="<?= $repository_url ?>" class="btn--primary--outlined" target="_blank" rel="noopener">Repositorio</a>
            <?php endif; ?>
            
        </div>
    </div>
    <figure class="project-featured__img w-full ml:w-5/12">
        <?php the_post_thumbnail() ?>
    </figure>
</article>