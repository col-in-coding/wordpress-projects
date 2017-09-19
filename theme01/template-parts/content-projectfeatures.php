<?php 

// Advanced Custom Fields
$project_features_title = get_field('project_features_title');
$project_features_body  = get_field('project_features_body');
 ?>

<!-- PROJECT FEATURES
=================================================== -->
<section id="project-features">
	<div class="container">
	
		<h2><?php echo $project_features_title ?></h2>
		<p class="lead"><?php echo $project_features_body ?></p>
		
		<div class="row">
			<?php $loop = new WP_Query(array('post_type' => 'project_feature', 'order_by' => 'post_id', 'order' => 'ASC')) ?>

			<?php while( $loop->have_posts() ): $loop->the_post(); ?>
				<div class="col-sm-4">
					<?php if ( has_post_thumbnail() ) {
						the_post_thumbnail();
					} ?>
					<h3><?php the_title() ?></h3>
					<p><?php the_content() ?></p>
				</div><!-- col -->
			<?php endwhile; wp_reset_query()?>
			
		</div><!-- row -->
		
	</div><!-- container -->
</section><!-- project-features -->