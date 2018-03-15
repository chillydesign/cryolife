<?php get_header(); ?>

	<main role="main">
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<section class="fond-gris bordure-bas defaut"> <div class="wrapper"> <h1><?php the_title(); ?></h1> </div></section>
			<section>
				<div class="wrapper">
					<?php $id = get_post_thumbnail_id(); ?>
					<?php $url = wp_get_attachment_image_src( $id ,  'large' )[0]; ?>
					<?php $date_projet = get_field('date_projet'); ?>
					<?php $champ_supplementaire = get_field('champ_supplementaire'); ?>
					<?php $a_propos = get_field('a_propos'); ?>
					<div class="row">
						<div class= "col-md-7 col-sm-6">
							<div style="width:100%; padding: 40%; background: url(<?php echo $url; ?>) no-repeat; background-size: cover;"></div>
						</div>
						<div class= "col-md-5 col-sm-6">
							<h5>Champ supplémentaire</h5>
							<p><?php echo $champ_supplementaire; ?> </p>
							<h5>Date</h5>
							<p><?php echo $date_projet; ?></p>
							<h5>A propos de ce projet</h5>
							<p><?php echo $a_propos; // Dynamic Content ?></p>
						</div>
					</div>
				</div>
			</section>

		</article>
		<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

			</article>
			<!-- /article -->

		<?php endif; ?>
	</main>

<?php get_footer(); ?>
