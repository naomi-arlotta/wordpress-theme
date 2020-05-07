<?php
/**
 * The template file for pages
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Sam_Theme
 * @since 1.0.0
 */
?>

<?php get_header(); ?>

<?php

if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        //display post content
        //print("<pre>".print_r($post,true)."</pre>");
    ?>
    
    <h1> 
        <?php the_title(); ?>
    </h1>
    
    <div>  
        <?php the_content(); ?>
    </div>
    <small>   
        <?php the_excerpt(); ?> 
    </small>
    
    <?php
    endwhile;
else :
    _e( 'sorry, no posts matched your criteria.', 'samtheme');
endif;
?>




<?php get_footer(); ?>