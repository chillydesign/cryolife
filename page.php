<?php get_header(); ?>

	<main role="main">

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<div class="wrapper"><?php //the_content(); ?></div>
				<!-- Leave the_content commented at. This is a wonky hack that circumvents the Bookly block : on the booking page I have simply added the bookly form twice, once in the content that is not displayed and once in the section loop that is displayed. Despite not being displayed having the form in the content loads the necessary files. -->
			<?php endwhile; endif; ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php $category = get_field('category'); ?>
				<?php include('section-loop.php'); ?>

			</article>
			<!-- /article -->

	</main>


<?php get_footer(); ?>
