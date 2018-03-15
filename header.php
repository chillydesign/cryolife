<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <?php $tdu = get_template_directory_uri(); ?>
        <link href="<?php echo $tdu; ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo $tdu; ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
        <link href="<?php echo $tdu; ?>/bootstrap.css" rel="stylesheet">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Centre Cryothérapie Genève">
		<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Lora:700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<link href="<?php echo $tdu; ?>/jquery.bxslider.css" rel="stylesheet" />
		<link href="//cdn.rawgit.com/noelboss/featherlight/1.3.5/release/featherlight.min.css" type="text/css" rel="stylesheet" />
		<link href="//cdn.rawgit.com/noelboss/featherlight/1.4.0/release/featherlight.gallery.min.css" type="text/css" rel="stylesheet" />
		<?php wp_head(); ?>


        <!-- JSON-LD markup generated by Google Structured Data Markup Helper. -->
<script type="application/ld+json">
{
  "@context" : "http://schema.org",
  "@type" : "LocalBusiness",
  "name" : "Cryo Life",
  "description": "Centre de cryothérapie à Genève",
  "image" : "http://cryolife.ch/wp-content/uploads/2016/05/CRYO_FOND-e1465243914502.jpg",
  "telephone" : "0041 (0)22 525 24 56",
  "email" : "contact@cryolife.ch",
  "address" : {
    "@type" : "PostalAddress",
    "streetAddress" : "Rue Louis-de-Montfalcon 2 bis",
    "addressLocality" : "GENÈVE",
    "addressCountry" : "Suisse",
    "postalCode" : "1227"
  },
  "openingHoursSpecification": [
		  {
		    "@type": "OpeningHoursSpecification",
		    "dayOfWeek": [
		      "Monday"
		    ],
		    "opens": "09:00",
		    "closes": "19:00"
		  },{
		    "@type": "OpeningHoursSpecification",
		    "dayOfWeek": [
		      "Tuesday"
		    ],
		    "opens": "09:00",
		    "closes": "19:00"
		  },{
		    "@type": "OpeningHoursSpecification",
		    "dayOfWeek": [
		      "Wednesday"
		    ],
		    "opens": "09:00",
		    "closes": "19:00"
		  },{
		    "@type": "OpeningHoursSpecification",
		    "dayOfWeek": [
		      "Thursday"
		    ],
		    "opens": "09:00",
		    "closes": "19:00"
		  },{
		    "@type": "OpeningHoursSpecification",
		    "dayOfWeek": [
		      "Friday"
		    ],
		    "opens": "09:00",
		    "closes": "19:00"
		  },

		]
	},

  "url" : "https://cryolife.ch/"
}
</script>

	</head>
	<body <?php body_class(); ?>>

		<div id="main">
			<!-- header -->
			<header class="header clear" role="banner">
				<div class="logo"><a href="<?php echo home_url(); ?>">Cryo Life</a></div>
				<div class="rdv"><a href="<?php echo home_url(); ?>/prendre-rendez-vous"><?php _e('Prendre rendez-vous', 'html5blank'); ?></a></div>
				<!-- nav -->
				<nav class="nav" role="navigation">
				<a href="#" id="show_nav_button">Menu</a>
					<?php html5blank_nav(); ?><?php do_action('icl_language_selector'); ?>
				</nav>
				<!-- /nav -->

			</header>
			<!-- /header -->
