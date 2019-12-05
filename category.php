<?php get_header(); ?>

<div class="overflow-hidden">
  <?php get_template_part('blocks/colors') ?>
</div>

<div class="container mx-auto">
	<h1 class="relative hand_font text-6xl text-center mb-8">
		<?php single_term_title(); ?>
	</h1>
	<?php $current_term = get_queried_object_id(); ?>
	<?php 
		global $wp_query, $wp_rewrite;  
		// $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
		$custom_query = new WP_Query( array( 
			'post_type' => 'post', 
			'posts_per_page' => 15,
			'paged' => $current,
			'orderby' => 'date',
			'order' => 'DESC',
			'tax_query' => array(
		    array(
	        'taxonomy' => 'category',
			    'terms' => $current_term,
	        'field' => 'term_id',
	        'include_children' => true,
	        'operator' => 'IN'
		    )
			),
		));
		if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
			<div class="category_post flex items-center mb-8">
				<div class="w-1/2 mr-0 md:mr-4">
					<div class="post_thumb bg-white shadow-xl rounded-lg p-4">
						<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="w-full">	
					</div>
				</div>
				<div class="w-1/2 ml-0 md:ml-4">
					<div class="post_title text-4xl rotonda_font color-bblack mb-4">
						<?php the_title(); ?>	
					</div>
					<div class="post_content">
						<?php echo carbon_get_the_post_meta('crb_post_description') ?>	
					</div>
					<div class="text-xl">
						<div class="underline_02 kids-animate text-4xl hand_font">
							<a href="<?php the_permalink(); ?>" class="color-bblack">
								Подробиці	
							</a>
						</div>
					</div>
				</div>
			</div>
	<?php endwhile; endif; wp_reset_postdata(); ?>
	<?php get_template_part('blocks/instagram') ?>
</div>

<?php get_footer(); ?>