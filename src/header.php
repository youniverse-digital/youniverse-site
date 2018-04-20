<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
        <link href="<?php if(get_field('favicon', 'options')){ echo get_field('favicon', 'options');}else {echo get_template_directory_uri().'/dist/assets/media/favicon.ico';} ?>" rel="shortcut icon">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<link href="https://use.typekit.net/lgy5mzb.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet">
		<meta name="google-site-verification" content="lzIwVhAGjURo7rFF914L45jgDpD2w5NE40PGGmIhtpI" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

