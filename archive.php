<?php
/**
 * The homepage template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Sam_Theme
 * @since 1.0.0
 */
?>


<?php get_header();?>

<?php 

$archive_title = __('Archive', 'theme');

if(is_category()) {
    $archive_title = single_cat_title('',false);
} elseif(is_post_type_archive()) {
    $archive_title = post_type_archive_title('', false);
}

?>

<section>
    <div class="container">
        <div class="row"> 

            <div class="col-12 mt-5 mb-5">
                <h1 class="text-primary"> <?php echo $archive_title; ?> </h1>
                
            </div>


                <?php  // The Loop
                    if (have_posts() ) {
                      
                        while (have_posts() ) {
                            the_post(); ?> 


                            <div class="col-lg-3 col-md-6"> 
                              <?php get_template_part('template-parts/teases/tease-post') ?>
                            </div>
                <?php
                        }
                        
                    } else {
                        // no posts found
                    }
                    /* Restore original Post Data */
                    wp_reset_postdata();
                ?>

        </div>
        <div class="container">
            <div class="row">
                 <div class="col-12">
                    <?php get_template_part('template-parts/pagination'); ?>
                </div>
            </div>
        </div>
     </div>
</section>

<?php get_footer();?>