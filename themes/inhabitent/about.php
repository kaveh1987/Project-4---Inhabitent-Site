<?php
/**
 * The template for displaying all pages
 * Template name: About page
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
      <div class="about-page-hero"></div>
  <?php echo CFS()->get('our_story') ?>
	<?php echo CFS()->get('our_team') ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
