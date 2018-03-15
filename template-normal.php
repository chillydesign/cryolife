<?php /* Template Name: Normal Page Template */ get_header(); ?>

	<main role="main">

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<div><?php the_content(); ?></div>
			<?php endwhile; endif; ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php $category = get_field('category'); ?>
				<?php include('section-loop.php'); ?>

			</article>
			<!-- /article -->

	</main>


<?php get_footer(); ?>

