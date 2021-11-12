<ul class="technologies-carousel">

<?php 

foreach($technologies as $technology):
    ?>

        <li>
            <div>
                <img src="<?= wp_get_attachment_url($technology['image']) ?>">
            </div>
        </li>

    <?php
endforeach;

?>

</ul>