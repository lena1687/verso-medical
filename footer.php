<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package verso-medical
 Template Name: Подвал
 */

?>


<footer id="footer" class="site-footer">
	<section class="footer-top" id="footer-top">
		<div class="container">
			<div class="row">
				<div class="col-4">
					<div class="column-left">
						<h1 class="text-uppercase">
							<?php acfcheck('caption-column-left', 76);?>
						</h1>
						<p>
							<?php acfcheck('text-column-left1', 76);?>
						</p>
						<p>
							<?php acfcheck('text-column-left2', 76);?>
						</p>
					</div>
				</div>
				<div class="col-4">
					<div class="column-center">
						<h1 class="text-uppercase">
							<?php acfcheck('recent', 76);?>
						</h1>
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							<div class="content clearfix">
								<div class="post-thumbnail float-left">
									<?php echo get_the_post_thumbnail( $id, array(35,35)); ?>
								</div>
								<div class="post-content float-left">
								 	<div class="post-main">
								 		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								 	</div>
								 	<div class="date-content">
								 		<?php the_date('F j, Y'); ?>
								 	</div>
							 	</div>
						 	</div>
						 <!-- post -->
						 <?php endwhile; ?>
						 <!-- post navigation -->
						 <?php else: ?>
						 <!-- no posts found -->
						 <?php endif; ?>
					</div>
				</div>
				<div class="col-4">
					<div class="column-right">
						<h1 class="text-uppercase">
							<?php acfcheck('caption-column-right', 76);?>
						</h1>
						<p>
							<?php acfcheck('text-column-right1', 76);?>
						</p>
						<p>
							<?php acfcheck('text-column-right2', 76);?>
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="footer-bottom" id="footer-bottom">
		<div class="container">
			<div class="row clearfix">
				<div class="col-6">
					<div class="copyright float-left">
						<p>
							<?php acfcheck('copyright-field', 76);?>
						</p>
					</div>
				</div>
				<div class="col-6">
					<div class="social-footer float-right">
						<a href="https://ru.linkedin.com/" target="blank" class="linkedin"></a><!--
						--><a href="https://twitter.com" target="blank" class="twitter"></a><!--
						--><a href="https://facebook.com" target="blank" class="facebook"></a><!--
						--><a href="https://www.instagram.com/" target="blank" class="instagram"></a>
					</div>
				</div>
			</div>
		</div>
	</section>
</footer>


















<?php wp_footer(); ?>

</body>
</html>
