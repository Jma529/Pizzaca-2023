<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Pizzaca
 */

 get_header();
?>
	 <main class="<?php echo strtolower( get_post_type_object( get_post_type() )->labels->name ) . '-archive'; ?>">
	 		<div class="wrapper">
			 <?php if( is_post_type_archive( 'food-menu' ) ) : ?>
				<h1>Menus</h1>
				<?php else: ?>
				<h1><?php the_archive_title(); ?></h1>
				<?php endif; ?>
		 <?php
		 
		 // For certain post types, call in unique layout files that include extra sections
		 // The loop is handled in each of these files respectively 
		 if( is_post_type_archive( 'event' ) ) : 
			
			get_template_part( 'template-parts/content', 'events' );

		 elseif( is_post_type_archive('food-menu') ) : 
 
			get_template_part( 'template-parts/content', 'menus' );
 
 
		 // For everything else, create a standard archive layout with a post list
		 else : ?>
 
			 <section class="section bg-device-left">
				 <div class="container">
 
					 <?php if ( have_posts() ) : ?>
 
						 <div class="posts-list">
 
							 <?php while ( have_posts() ) : the_post();
 
 									get_template_part( 'template-parts/content', get_post_type() );
 
							 endwhile; ?>
 
						 </div>
 
					 <?php else :
 
						 get_template_part( 'template-parts/content', 'none' );
 
					 endif; 
					 
					 
					 ?>
					 
				 </div>
			 </section>
 
		 <?php endif; ?>
			</div>
	 </main>
 
 <?php

 
 get_footer();
 



