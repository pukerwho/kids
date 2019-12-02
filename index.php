<?php get_header(); ?>

<div class="overflow-hidden">
  <?php get_template_part('blocks/colors') ?>
</div>

<div class="container mx-auto">
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
			<div class="welcome_content text-xl text-center">
				Подаруйте своїй дитині свято, яке вона запам’ятає назавжди! Запросіть на дитячий день народження улюбленого героя малюка. Хто це буде – Русалонька, Трансформери чи Гаррі Поттер? Для нашої команди аніматорів немає нічого неможливого, тож обирайте тематику свята, а все решта ми зробимо самі!
			</div>	
		</div>
	</div>
	<div class="services mb-20">
		<div class="text-center text-6xl">
			<div class="rotonda_font color-bblack underline_01">
				Наші послуги	
			</div>
		</div>
	</div>
	<div class="animators flex items-center mb-4">
		<div class="w-1/2">
			<img src="<?php bloginfo('template_url') ?>/img/animators.png" alt="" class="w-full mx-auto">
		</div>
		<div class="w-1/2 pl-10">
			<div class="text-4xl rotonda_font color-bblack mb-4">
				Aніматори
			</div>
			<div class="text-xl mb-4">
				Професійні аніматори – невід’ємна частина веселого та запального дитячого свята. Щоб вечірка пройшла вдало, батькам треба лише розповісти нам про хобі та вподобання своєї дитини, все інше ми зробимо за вас. Якісні костюми улюблених героїв, веселі конкурси, насичена програма та чудовий настрій гарантовано!
			</div>
			<div class="text-xl text-right">
				<div class="underline_02 text-4xl hand_font">
					<a href="#" class="color-bblack">
						Подробиці	
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="showprogram flex items-center mb-4">
		<div class="w-1/2">
			<div class="text-4xl rotonda_font color-bblack mb-4">
				Шоу-програми
			</div>
			<div class="text-xl mb-4">
				Професійні аніматори – невід’ємна частина веселого та запального дитячого свята. Щоб вечірка пройшла вдало, батькам треба лише розповісти нам про хобі та вподобання своєї дитини, все інше ми зробимо за вас. Якісні костюми улюблених героїв, веселі конкурси, насичена програма та чудовий настрій гарантовано!
			</div>
			<div class="text-xl">
				<div class="underline_02 text-4xl hand_font">
					<a href="#" class="color-bblack">
						Подробиці	
					</a>
				</div>
			</div>
		</div>
		<div class="w-1/2 pl-10">
			<img src="<?php bloginfo('template_url') ?>/img/disco.png" alt="" class="disco w-full mx-auto">
		</div>
	</div>
	<div class="quote flex items-center">
		<div class="w-1/2">
			<img src="<?php bloginfo('template_url') ?>/img/quote.png" alt="" class="w-2/3 mx-auto">
		</div>
		<div class="w-1/2 hand_font text-5xl">
			<div class="mb-4">"Одна з найбільших удач у житті людини – щасливе дитинство."</div>
			<div class="text-right text-3xl">Агата Крісті</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>