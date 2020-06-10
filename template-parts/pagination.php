<?php 
$prev_text = '<svg xmlns="http://www.w3.org/2000/svg" width="10" height="17" viewBox="0 0 10 17">
<path fill="#4A4A4A" fill-rule="nonzero" d="M.589 8.721l7.555 7.69a.287.287 0 0 0 .417-.002l.851-.888a.316.316 0 0 0 .087-.222.317.317 0 0 0-.09-.22L2.925 8.5 9.41 1.92a.317.317 0 0 0 .09-.22.316.316 0 0 0-.087-.221L8.563.59a.29.29 0 0 0-.418-.003L.59 8.278a.317.317 0 0 0 0 .443H.588z""/>
</svg>';
$next_text = '<svg xmlns="http://www.w3.org/2000/svg" width="8" height="17" viewBox="0 0 8 17">
<path fill="#4A4A4A" fill-rule="nonzero" d="M7.43 8.279L1.555.589C1.464.468 1.32.47 1.23.59l-.662.888a.37.37 0 0 0-.067.222c0 .083.025.162.07.22L5.613 8.5.57 15.08a.369.369 0 0 0-.07.22.37.37 0 0 0 .068.221l.662.888c.045.06.103.091.163.091.058 0 .116-.03.16-.088l5.877-7.69A.37.37 0 0 0 7.5 8.5a.364.364 0 0 0-.07-.221z"/>
</svg>';
$posts_pagination = get_the_posts_pagination(
    array(
        'screen_reader_text' => ' ',
        'prev_text'=> $prev_text,
        'next_text' => $next_text,
        'mid_size' => 3
    )
);


// If we're not outputting the previous page link, prepend a placeholder with `visibility: hidden` to take its place.
if ( strpos( $posts_pagination, 'prev page-numbers' ) === false ) {
	$posts_pagination = str_replace( '<div class="nav-links">', '<div class="nav-links"><span class="prev page-numbers placeholder" aria-hidden="true">' . $prev_text . '</span>', $posts_pagination );
}

// If we're not outputting the next page link, append a placeholder with `visibility: hidden` to take its place.
if ( strpos( $posts_pagination, 'next page-numbers' ) === false ) {
	$posts_pagination = str_replace( '</div>', '<span class="next page-numbers placeholder" aria-hidden="true">' . $next_text . '</span></div>', $posts_pagination );
}


echo $posts_pagination;
?>

