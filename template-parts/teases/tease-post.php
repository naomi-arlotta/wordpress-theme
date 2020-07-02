
<article class="tease<?php echo $post->post_type ?>">

    <a href="<?php the_permalink(); ?>" title="<?php  the_title_attribute();?>">
        <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
    </a>

    <?php $categories = get_the_category();?>

    <?php if (!empty($categories) && isset($categories[0])) :?>
        <?php
        $link_categoria = get_category_link($categories[0]);
        $nome_categoria = $categories[0]->name;
        ?>
        <a href ="<?php echo $link_categoria; ?>"><span class="categoria"> <?php echo $nome_categoria ?> </span></a>  
    <?php endif ?>
    
    <span class="data-copy"><?php the_date(); ?></span>  <br>
    

    <a href="<?php the_permalink(); ?>" title="<?php  the_title_attribute();?>"><span class="cat-title"> <?php the_title(); ?> </span> </a>
</article>