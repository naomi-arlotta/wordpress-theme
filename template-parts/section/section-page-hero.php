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

<?php
    $page_hero = get_field('page_hero');
    // var_dump($page_hero);
    if( $page_hero):

    ?>

<section class="section section-y-padding bg-secondary page-hero" style="background-image: url('<?php the_post_thumbnail_url('full'); ?>');">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                        <div class="page-hero-content d-flex justify-content-center align-items-center">
                            <div class="text-center">
                            <h1>
                            <?php 
                            if( isset($page_hero['title']) && $page_hero['title']){ 
                                echo $page_hero['title']; 
                            } else {
                                the_title();
                            }
                            ?>
                            </h1>

                        <?php if(isset ($page_hero['content'])&& $page_hero['content']):?>
                            <p class="text-white p-32px"><?php echo $page_hero['content']?></p>
                        <?php endif; ?>
                        <?php if(isset ($page_hero['call_to_action_'])&& $page_hero['call_to_action_']):?>
                            <a href="<?php echo $page_hero['call_to_action_']['url'] ?>" target="<?php echo $page_hero['call_to_action_']['target'] ?>" class="btn btn-primary btn-lg text-uppercase rounded-0"><?php echo $page_hero['call_to_action_']['title'] ?></a>
                        <?php endif; ?>

                    
                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php endif; ?>
