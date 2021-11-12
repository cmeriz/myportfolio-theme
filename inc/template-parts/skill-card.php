<?php 

$skill = get_post();

?>

<article class="skill-card max-w-sm mx-auto p-8 sm:max-w-none init-fadeInZoom">
    <img class="skill__icon style-svg inline-block mb-3" src="<?php the_post_thumbnail_url(); ?>">
    <h1 class="skill__title text-lg font-semibold mb-1"><?= $skill->post_title ?></h1>
    <p class="skill__content text-sm"><?= $skill->post_content ?></p>
</article>