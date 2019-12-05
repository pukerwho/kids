<?php get_header(); ?>

<div class="overflow-hidden">
  <?php get_template_part('blocks/colors') ?>
</div>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="container mx-auto mb-8">
	<div class="welcome mb-8">
		<div class="w-2/3 flex items-center flex-col mx-auto">
			<div class="logo relative mb-4">
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
	<div class="flex mb-12">
		<div class="w-1/2 mr-0 md:mr-4">
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
		<div class="w-1/2 ml-0 md:ml-4">
			<h1 class="post_title text-4xl rotonda_font color-bblack mb-4">
				<?php the_title(); ?>		
			</h1>
			<div class="mb-4">
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
	<?php get_template_part('blocks/instagram') ?>
</div>
<?php endwhile; else: ?>
	<p><?php _e('Ничего не найдено'); ?></p>
<?php endif; ?>	

<?php get_footer(); ?>