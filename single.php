<?php get_header(); ?>

<div class="overflow-hidden">
  <?php get_template_part('blocks/colors') ?>
</div>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="container mx-auto mb-8">
	<div class="welcome mb-8">
		<div class="w-full md:w-2/3 flex items-center flex-col mx-auto">
			<div class="logo relative mb-4 py-4 px-8 md:py-0 md:px-0">
				<img src="<?php bloginfo('template_url') ?>/img/logo.png" alt="">
				<div class="logo_heart_left">
					<img src="<?php bloginfo('template_url') ?>/img/heart-logo.png" alt="" width="15px">
				</div>
				<div class="logo_heart_right">
					<img src="<?php bloginfo('template_url') ?>/img/heart-logo.png" alt="" width="15px">
				</div>
				<div class="logo_babochka_left">
					<img src="<?php bloginfo('template_url') ?>/img/logo-babochka-left.png" alt="">
				</div>
				<div class="logo_babochka_right">
					<img src="<?php bloginfo('template_url') ?>/img/logo-babochka-right.png" alt="">
				</div>
			</div>
		</div>
	</div>
	<div class="flex flex-col md:flex-row mb-12 px-6 md:px-0">
		<div class="w-full md:w-1/2 mr-0 md:mr-4 mb-4 md:mb-0">
			<div class="breadcrumbs mb-4">
				<?php 
					$current_term = wp_get_post_terms(  get_the_ID() , 'category', array() );
					foreach ($current_term as $myterm); {
						$current_term_slug = $myterm->slug;
						$current_term_name = $myterm->name;
					} 
				?>
				<span typeof="v:Breadcrumb"><a href="<?php echo home_url(); ?>" rel="v:url" property="v:title" class="text-gray-900">Головна</a></span> ›
				<span typeof="v:Breadcrumb"><a href="<?php echo get_term_link($myterm->term_id, 'category') ?>" rel="v:url" property="v:title" class="text-gray-900"><?php echo $current_term_name; ?></a></span> ›
				<span typeof="v:Breadcrumb" class="text-gray-800"><?php the_title(); ?></span>
			</div>
			<ul id="lightSlider">
				<?php 
					$post_photos = carbon_get_the_post_meta('crb_post_photos');
					foreach ( $post_photos as $post_photo ): ?>
					<?php $photo_src = wp_get_attachment_image_src($post_photo, 'large'); ?>
					<li data-thumb="<?php echo $photo_src[0]; ?>">
				    <img src="<?php echo $photo_src[0]; ?>" />
				  </li>
				<?php endforeach; ?>
			</ul>
		</div>
		<div class="w-full md:w-1/2 ml-0 md:ml-4">
			<h1 class="post_title text-4xl rotonda_font text-center md:text-left color-bblack mb-4">
				<?php the_title(); ?>		
			</h1>
			<div class="post_content mb-4">
				<?php the_content(); ?>
			</div>
			<div>
				<div class="text-xl">
					<div class="underline_02 kids-animate text-4xl hand_font">
						<div class="color-bblack cursor-pointer order_now">
							Замовити свято
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="related mb-12">
		<div class="text-4xl rotonda_font color-bblack text-center mb-4">
			Також рекомендуємо
		</div>
		<div class="flex flex-col md:flex-row flex-wrap px-6 md:px-0 md:-mx-3">
			<?php
				$current_term = wp_get_post_terms(  get_the_ID() , 'category', array() );
				foreach ($current_term as $myterm); {
					$current_term_slug = $myterm->slug;
				}
				$current_id = get_the_ID();
				$custom_query = new WP_Query( array( 
				'post_type' => 'post',
				'post__not_in' => array($current_id),
				'orderby' => 'date',
				'order' => 'DESC',
				'tax_query' => array(
			    array(
		        'taxonomy' => 'category',
				    'terms' => $current_term_slug,
				    'post__not_in' => array($current_id),
		        'field' => 'slug',
		        'include_children' => true,
		        'operator' => 'IN'
			    )
				),
			));
			if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>

			<div class="related_post w-full md:w-1/3 bg-white shadow-lg mb-4 md:mx-3 md:mb-0 p-4">	
				<a href="<?php the_permalink(); ?>">
					<div class="related_img overflow-hidden h-56 mb-4">
						<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="w-full h-full object-cover">		
					</div>
					<div class="related_title hand_font text-center text-2xl">
						<?php the_title(); ?>	
					</div>
				</a>
			</div>
		<?php endwhile; endif; wp_reset_postdata(); ?>
		</div>
	</div>
	<?php get_template_part('blocks/instagram') ?>
</div>
<?php endwhile; else: ?>
	<p><?php _e('Ничего не найдено'); ?></p>
<?php endif; ?>	

<?php get_footer(); ?>