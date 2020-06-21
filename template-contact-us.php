<?php
/**
 * Template Name: Contact Us
 * 
 * https://developer.wordpress.org/themes/template-files-section/page-template-files/
 *
*/
?>
<?php get_header(); ?>

    <div class="container section-y-padding">
    <?php 
    if ( have_posts() ) {
        while ( have_posts() ) { the_post(); ?>
        <div class="row">
            <div class="col">
                <h1 class="text-primary text-uppercase"><?php  the_title(); ?></h1>
                
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                    <?php  the_content(); ?>
            </div>
            <div class="col-lg-6">
            <?php 
$location = get_field('location');
if( $location ): ?>
    <div class="acf-map" data-zoom="16">
        <div class="marker" data-lat="<?php echo esc_attr($location['lat']); ?>" data-lng="<?php echo esc_attr($location['lng']); ?>"></div>
    </div>
<?php endif; ?>
            </div>
            <div class="col-lg-4">
                    <?php 
                        $contact_form= get_field('contact_form');
                        echo do_shortcode( '[contact-form-7 id=' . $contact_form . ']' ); 
                    ?>
            </div>
        </div>
    </div>

    <?php
	} // end while
} // end if
?>

<?php get_footer(); ?>