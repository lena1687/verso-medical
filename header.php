<?php
/*
 * @package verso-medical
 Template Name: Шапка сайта
*/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>    <!-- язык-->
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="keywords" content="verso-medical">
		<meta name="description" content="site for verso-medical">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
		<title>
			<?php echo wp_get_document_title(); ?>
			<?php bloginfo('name'); ?>
		</title>
		<link href="https://fonts.googleapis.com/css?family=Pathway+Gothic+One" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Cardo" rel="stylesheet">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<header id="masthead" class="site-header" role="banner">
			<a class="skip-link screen-reader-text sr-only sr-only-focusable" href="#content">
				<?php esc_html_e( 'Skip to content', 'verso-medical' ); ?>
			</a>
			<section class="top-header">
				<div class="container-fluid" id="page" tabindex="-1">
					<div class="container">
						<div class="row">
							<div class="col-6">
								<div class="telefon text-left">
									<img src="<?php the_field('foto-tel', 39); ?>">
									<span class="ml-10">
										<?php the_field('tel', 39); ?>
										<!-- Advanced Custom Fields - плагин,
										tel - это название поля в произвольном поле; 39 - это ID страницы с админки! шаблон присединяем к странице, внизу шаблона заполняем произвольные поля - обновить (их нужно создать в пункте консоли Произвольные поля и присоединить к ним там определенный шаблон страницы )  -->
									</span>
								</div>
							</div>
							<div class="col-6">
								<div class="social text-right">
								<a href="https://twitter.com" target="blank" class="twitter"></a><!--
								--><a href="https://facebook.com" target="blank" class="facebook"></a><!--
								--><a href="https://plus.google.com/?hl=ru" target="blank" class="google"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class=" middle-header">
				<div class="container-fluid">
					<div class="container">
						<div class="row">
							<div class="col-3">
								<div class="header-logo text-md-left mt=20 text-center">
									<?php
										if ( function_exists( 'the_custom_logo' ) ) {
										    the_custom_logo();
										}
									?>
									<span class="nameorg text-uppercase">
										<?php the_field('clinic', 39); ?>
									</span>
								</div>
							</div>
							<div class="col-9">
								<div class="text-center text-uppercase list-unstyled">
									<!-- #site-navigation -->
									<nav id="site-navigation" class="main-navigation" role="navigation">
										<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'verso-medical' ); ?></button>
										<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
									</nav>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="bottom-header">
				<div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="3000" data-pause="hover">
				  <ol class="carousel-indicators">
				    <li data-target="#carouselExample" data-slide-to="0" class="active"></li>
				    <li data-target="#carouselExample" data-slide-to="1"></li>
				    <li data-target="#carouselExample" data-slide-to="2"></li>
				  </ol>
				  <div class="carousel-inner" role="listbox">
				    <div class="carousel-item active">
							<img class="d-block img-fluid" src="<?php the_field('foto-slide1', 39); ?>" alt="First slide">
				      <div class="carousel-caption d-none d-md-block">
								<h1 class="text-left text-uppercase">
									<?php the_field('caption-slider-1', 39); ?>
								</h1>
								<p class="text-left">
									<?php the_field('text-slider-1', 39); ?>
								</p>
								<button class="header-button text-uppercase text-center" type="submit">
									<?php the_field('button-1', 39); ?>
								</button>
					  	</div>
				    </div>
				    <div class="carousel-item">
				    	<img class="d-block img-fluid" src="<?php the_field('foto-slide2', 39); ?>" alt="Second slide">
				      <div class="carousel-caption d-none d-md-block">
								<h1 class="text-left text-uppercase">
									<?php the_field('caption-slider-2', 39); ?>
								</h1>
								<p class="text-left">
									<?php the_field('text-slider-2', 39); ?>
								</p>
								<button class="header-button text-uppercase text-center" type="submit">
									<?php the_field('button-2', 39); ?>
								</button>
							</div>
				    </div>
				    <div class="carousel-item">
				      <img class="d-block img-fluid" src="<?php the_field('foto-slide3', 39); ?>" alt="Third slide">
				      <div class="carousel-caption d-none d-md-block">
								<h1 class="text-left text-uppercase">
									<?php the_field('caption-slider-3', 39); ?>
								</h1>
								<p class="text-left">
									<?php the_field('text-slider-3', 39); ?>
								</p>
								<button class="header-button text-uppercase text-center" type="submit">
									<?php the_field('button-3', 39); ?>
								</button>
							</div>
				    </div>
				  </div>
				  <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>
			</section>
		</header>
