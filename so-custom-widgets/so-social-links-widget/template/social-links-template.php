<ul>

<?php 

foreach ($social_links as $social_link):
    $label = $social_link['label'] != "" ? $social_link['label'] : false;
    $icon_src = wp_get_attachment_image_src($social_link['icon'], 'full', true)[0];
    $url = $social_link['url'];
    $id = $social_link['id'] != "" ? $social_link['id'] : false;
    $classes = $social_link['classes'] != "" ? $social_link['classes'] : false;

    ?>
    
    <li>
        <a <?= $classes ? 'class="'. $classes . '"' : '' ?> href="<?= $url ?>" target="_blank" rel="noopener">
            <img class="style-svg" src="<?= $icon_src ?>">
        </a>
    </li>

<?php 

endforeach;

?>

</ul>