<?php
    @ini_set( 'upload_max_size' , '64M' );
    @ini_set( 'post_max_size', '64M');
    @ini_set( 'max_execution_time', '300' );

    //remove <link rel='prev' title='' href=''/>
    remove_action('wp_head','adjacent_posts_rel_link_wp_head');
?>
