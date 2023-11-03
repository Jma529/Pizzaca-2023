<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Pizzaca
 */



if( have_posts() ) : ?>

<section class="event-loop">
      
      <div class="archive-flex">

        <?php while( have_posts() ) : the_post(); 
          
          // Variables
          $image = get_the_post_thumbnail_url( get_the_ID(), 'full' );
          // $custom_title = get_field('page_custom_title');
          // $sub_title = get_field('page_subtitle');
          
          ?>

          <article class="post-tile" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="image" <?php if($image) : ?> style="background-image: url('<?php echo $image ?>');"<?php endif; ?>>

						</div>
          </article>
        <?php endwhile; ?>
      </div>
    </div>
  </section>

	<?php endif;

