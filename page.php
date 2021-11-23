<?php 
    get_header(); 
    
    global $post;
    $page = $post->post_name;

    if(is_page($page))
        get_template_part('template-parts/content', $page);
    else
        // 
?>
<?php get_footer() ?>