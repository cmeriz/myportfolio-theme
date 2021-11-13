<?php 

/* -------------------------------------------------------------------------- */
/*                              STANDARD QUERIES                              */
/* -------------------------------------------------------------------------- */

function wt_standard_post_query($post_type, $perpages, $order, $orderby, $template_part){        
    $args = array(
        'post_type' => $post_type,
        'posts_per_page' => 10000,
        'order' => $order,
        'orderby' => $orderby
    );

    $query = new WP_Query($args);

    while($query->have_posts()): $query->the_post();
        get_template_part($template_part);
    endwhile; wp_reset_postdata();
}

// --------------------------------------------------------------------------
//                                AJAX QUERIES                               
// --------------------------------------------------------------------------

function wt_get_single_project(){

    $post_name = $_GET['post_name'];

    $args = array(
        'post_type' => 'projects',
        'name' => $post_name
    );

    $project = new WP_Query($args);

    $gallery_ids = get_post_custom($project->post->ID)['_gallery'] ? get_post_custom($project->post->ID)['_gallery'][0] : NULL;
    $gallery_urls = array();

    if(!is_null($gallery_ids)){
        $gallery_ids = explode(",", $gallery_ids);

        foreach($gallery_ids as $photo_id){
            array_push($gallery_urls, wp_get_attachment_url($photo_id));
        }
    }

    $response = array(
        'title' => $project->post->post_title,
        'excerpt' => $project->post->post_excerpt,
        'content' => $project->post->post_content,
        'gallery_urls' => $gallery_urls,
        'ext_url' => get_field('url', $project->post),
        'technologies' => get_the_terms($project->post, 'technologies')
    );  

    echo json_encode(
        $response
    );

    exit();

}
add_action('wp_ajax_wt_get_single_project', 'wt_get_single_project');
add_action('wp_ajax_nopriv_wt_get_single_project', 'wt_get_single_project');


/* -------------------------------------------------------------------------- */
/*                           PROJECTS TO SHOW QUERY                           */
/* -------------------------------------------------------------------------- */

function wt_portfolio_projects($post_type, $perpages, $order, $orderby, $template_part){        
    $args = array(
        'post_type' => $post_type,
        'posts_per_page' => 10000,
        'order' => $order,
        'orderby' => $orderby
    );

    $query = new WP_Query($args);

    while($query->have_posts()): $query->the_post();
        get_template_part($template_part);
    endwhile; wp_reset_postdata();
}