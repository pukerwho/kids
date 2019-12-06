<?php
/*
Template Name: КОНТАКТЫ
*/
?>

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
		<div class="w-full">
			<h1 class="text-center text-4xl rotonda_font color-bblack mb-4">
				<?php the_title(); ?>	
			</h1>
		</div>
	</div>
	<div class="flex justify-center">
		<div class="w-1/2">
			<div class="text-2xl rotonda_font mb-4">
				Ми завжди раді вашому дзвінку
			</div>
			<div class="flex items-center mb-4">
				<div class="mr-4">
					<img src="<?php bloginfo('template_url') ?>/img/phone.svg" alt="" width="45px">
				</div>
				<div class="text-xl">
					<?php $phones = carbon_get_theme_option('crb_phones');
            foreach ($phones as $phone): ?>
              <a href="tel:<?php echo $phone['crb_phone'] ?>" class="mr-2"><?php echo $phone['crb_phone'] ?></a>
          <?php endforeach; ?>
				</div>
			</div>
			<div class="flex items-center mb-8">
				<div class="mr-4">
					<img src="<?php bloginfo('template_url') ?>/img/viber.svg" alt="" width="45px">
				</div>
				<div class="text-xl">
					<a href="viber://chat?number=<?php echo carbon_get_theme_option( 'crb_viber' ); ?>"><?php echo carbon_get_theme_option( 'crb_viber' ); ?></a>
				</div>
			</div>
			<div class="text-2xl rotonda_font mb-4">
				Або листу
			</div>
			<div class="mb-8">
				<?php echo do_shortcode('[contact-form-7 id="5" title="Contact form 1"]') ?>
			</div>
			<div class="text-2xl rotonda_font mb-4">
				Або завітайте до наших сторінок у соцмережах
			</div>
			<div class="flex mb-8">
				<div class="mr-4">
					<a href="<?php echo carbon_get_theme_option( 'crb_facebook' ); ?>">
						<img src="<?php bloginfo('template_url') ?>/img/facebook.svg" alt="" width="45px">
					</a>
				</div>
				<div class="mr-4">
					<a href="<?php echo carbon_get_theme_option( 'crb_instagram' ); ?>">
						<img src="<?php bloginfo('template_url') ?>/img/instagram.svg" alt="" width="45px">
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php endwhile; else: ?>
	<p><?php _e('Ничего не найдено'); ?></p>
<?php endif; ?>	

<?php get_footer(); ?>