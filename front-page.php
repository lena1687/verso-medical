<?php
/**
 * The main template file
   Template Name: Главная страница
 * @package verso-medical
 */

get_header(); ?> <!--функция автоматич включ header.php-->
<section class="about m-0" id="about">
	<div class="container-fluid p-0">
		<div class="row">
			<div class="col-12">
				<div class="one-block">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-7">
				<div class="blue-block">
				</div>
			</div>
			<div class="col-5">
				<div class="white-block">
				</div>
			</div>
		</div>
		<div class="container height">
			<div class="row">
				<div class="col-7 offset-5">
					<div class="about-block">
						<div class="container">
							<h2 class="text-left text-uppercase font-italic">
								<?php acfcheck('caption-about-1', 62);?>
							</h2>
							<h1 class="text-left text-uppercase">
								<?php acfcheck('caption-about-2', 62);?>
							</h1>
							<p class="text-left">
								<?php acfcheck('text-about-1', 62);?>
							</p>
							<p class="text-left">
								<?php acfcheck('text-about-2', 62);?>
							</p>
							<table class="table table-about">
							  <tbody>
							    <tr>
							      <td><?php acfcheck('text-table', 62);?></td>
							      <td><?php acfcheck('text-table', 62);?></td>
							    </tr>
							    <tr>
							      <td><?php acfcheck('text-table', 62);?></td>
							      <td><?php acfcheck('text-table', 62);?></td>
							    </tr>
							    <tr>
							      <td><?php acfcheck('text-table', 62);?></td>
							      <td><?php acfcheck('text-table', 62);?></td>
							    </tr>
							    <tr>
							      <td><?php acfcheck('text-table', 62);?></td>
							      <td><?php acfcheck('text-table', 62);?></td>
							    </tr>
							    <tr>
							      <td><?php acfcheck('text-table', 62);?></td>
							      <td><?php acfcheck('text-table', 62);?></td>
							    </tr>
						  	</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="our-services" id="services">
	<div class="container-fluid p-0">
		<div class="row">
			<div class="col-12">
				<div class="services">
					<div class="container">
						<div class="row">
							<div class="col-5 offset-7">
								<div class="work">
									<h2 class="text-left text-uppercase font-italic">
										<?php acfcheck('Caption-service1', 62);?>
									</h2>
									<h1 class="text-left text-uppercase">
										<?php acfcheck('Caption-service2', 62);?>
									</h1>
									<p class="text-left">
										<?php acfcheck('Text-service1', 62);?>
									</p>
									<span class="text-left font-italic text-lowercase read-more">
										<?php acfcheck('Text-service2', 62);?>
									</span>
							</div>
						</div>
						<div class="col-7">
							<div class="features">
								<div class="container">
									<div class="row">
										<div class="col-3">
											<div class="features-before-one">
											</div>
										</div>
										<div class="col-9">
											<div class="features-one">
												<h2 class="text-left text-uppercase">
													<?php acfcheck('caption-features-one', 62);?>
												</h2>
												<p class="text-left">
													<?php acfcheck('text-features-one', 62);?>
												</p>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											<div class="features-before-two">
											</div>
										</div>
										<div class="col-9">
											<div class="features-one">
												<h2 class="text-left text-uppercase">
													<?php acfcheck('caption-features-two', 62);?>
												</h2>
												<p class="text-left">
													<?php acfcheck('text-features-two', 62);?>
												</p>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											<div class="features-before-three">
											</div>
										</div>
										<div class="col-9">
											<div class="features-one">
												<h2 class="text-left text-uppercase">
													<?php acfcheck('caption-features-three', 62);?>
												</h2>
												<p class="text-left">
													<?php acfcheck('text-features-three', 62);?>
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="our-team" id="team">
	<div class="container-fluid">
		<div class="row">
			<div class="col-4">
				<div class="team-info">
					<h2 class="text-left text-uppercase font-italic">
						<?php acfcheck('caption-team1', 62);?>
					</h2>
					<h1 class="text-left text-uppercase">
						<?php acfcheck('caption-team2', 62);?>
					</h1>
					<p class="text-left">
						<?php acfcheck('text-team', 62);?>
					</p>
				</div>
			</div>
			<div class="col-8">
				<div class="team-foto-one">
	        <div class="thumb thumb-one">
	          <a class="fancybox" data-fancybox="group" data-type="image" data-caption="субтитр-1" href="<?php bloginfo('template_url'); ?>/assets/images/square.jpg" title="картинка">
	          	<img class="img-responsive" src="<?php acfcheck('square', 62);?>" alt="Foto" height="500px">
	          </a>
	        </div>
	        <div class="thumb thumb-two">
	          <a class="fancybox" data-fancybox="group" data-type="image" data-caption="субтитр-2" href="<?php bloginfo('template_url'); ?>/assets/images/square.jpg" title="картинка">
	          	<img class="img-responsive" src="<?php acfcheck('square', 62);?>" alt="Foto" height="500px">
	          </a>
	        </div>
				</div>
			</div>
		</div>
		<div class="team-foto-two">
			<div class="row">
				<div class="col-8 offset-4">
					<div class="thumb thumb-three">
	          <a class="fancybox" data-fancybox="group" data-type="image" data-caption="субтитр-3" href="<?php bloginfo('template_url'); ?>/assets/images/square.jpg" title="картинка">
	          	<img class="img-responsive" src="<?php acfcheck('square', 62);?>" alt="Foto" height="500px">
	          </a>
	        </div>
	        <div class="thumb thumb-four">
	          <a class="fancybox" data-fancybox="group" data-type="image" data-caption="субтитр-4" href="<?php bloginfo('template_url'); ?>/assets/images/square.jpg" title="картинка">
	          	<img class="img-responsive" src="<?php acfcheck('square', 62);?>" alt="Foto" height="500px">
	          </a>
	        </div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="people" id="people">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="reviews-top">
					<h2 class="text-center text-uppercase">
						<?php acfcheck('caption-people1', 62);?>
					</h2>
					<h1 class="text-center text-uppercase">
						<?php acfcheck('caption-people2', 62);?>
					</h1>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-8 offset-2">
				<div class="reviews-bottom">
					<div class="row">
						<div class="col-2">
							<div class="reviews-middle quotes-1 text-right">
						    <img src="<?php acfcheck('quotes1', 62);?>" alt="quotes-1">
							</div>
						</div>
						<div class="col-2 offset-8">
							<div class="reviews-middle quotes-2 text-left align-text-bottom">
						  <img src="<?php acfcheck('quotes2', 62);?>" alt="quotes-2">
							</div>
						</div>
					</div>
					<p class="citation text-center font-italic">
						<?php acfcheck('text-people1', 62);?>
					</p>
					<p class="sign text-center text-uppercase">
						<?php acfcheck('text-people2', 62);?>
					</p>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="gallary" id="gallary">
	<div class="container">
		<div class="row">
			<div class="col-5">
				<div class="foto foto-1">
				</div>
			</div>
			<div class="col-3">
				<div class="foto foto-2">
				</div>
			</div>
			<div class="col-4">
				<div class="gallary-info">
					<h2 class="text-uppercase font-italic">
						<?php acfcheck('caption-gallary1', 62);?>
					</h2>
					<h1 class="text-uppercase">
						<?php acfcheck('caption-gallary2', 62);?>
					</h1>
					<p>
						<?php acfcheck('text-gallary', 62);?>
					</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-3">
				<div class="foto foto-3">
				</div>
			</div>
			<div class="col-5">
				<div class="foto foto-4">
				</div>
			</div>
			<div class="col-4">
			</div>
		</div>
		<div class="row">
			<div class="col-6">
				<div class="foto foto-5">
				</div>
			</div>
			<div class="col-2">
				<div class="foto foto-6">
				</div>
			</div>
			<div class="col-4">
			</div>
		</div>
	</div>
</section>
<?php

get_footer(); //функция "прикрепляем" подвал сайта