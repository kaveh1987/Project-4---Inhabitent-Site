<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="home-hero">
            <img src="http://tent.academy.red/wp-content/themes/inhabitent/images/inhabitent-logo-full.svg" class="logo" alt="Inhabitent full logo">
         </section>
				 <section class="product-info container">
				             <h2>Shop Stuff</h2>
				                            <div class="product-type-blocks">
				                                        <div class="product-type-block-wrapper">
				                         <img src="http://tent.academy.red/wp-content/themes/inhabitent/images/do.svg" alt="Do">
				                         <p>Get back to nature with all the tools and toys you need to enjoy the great outdoors.</p>
				                         <p><a href="http://tent.academy.red/product-type/do/" class="btn">Do Stuff</a></p>
				                      </div>
				                                        <div class="product-type-block-wrapper">
				                         <img src="http://tent.academy.red/wp-content/themes/inhabitent/images/eat.svg" alt="Eat">
				                         <p>Nothing beats food cooked over a fire. We have all you need for good camping eats.</p>
				                         <p><a href="http://tent.academy.red/product-type/eat/" class="btn">Eat Stuff</a></p>
				                      </div>
				                                        <div class="product-type-block-wrapper">
				                         <img src="http://tent.academy.red/wp-content/themes/inhabitent/images/sleep.svg" alt="Sleep">
				                         <p>Get a good night's rest in the wild in a home away from home that travels well.</p>
				                         <p><a href="http://tent.academy.red/product-type/sleep/" class="btn">Sleep Stuff</a></p>
				                      </div>
				                                        <div class="product-type-block-wrapper">
				                         <img src="http://tent.academy.red/wp-content/themes/inhabitent/images/wear.svg" alt="Wear">
				                         <p>From flannel shirts to toques, look the part while roughing it in the great outdoors.</p>
				                         <p><a href="http://tent.academy.red/product-type/wear/" class="btn">Wear Stuff</a></p>
				                      </div>
				                                  </div>
				                      </section>




	<?php
	   $args = array( 'post_type' => 'post', 'posts_per_page' => 3 );
	   $blog_posts = get_posts( $args ); // returns an array of posts
	?>
	<?php foreach ( $blog_posts as $post ) : setup_postdata( $post ); ?>

	<p><?php the_date(); ?></p>
	<?php the_post_thumbnail(); ?>
<h1>	<?php the_title(); ?></h1>

<a href="<?php the_permalink(); ?>"> </a>

	<?php endforeach; wp_reset_postdata(); ?>




</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
