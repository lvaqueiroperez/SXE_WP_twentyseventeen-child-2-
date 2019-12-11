<?php
/**
* Template Name: pruebaTemplate1
*
* @package WordPress
* @subpackage twentyseventeen-child
* @since Twenty Fourteen 1.0
*/
get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/page/content', 'page' );
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			endwhile; // End of the loop.
			?>
			
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php
if(is_page("Hello World Page")){
get_footer("helloWorldPage");
}else{
    get_footer("pruebaTemplate1");
}