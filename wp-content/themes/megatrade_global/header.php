<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package megatrade_global
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<!-- Font Awesome icons (free version)-->
	<script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Paytone+One&display=swap" rel="stylesheet"> 
	<!-- Google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
	<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css'>
	<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/css/mdb.min.css'>
	<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css'>
</head>

<body <?php body_class(); ?> id="page-top">
<?php wp_body_open(); ?>
<div id="page" class="site">
	<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
		<div class="container">
			<a href="" class="navbar-brand nav-link js-scroll-trigger">
				<!-- Logo Image -->
				<img src="<?php echo esc_url( get_header_image() ); ?>" width="150" alt="<?php echo esc_attr( get_bloginfo( 'title' ) )?>" class="d-inline-block align-middle mr-2">
			</a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<!-- Menu-->
				<i class="fas fa-bars"></i>
			</button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'menu_class'	 => 'navbar-nav ml-auto',
					'container_class'=> 'collapse navbar-collapse',
					'container_id'	 => 'navbarResponsive',
					'walker'         => new Custom_Walker_Nav_Menu,
				)
			);
			?>
		</div>
	</nav><!-- #site-navigation -->
	<?php
	the_custom_logo();
	if ( is_front_page()) :
		?>
		<header id="masthead" class="masthead">
			<div class="container d-flex h-100 align-items-center">
				<div class="mx-auto text-center">
					<h1 class="display-2"><strong>Somos profesionales en negocios internacionales enfatizados en distribución física y logística internacional</strong></h1>
					<!--<h2 class="text-black-50 mx-auto mt-2 mb-5">Profesionales en asesoría en comercio exterior y logistica.</h2>-->
				</div>
			</div><!-- .site-branding -->
		</header><!-- #masthead --> 
				<?php
	else :
		?>
		<header id="masthead">
			<div class="col-12">
			<hr class="h-parente"></hr>
			<hr class="h-parente"></hr>
			<hr class="h-parente"></hr>
			<hr class="h-parente"></hr>
			</div><!-- .site-branding -->
		</header><!-- #masthead --> 
	<?php endif; ?>
		
