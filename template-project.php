<?php /* Template Name: Project Page Template */ get_header(); ?>

	<main role="main">
		<!-- section -->

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<!-- Section Loop 1-->

				<?php $category = 'projet-avant'; ?>
				<?php include('section-loop.php'); ?>



				<!-- Project Loop -->
				<section class="project-gallery">
					<?php $projet_loop = new WP_Query(
					 array(
						 'post_type' => 'projet', 
						 'posts_per_page' => -1,
						 'orderby' => 'date')
					 ); ?>
					 <div class="wrapper-sm">
					 	<div class="row">
							 <?php while ( $projet_loop->have_posts() ) : $projet_loop->the_post(); ?>
							 <div class="col-md-3 col-sm-6" style="margin-bottom:30px;">
							 	<a href="<?php the_permalink(); ?>">
							 		<?php $id = get_post_thumbnail_id( $post_id ); ?>
							 		<?php $url = wp_get_attachment_image_src( $id ,  'large' )[0]; ?>
								 	<div style="width:100%; padding: 40%; background: url(<?php echo $url; ?>) no-repeat; background-size: cover;"></div>
								 	<h4><?php the_title(); ?></h4>
								 </a>
							 </div>
							 <?php endwhile; ?>
					</div>
				</section>


				<!-- Section Loop 1-->

				<?php $category = 'projet-apres'; ?>
				<?php include('section-loop.php'); ?>

				<br class="clear">

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>
	</main>

<?php get_footer(); ?>
