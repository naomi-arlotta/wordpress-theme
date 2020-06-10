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
    $who_we_are = get_field('who_we_are');
    // var_dump($page_hero);
    if( $who_we_are):

    ?>

<!-- sezione chi siamo -->
<section class="section section-who-we-are">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 section-y-padding">
                            
                        <h2 class="text-primary text-uppercase"><?php 
                            if( isset($who_we_are['title']) && $who_we_are['title']){ 
                                echo $who_we_are['title']; 
                            } else {
                                the_title();
                            }
                            ?>
                        </h2>
                        <p>
                            <?php 
                            if( isset($who_we_are['content']) && $who_we_are['content']){ 
                                echo $who_we_are['content']; 
                            } else {
                                the_title();
                            }
                            ?>
                        </p>
                         <?php if(isset($who_we_are['call_to_action']) && $who_we_are['call_to_action']):?>
                            <a href="<?php echo $who_we_are['call_to_action']['url'] ?>" target="<?php echo $who_we_are['call_to_action']['target'] ?>" class="btn btn-primary btn-lg text-uppercase rounded-0"><?php echo $who_we_are['call_to_action']['title'] ?></a>
                        <?php endif; ?>                    
                         </div>
                        
                         <div class="col-12 col-md-6 d-none d-md-block">

                         <?php if( !empty( $who_we_are['image'] ) ): ?>
                         <img src="<?php echo esc_url($who_we_are['image']['url']); ?>" alt="<?php echo esc_attr($who_we_are['image']['alt']); ?>" />
                         <?php endif; ?>
                        
                        
                    </div>
                </div>
            </div>
        </section>

        <?php endif; ?>