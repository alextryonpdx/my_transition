<?php /* Template Name: FULL Template */ get_header(); ?>

<!-- get both stat sliders' data first -->
<?php  
$stats = new WP_Query( 'page_id=22' ); 
while( $stats->have_posts() ) : $stats->the_post();
	$topStats = get_field('top_slider');
	$bottomStats = get_field('bottom_slider'); 
endwhile;
?>

<main id="content">

	<div id="banner">

		<img src="<?php the_field('banner', 40 ); ?>">

		<div class="row">
			<div class="col-md-2"></div>

			<div class="col-md-8">
				<?php the_field('text', 40); ?>
			</div>

			<div class="col-md-2"></div>

		</div>

	</div>
	<!-- end banner -->

	<div class="gradient link-split">

		<a class="apply smoothScroll">
			<img src="<?php echo get_template_directory_uri(); ?>/img/apply-grant.png">
		</a>

		<a class="donate smoothScroll">
			<img src="<?php echo get_template_directory_uri(); ?>/img/donate.png">
		</a>

	</div>

	<!-- ABOUT US -->
	<?php  $about = new WP_Query( 'page_id=5' ); 
	while( $about->have_posts() ) : $about->the_post(); ?>

		<div class="container-fluid">

			<div class="row">

				<h1 class="page-heading"><?php the_title(); ?></h1>

			</div>

		</div>

	<?php endwhile; 
	wp_reset_postdata();?>
	<!-- end ABOUT US -->

	<?php if( $topStats ): ?>
		<div class="gradient link-split">
			<ul id="topStats" class="stat-slider">
				<?php foreach($topStats as $stat): ?>
					<li><?php echo $stat['stat']; ?></li>
				<?php endforeach; ?>
			</ul>
		</div>
	<?php endif; ?>

	<!-- APPLY FOR A GRANT -->
	<?php  $apply = new WP_Query( 'page_id=7' ); 
	while( $apply->have_posts() ) : $apply->the_post(); ?>

		<div class="container-fluid">

			<div class="row">

				<h1 class="page-heading"><?php the_title(); ?></h1>

			</div>

			<div class="row">
				<div class="col-md-1"></div>

				<div class="col-md-7"><?php the_field('main_column'); ?></div>

				<div class="col-md-3"><?php the_field('side_column'); ?></div>

				<div class="col-md-1"></div>
			</div>

		</div>

	<?php endwhile; 
	wp_reset_postdata();?>
	<!-- end APPLY FOR A GRANT -->

	<div class="gradient link-split">

		<a class="apply smoothScroll">
			<img src="<?php echo get_template_directory_uri(); ?>/img/apply-grant.png">
		</a>

		<a class="donate smoothScroll">
			<img src="<?php echo get_template_directory_uri(); ?>/img/donate.png">
		</a>

	</div>

		<!-- BECOME A PROVIDER -->
	<?php  $provider = new WP_Query( 'page_id=9' ); 
	while( $provider->have_posts() ) : $provider->the_post(); ?>

		<div class="container-fluid">

			<div class="row">

				<h1 class="page-heading"><?php the_title(); ?></h1>

			</div>

			<div class="row">
				<div class="col-md-1"></div>

				<div class="col-md-7"><?php the_field('main_column'); ?></div>

				<div class="col-md-3"><?php the_field('side_column'); ?></div>

				<div class="col-md-1"></div>
			</div>

		</div>

	<?php endwhile; 
	wp_reset_postdata();?>
	<!-- end BECOME A PROVIDER-->

	<?php if( $bottomStats ): ?>
		<div class="gradient link-split">
			<ul id="topStats" class="stat-slider">
				<?php foreach($bottomStats as $stat): ?>
					<li><?php echo $stat['stat']; ?></li>
				<?php endforeach; ?>
			</ul>
		</div>
	<?php endif; ?>

	<!-- ... -->

</main>

<?php get_footer(); ?>
