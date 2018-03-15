n<?php /* Template Name: Ateliers par styles Page Template */ get_header(); ?>

	<main role="main">
	<!-- section -->
	

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	<section class="banner" style="background-image: url(<?php echo get_field('banner_image')['url']; ?>);" ></section>
	<section>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php $atelier_loop = new WP_Query(
				 array(
					 'post_type' => 'atelier', 
					 'posts_per_page' => -1,
					 'orderby' => 'order')
				 ); ?>

				 <?php while ( $atelier_loop->have_posts() ) : $atelier_loop->the_post(); ?>
				 	<a href="<?php the_permalink(); ?>">
				 		<?php $id = get_post_thumbnail_id( $post_id ); ?>
				 		<?php $url = wp_get_attachment_image_src( $id ,  'large' )[0]; ?>
					 	<div style="width:100%; padding: 40%; background: url(<?php echo $url; ?>) no-repeat; background-size: cover;"></div>
					 	<h4><?php the_title(); ?></h4>
					 </a>
				 <?php endwhile; ?>
		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>

<?php get_footer(); ?>
