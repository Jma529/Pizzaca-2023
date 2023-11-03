<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Pizzaca
 */



if( have_posts() ) : ?>

<section class="menu-loop">
      
      <div class="archive-flex">

        <?php while( have_posts() ) : the_post(); 
          
          // Variables
          $image = get_the_post_thumbnail_url( get_the_ID(), 'full' );
          // $custom_title = get_field('page_custom_title');
          // $sub_title = get_field('page_subtitle');
          
          ?>

          <article class="post-tile" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <a href="<?php the_permalink(); ?>" class="image menu-overlay" <?php if($image) : ?> style="background-image: url('<?php echo $image ?>');"<?php endif; ?>>
							<h2><?php the_title(); ?></h2>

						</a>
          </article>
        <?php endwhile; ?>
      </div>
    </div>
  </section>

	<?php endif;

