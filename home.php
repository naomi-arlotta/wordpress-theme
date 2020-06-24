<?php
/**
 * page-blog
 */ ?>

<?php get_header();?>

<?php 

$archive_title = __('Blog', 'theme');

?>

<section>
    <div class="container">
        <div class="row mb-5"> 

            <div class="col-12 mt-5 mb-5">
                <h1 class="text-primary text-uppercase h1blog"> <?php echo $archive_title; ?> </h1>
                
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