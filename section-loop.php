<?php

if( have_rows('sections') ) {
	while ( have_rows('sections') ) : the_row();

		if (get_row_layout() == 'simple') {
			$backgroundclass = get_sub_field('background');
			$borderclass = get_sub_field('border');
			$contenu = get_sub_field('contenu');
			$followup = get_sub_field('followup');
			$intro = get_sub_field('intro');
			if ($followup == 1) { $followup = 'followup'; } else { $followup=''; }

			 ?>
			<section class="<?php echo $backgroundclass . ' ' . $borderclass . ' ' . $followup; ?>" <?php if($backgroundclass=="parallaxbackground"){ ?> style="background-image: url(<?php echo get_sub_field('background_image')['url']; ?>);" <?php } ?> >
				<div class="wrapper">
					<?php if($intro){?><div class="intro"><?php if($intro == 1) {echo get_sub_field('fullwidth_intro');} ?></div><?php } ?>
					<?php echo $contenu; ?>
				</div>
			</section>

		<?php }

		elseif (get_row_layout() == 'columns') {
			$backgroundclass = get_sub_field('background');
			$borderclass = get_sub_field('border');
			$intro = get_sub_field('intro');
			$conclusion = get_sub_field('conclusion');
			$row_count = count( get_sub_field('colonnes') );
			$followup = get_sub_field('followup');
			if ($followup == 1) { $followup = 'followup'; } else { $followup=''; }
			if($row_count == 1){ $col = "col-xs-12"; }
			elseif ($row_count == 2) { $col = "col-sm-6"; }
			elseif ($row_count == 3) { $col = "col-sm-4"; }
			elseif ($row_count == 4) { $col = "col-sm-3"; } ?>

			<section class="<?php echo $backgroundclass . ' ' . $borderclass . ' ' . $followup; ?>" <?php if($backgroundclass=="parallaxbackground"){ ?> style="background-image: url(<?php echo get_sub_field('background_image')['url']; ?>);" <?php } ?> >
				<div class="wrapper">
					<?php if($intro){?><div class="intro"><?php if($intro == 1) {echo get_sub_field('fullwidth_intro');} ?></div><?php } ?>

					<div class="row">
						 <?php while ( have_rows('colonnes') ) : the_row(); ?>
						 <?php $column_type = get_sub_field('column_type'); ?>
						 <?php if ($column_type == 'texte') { ?>
						 	<div class="<?php echo $col; ?>"><?php  the_sub_field('texte'); ?></div>
						 <?php } elseif ($column_type == 'image') { ?>
						 	<?php $image = get_sub_field('image'); ?>
						 	<div class="<?php echo $col; ?>">
						 		<img src="<?php echo $image['url']; ?>">
						 	</div>

						 <?php } elseif ($column_type == 'image + texte') { ?>
						 	<?php $image = get_sub_field('image'); ?>
						 	<?php $texte = get_sub_field('texte'); ?>
						 	<div class="<?php echo $col; ?>">
						 		<div style="background-image: url(<?php echo $image['url']; ?>);" class="sameheightimg"></div>
						 		<div><?php echo $texte; ?></div>
						 	</div>

						 <?php } elseif ($column_type == 'depliant') { ?>
							 <div class="<?php echo $col; ?>">
							 	<?php while ( have_rows('depliant') ) : the_row(); ?>
								 	<div class="foldies">
								 		<h6><?php the_sub_field('title'); ?></h6>
								 		<div class="foldies_content"><?php the_sub_field('content'); ?></div>
								 	</div>
							 	<?php endwhile ?>
							 </div>
						 <?php } ?>


						 <?php endwhile ?>
					</div>

					<?php if($conclusion == 1) {echo get_sub_field('fullwidth_conclusion');} ?>
				</div>
			</section>

		<?php }


		elseif (get_row_layout() == '3fullwidthcolumns') {
		$image1 = get_sub_field('image1');
		$image2 = get_sub_field('image2');
		$image3 = get_sub_field('image3');
		$text1 = get_sub_field('text1');
		$text2 = get_sub_field('text2');
		$text3 = get_sub_field('text3');
		$description1 = get_sub_field('description1');
		$description2 = get_sub_field('description2');
		$description3 = get_sub_field('description3');



		?>
		<section class="threepicsfullwidth">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="boop">
							<div class=" fullwidthclm" style="background-image: url(<?php echo $image1['url']; ?>);"></div>
							<div class="beep"><div class="fullwidthclmtxt"><?php echo $text1; ?></div><div class="fullwidthdesc"><?php echo $description1; ?></div></div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="boop">
							<div class=" fullwidthclm" style="background-image: url(<?php echo $image2['url']; ?>);"></div>
							<div class="beep"><div class="fullwidthclmtxt"><?php echo $text2; ?></div><div class="fullwidthdesc"><?php echo $description2; ?></div></div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="boop">
							<div class=" fullwidthclm" style="background-image: url(<?php echo $image3['url']; ?>);"></div>
							<div class="beep"><div class="fullwidthclmtxt"><?php echo $text3; ?></div><div class="fullwidthdesc"><?php echo $description3; ?></div></div>
						</div>
					</div>
				</div>
            </div>
		</section>

		<?php }

		elseif (get_row_layout() == 'gmap') {
			$backgroundclass = "gmap";
			$borderclass = get_sub_field('border');
			$coordinates = strval(get_sub_field('address'));
			$google_map = '[chilly_map location="' . $coordinates . '"]'; ?>


			<section style="padding:0" class="<?php echo $backgroundclass . ' ' . $borderclass; ?>" >
				<?php echo do_shortcode($google_map); ?>
			</section>

		<?php }

		elseif (get_row_layout() == 'slider') { ?>
		<?php $banner = get_sub_field('banner'); ?>

			<section class="slider  <?php if($banner){echo 'headerbanner';} ?>">
			<div class="showme" style="display:none;">
			<?php while ( have_rows('slide') ) : the_row(); ?>
				<?php $image = get_sub_field('image'); ?>
				<?php $text = get_sub_field('text'); ?>
				<div class="banner" style="background-image: url(<?php echo $image['url']; ?>);">
				<div class="wrapper"><?php the_sub_field('text'); ?></div>
				</div>
			<?php endwhile ?>

			</div>
				<ul class="bxslider">
					<?php while ( have_rows('slide') ) : the_row(); ?>
						 	<?php $image = get_sub_field('image'); ?>
						 	<li>
						 		<div class="slide_image" style="background-image:url(<?php echo $image['url']; ?>);"></div>
						 		<div class="slide_texte">
						 			<div class="wrapper"><?php the_sub_field('text'); ?></div>
						 		</div>
						 	</li>
					<?php endwhile ?>

				</ul>
			</section>

		<?php }
		elseif (get_row_layout() == 'slider_blueprint') { ?>

			<section class="blueprintslider">
				<ul class="bxslider">
					<?php while ( have_rows('slide') ) : the_row(); ?>
						 	<?php $image = get_sub_field('image'); ?>
						 	<?php $text = get_sub_field('text'); ?>
						 	<li>
						 		<div class="wrapper">
							 		<div class="row">
							 			<div class="col-sm-4"><img src="<?php echo $image['url']; ?>"></div>
							 			<div class="col-sm-8" style="background:#000;"><div class="slidertextblueprint"><?php echo $text; ?></div></div>
							 		</div>
							 	</div>
						 	</li>
					<?php endwhile ?>

				</ul>
			</section>

		<?php }

		elseif (get_row_layout() == 'gallery') { ?>
		<?php $followup = get_sub_field('followup'); ?>


		<?php if ($followup == 1) { $followup = 'followup'; } else { $followup=''; }?>

			<section class="gallery <?php echo $followup; ?>">
				<div class="wrapper">

					<?php $count=1; ?>
					<?php $i=1; ?>
					<ul class="album_titles">
						<?php while ( have_rows('album') ) : the_row(); ?>
						<li class="<?php echo str_replace(' ', '', get_sub_field('title')); ?> <?php if($count==1){echo 'current_title'; } ?> "><?php the_sub_field('title'); ?></li>
						<?php $count++; ?>
						<?php endwhile ?>
					</ul>
					<?php while ( have_rows('album') ) : the_row(); ?>
					<?php $images = get_sub_field('photos'); ?>
					<ul class="<?php echo str_replace(' ', '', get_sub_field('title')); ?> album 	<?php if($i==1){echo 'current_album'; } ?>">

						<?php foreach( $images as $image ): ?>
			            <li class="grid-item">
			                <a class="gallery-item" href="<?php echo $image['url']; ?>">
			                     <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
			                </a>
			                <p><?php echo $image['caption']; ?></p>
			            </li>
			        <?php endforeach; ?>
					</ul>

					<?php $i++ ; ?>
					<?php endwhile ?>



				</div>

			</section>

		<?php } elseif (get_row_layout() == 'homme_hydrojet') { ?>
			<section style="background:black; color:white; padding-bottom:30px;">
				<div class="wrapper" style="text-align:center"><h2>Zones de massage de l'HydroJet</h2></div>
				<div class="wrapper"><p>Grâce à la variété de mouvements et de surfaces de massage proposée par l'Hydro Jet, nous pourrons adapter ce traitement à vos besoins. L'hydromassage permet entre autres de masser vos muscles par résonnance vibratoire, libérer vos cartilages grâce à un mouvement elliptique, améliorer votre circulation sanguine grâce à la vasodilatation engendrée par la chaleur du matelas, améliorer la récupération inflammatoire des muscles ou simplement diminuer votre cellulite. L'hydromassage permet également de masser tout le corps de la femme enceinte tout en lui permettant de rester sur le dos.</p>
			</section>
			<section class="homme_hydrojet followup">
				<div class="wrapper">
					<div class="hydrojet_man"><img src="<?php echo get_template_directory_uri ()?>/img/hydrojet-man.jpg"></div>
					<div class="bubble bubble_mollets"><span>Mollets</span></div>
					<div class="bubble bubble_adducteurs"><span>Ischios</span></div>
					<div class="bubble bubble_quadri"><span>Zone pelvienne</span></div>
					<div class="bubble bubble_epaules"><span>Epaules</span></div>
					<div class="bubble bubble_cervicales"><span>Cervicales</span></div>
					<div class="bubble bubble_a"><span>Quadriceps</span></div>
					<div class="bubble bubble_b"><span>Adducteurs</span></div>
					<div class="bubble bubble_c"><span>Intestins</span></div>
					<div class="bubble bubble_d"><span>Lombaires</span></div>
					<div class="bubble bubble_e"><span>Dos</span></div>
					<div class="bubble bubble_f"><span>Disques vertébraux</span></div>
				</div>


			</section>
		<?php }




















	endwhile;
}
?>
