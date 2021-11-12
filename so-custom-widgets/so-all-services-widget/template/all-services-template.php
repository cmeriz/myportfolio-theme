<?php 

function so_all_services($number = 10){

    $args = array(
        'post_type' => 'THE CUSTOM POST TYPE ID CREATED TO STORE THIS INFORMATION',
        'posts_per_page' => $number,
        'order' => 'ASC'
    );

    $all_services = new WP_Query($args);
    while($all_services->have_posts()): $all_services->the_post();

    var_dump($all_services); // <-- Check if the loop is working
    
?>  
        <!--
            Here add all the HTML you want to display the SINGLE service:
            
            REMEMBER: If you want to use this HTML structure for another page use generic classes in here.

            These are the functions you can use to present the posts information:
            the_post_thumbnail();
            the_permalink();
            the_title();
            the_excerpt();
            the_content();
            the_field();    
        -->
<?php
    endwhile;
    wp_reset_postdata();
}

?>

<!-- *********** HEADLINE IN CASE YOU NEED IT *********** -->

    <!-- <headline-container> -->
        <!-- <headline-content> -->
            <!-- <title> -->
                <?= $instance['front-title'] ?>
            <!-- </title> -->
            <!-- <subtitle> -->
                <?= $instance['front-subtitle'] ?>
            <!-- </subtitle> -->
        <!-- </headline-content> -->
    <!-- </headline-container> -->




<!-- *********** THE WIDGET *********** -->

    <!-- <widget-container> -->
        <!-- <widget-content> -->
        <?php so_all_services($instance['amount']); ?>
    <!-- </widget-content> -->
    <!-- </widget-container> -->