<?php
 //the home page blog section
?>

<?php

$args = array(
    'post-per-page' => 4,
    'post_type' => 'post',
    'order' => 'DESC',
    'category_name' => 'categoria-uno',
    'post_status' => 'publish',
);
 
// The Query
$the_query = new WP_Query( $args );

?>

<section>
    <div class="container">
        <div class="row"> 
        
            <div class="col-12 mt-5 mb-5">
                <h2>BLOG</h2>
            </div>

        <?php //the loop
            if ( $the_query->have_posts() ) {
            
            while ( $the_query->have_posts() ) {
                $the_query->the_post();?>
                
                <div class="col-lg-3 col-md-6"> 
                    <?php 
                    get_template_part('template-parts/teases/tease-post')
                    ?>
                </div>
        <?php
                
                
                }
                
            } else {
                    // no posts found
                }
        ?>
        <?php
            /* Restore original Post Data */
            wp_reset_postdata();
        ?>

        </div>

        <div class="row"> 
            <div class="col-12 mt-5 mb-5">
                <a href="#" class="btn btn-primary text-uppercase rounded-0 mt-5 mb-5">Continua</a>   
            </div>
        </div>

    </div>
</section>