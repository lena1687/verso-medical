<?php
/**
 * @package verso-medical
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
			<div class="container-fluid top-header" id="page" tabindex="-1">
				<div class="container">
					<div class="row">
						<div class="col-6 telefon text-left">
							<img src="<?php bloginfo('template_url'); ?>/assets/images/tel.png" alt="tel">
							<span class="ml-10"><?php echo _('8800555555'); ?></span>
						</div>
						<div class="col-6 social text-right">
							<a href="https://twitter.com" target="blank" class="twitter"></a><!--
							--><a href="https://facebook.com" target="blank" class="facebook"></a><!--
							--><a href="https://plus.google.com/?hl=ru" target="blank" class="google"></a>
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid middle-header">
				<div class="container">
					<div class="row">
						<div class="col-6 header-logo text-md-left mt=20 text-center">
							<?php
								if ( function_exists( 'the_custom_logo' ) ) {
								    the_custom_logo();
								}
							?>
							<span class="nameorg text-uppercase"><?php echo _('clinic'); ?></span>
						</div>
						<div class="col-6 text-center text-uppercase list-unstyled">
							<!-- #site-navigation -->
							<nav id="site-navigation" class="main-navigation" role="navigation">
								<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'verso-medical' ); ?></button>
								<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
							</nav>
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid bottom-header">
				<div class="container">
					<div class="row">
						<div class="col-6">
							<h1 class="text-left text-uppercase"><?php echo _('We care about your<br> health, we care<br> about You'); ?></h1>
							<p class="text-left"><?php echo _('Learn more about our clinic and<br> feel free to contact us.'); ?></p>
							<button class="header-button text-uppercase text-center" type="submit"><?php echo _('book now'); ?></button>
						</div>
					</div>
				</div>
			</div>
		</header>
