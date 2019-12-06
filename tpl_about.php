<?php
/*
Template Name: О НАС
*/
?>

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
	<div class="flex mb-12">
		<div class="w-full">
			<h1 class="text-center text-4xl rotonda_font color-bblack mb-4">
				<?php the_title(); ?>	
			</h1>
		</div>
	</div>
	<div class="flex justify-center mb-8">
		<div class="w-full md:w-2/3 px-6 md:px-0">
			<div class="post_content text-xl text-gray-900">
				<p>Найкращий спосіб виховати дитину хорошою – зробити її щасливою! </p>
				<p>Саме до цього ми прагнемо на кожному своєму святі! </p>
				<p>Event-компанія «Люблю» має 15-річний досвід в івент-індустрії. Ми створюємо незабутні дитячі свята, які насичені яскравими іграми, цікавими и дуже корисними майстер-класами, знайомствами з надзвичайними та незвіданими дивами! Ми знаємо, як підібрати ключик до серця кожного малюка.</p>
				<p>Ми об’єдналися в єдину сім’ю професіоналів, які досконало знають свою справу, а найголовніше її люблять!!! У нас завжди гамірно та повно ідей, і ми вже давно не можемо без цього жити.</p>
			</div>
		</div>
	</div>
	<div class="flex mb-12">
		<div class="w-full">
			<div class="flex flex-col md:flex-row px-6 md:px-0">
				<div class="about_photo-1 relative mr-0 md:mr-6 mb-4 md:mb-0">
					<div class="absolute pin-1">
						<img src="<?php bloginfo('template_url') ?>/img/pin.png" alt="" width="80px">
					</div>
					<img src="http://kids.luevent.com.ua/wp-content/uploads/2018/09/31890830_2317216288292144_2119970409624371200_n.jpg" alt="" class="w-full bg-white shadow-lg p-6">
				</div>
				<div class="relative mr-0 md:mr-6 mb-4 md:mb-0">
					<div class="absolute pin-2">
						<img src="<?php bloginfo('template_url') ?>/img/pin-11.svg" alt="" width="30px">
					</div>
					<div class="absolute pin-2-1">
						<img src="<?php bloginfo('template_url') ?>/img/pin-2.svg" alt="" width="35px">
					</div>
					<img src="http://kids.luevent.com.ua/wp-content/uploads/2018/09/32266823_2332539736759799_209968353962360832_n.jpg" alt="" class="w-full bg-white shadow-lg p-6">
				</div>
				<div class="about_photo-3 relative">
					<div class="absolute pin-3">
						<img src="<?php bloginfo('template_url') ?>/img/pin-3.svg" alt="" width="30px">
					</div>
					<img src="http://kids.luevent.com.ua/wp-content/uploads/2018/09/31789392_2317198491627257_77692419331588096_n.jpg" alt="" class="w-full bg-white shadow-lg p-6">
				</div>
			</div>
		</div>
	</div>
	<div class="flex justify-center">
		<div class="w-full md:w-2/3 px-6 md:px-0">
			<p class="text-xl text-gray-900 mb-4">Свято Вашій дитині з величезною радістю допоможуть провести професіонали своєї справи – приголомшливі артисти, декоратори, музиканти, кондитери, майстри фото і відео, діджеї, координатори, і все тільки заради того, щоб Ваше маленьке диво захоплено згадувало своє свято довгі, довгі роки! </p>
			<p class="text-2xl hand_font text-center">Event-компанія «Люблю» – з любов’ю до кожної дитини!</p>
		</div>
	</div>
</div>

<?php endwhile; else: ?>
	<p><?php _e('Ничего не найдено'); ?></p>
<?php endif; ?>	

<?php get_footer(); ?>