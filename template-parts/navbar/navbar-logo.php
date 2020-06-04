<?php
/**
 * header logo template part
 * 
 */

// Image variables.
$navbar_logo = get_field('navbar_logo', 'option');

if( $navbar_logo ):

    $alt = $navbar_logo['alt'];
    $medium = $navbar_logo['sizes']['medium'];
    // print("<pre>".print_r($navbar_logo,true)."</pre>");
?>

    <a class="navbar-brand" href="<?php echo get_home_url(); ?>"><img src="<?php echo esc_url($medium); ?>" alt="<?php echo esc_attr($alt); ?>" /></a>

<?php else: 
    $blog_title = get_bloginfo( 'name' );    
?>
   <a class="navbar-brand" href="<?php echo get_home_url(); ?>"><?php echo $blog_title; ?> </a>    
   
<?php endif; ?>

