<nav>
    <ul class="flex justify-center items-center text-center">            
        
        <?php foreach ($menu_items as $menu_item): 
            
            $id = $menu_item['id'];
            $link_id = $menu_item['link_id'];
            $label = $menu_item['label'];
            $src = wp_get_attachment_image_src($menu_item['icon'], 'full', true)[0]; 
            
            ?>

            <li class="inline-block">

                    <a id="<?= $id ?>" class="nav-link" href="#<?= $link_id ?>">                        
                        <img class="style-svg nav-link__icon" src="<?= $src ?>">
                    </a>              

            </li>

        <?php endforeach; ?>

    </ul>
</nav>