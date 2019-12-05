    </section>
    <footer id="footer" class="footer mb-4">
    	<div class="container mx-auto">
    		<div class="flex flex-col items-center justify-center">
    			<div class="text-4xl rotonda_font color-bblack">
	    			Зв'яжіться з нами
	    		</div>
	    		<div class="text-2xl">
	    			<a href="tel:+38 068 744 33 44">+38 068 744 33 44</a>
	    		</div>
	    		<div class="text-2xl">
	    			<a href="mailto:info@luevent.com.ua">info@luevent.com.ua</a>
	    		</div>
	    		<div class="text-2xl mb-12">
	    			<a href="www.luevent.com.ua">www.luevent.com.ua</a>
	    		</div>
	    		<div>
	    			Розроблено <a href="https://timeto.top/">TimeToTop</a>
	    		</div>
    		</div>
    	</div>
    </footer>

    <div class="modal modal_order">
    	<div class="modal_content w-1/2 bg-white shadow-lg rounded-lg py-12 px-8">    		
    		<div class="modal_close">
	  			<img src="<?php bloginfo('template_url') ?>/img/close.svg" alt="" width="20px">
	  		</div>
    		<div class="modal_title rotonda_font text-4xl text-center relative mb-4">
    			Замовити он-лайн
    		</div>
    		<div class="modal_text relative">
    			<?php echo do_shortcode('[contact-form-7 id="5" title="Contact form 1"]') ?>
    		</div>
    	</div>
    </div>
    <div class="modal modal_order_now">
        <div class="modal_content w-1/2 bg-white shadow-lg rounded-lg py-12 px-8">          
            <div class="modal_close">
                <img src="<?php bloginfo('template_url') ?>/img/close.svg" alt="" width="20px">
            </div>
            <div class="modal_title rotonda_font text-4xl text-center relative mb-4">
                Замовити свято
            </div>
            <div class="modal_text relative">
                <?php echo do_shortcode('[contact-form-7 id="5" title="Contact form 1"]') ?>
            </div>
        </div>
    </div>
    <div class="modal_bg"></div>
    <?php wp_footer(); ?>
</body>
</html>