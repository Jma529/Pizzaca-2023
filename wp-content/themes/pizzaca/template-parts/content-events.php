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
					<div class="w-20">
            <div class="image">
							<img <?php if($image) : ?> src="<?php echo $image ?>');"<?php endif; ?>/>
						</div>
					</div>
					<div class="w-80">
						<h2><?php the_title(); ?></h2>
						<p>I am a description blah blah blah</p>
						<a href="<?php the_permalink();?>" class="button">Read more</a>
					</div>
          </article>
        <?php endwhile; ?>
      </div>
    </div>
  </section>

	<?php endif;

