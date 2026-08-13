<?php

/**
 * Template Name: Support and Onbaording Page
 */


get_header();

while ( have_posts() ) :
    the_post();
    the_content();
endwhile;

get_footer();