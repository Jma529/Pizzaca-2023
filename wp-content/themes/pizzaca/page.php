<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Pizzaca
 */

 // Variables 

 $content = get_field('content_field');

get_header();

// Variables 
$image = get_the_post_thumbnail_url( get_the_ID(), 'full' );
?>

	<main id="primary" class="site-main">
	<section class="top">
		<div class="wrapper">			
			<div class="content center">
				<h1 class="title"><?php the_title();?></h1>
				<div class="vertical">
				<?php if($content): ?>
					<p><?php echo $content; ?> </p>
					<?php else: ?>
					<p><?php the_content(); ?></p>
					<?php endif; ?>
				</div>
			</div>	
		</div>	
	</section>
	
	</main><!-- #main -->

<?php
get_footer();
