<?php 


foreach($contact_info as $contact):

    $label = $contact['label'];
    $icon_src = wp_get_attachment_image_src($contact['icon'], 'full', true)[0];
    $data = $contact['data'];

    ?>

        <div class="contact-data">
            <img class="contact-data__icon style-svg" src="<?= $icon_src ?>">
            <h3 class="contact-data__label" class="font-semibold mb-2"><?= $label ?></h3>
            <p class="contact-data__content"><?= $data ?></p>
        </div>

    <?php
endforeach;

?>




