<?php 
    // $categories = get_categories( array(
    //     'orderby' => 'name',
    //     'order'   => 'ASC',
    //     'hide_empty' => true
    // ) );
    $categories = get_field('categories_section_categories');
    $section_title = get_field('categories_section_section_title');
?>

<!-- sezione categorie -->
<section class="section section-categories bg-light section-y-padding">

    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <?php if($section_title): ?>
                <h2 class="text-primary text-uppercase"><?php echo $section_title; ?></h2>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
        <?php
            foreach( $categories as $category ) : 
                $image = get_field('featured_image', $category);
                $cat_url = get_category_link( $category->term_id );
                $description = sprintf( esc_html__( 'Description: %s', 'sam-theme' ), $category->description );
                $count = sprintf( esc_html__( 'Post Count: %s', 'sam-theme' ), $category->count );
                ?>
                <div class="col-12 col-md-6 my-3">
                    <article class="bg-dark tease-category">
                        <div class="object-fit-wrap position-absolute">
                        <?php
                            if( !empty( $image ) ): ?>
                                <img src="<?php echo esc_url($image['url']); ?>" class="img-fluid" alt="<?php echo esc_attr($image['alt']); ?>" width="100%" height="100%" />
                            <?php 
                            endif;?>
                        </div>
                        <div class="tease-content p-3 position-relative d-flex h-100 align-items-end">
                            <div>
                                <h2 class="text-white font-weight-bold text-uppercase mb-2"><?php echo $category->name ?></h2>
                                <a href="<?php echo $cat_url; ?>" class="btn btn-primary text-uppercase btn-lg rounded-0"><?php echo __('Continua','sam-theme')?></a>
                            </div>
                        </div>
                    </article>
                </div>
                <?php
            endforeach;
            ?>  
        </div>
    </div>
    
</section>

<?php
wp_reset_postdata(); 
?>