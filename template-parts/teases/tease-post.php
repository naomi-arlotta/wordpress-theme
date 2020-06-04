<article class="tease<?php echo $post->post_type ?>">

    <a href="<?php the_permalink(); ?>" title="<?php  the_title_attribute();?>">
        <?php the_post_thumbnail('full', array('class' => 'your-class-name')); ?>
    </a>

    <?php $categories = get_the_category();?>
    <!-- <img src="https://source.unsplash.com/random" class="img-fluid" width="270px" height="255px"><br>  -->

    <?php if (!empty($categories) && isset($categories[0])) :?>
        <?php
        $link_categoria = get_category_link($categories[0]);
        $nome_categoria = $categories[0]->name;
        ?>
        <a href ="<?php echo $link_categoria; ?>"><span class="categoria"> <?php echo $nome_categoria ?> </span></a>  
    <?php endif ?>
    
    <span class="data-copy"><?php the_date(); ?></span>  
    <br> <b>Lorem ipsum doloro itaque culpa perferendis aliquid, 
    dolor dolorum enim exercitationem molestias!</b>

    <a href="<?php the_permalink(); ?>" title="<?php  the_title_attribute();?>"> <?php the_title(); ?> </a>
</article>