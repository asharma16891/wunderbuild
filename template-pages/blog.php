<?php
/**
 * Template Name: Blog
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();




?>

<main class="wb-blog">


    <!-- =====================================================
         ACF / GUTENBERG BLOCKS
    ====================================================== -->

    <?php
    while ( have_posts() ) :
        the_post();
        the_content();
    endwhile;
    ?>


 

    


    
   

</main>

<?php

wp_reset_postdata();

get_footer();