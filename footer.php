    </section>
    <footer id="footer" class="footer mb-4">
    	<div class="container mx-auto">
    		<div class="flex flex-col items-center justify-center">
                <?php if( !is_page_template( 'tpl_contact.php' )): ?>
    			<div class="text-4xl rotonda_font color-bblack">
	    			Зв'яжіться з нами
	    		</div>
                <?php $phones = carbon_get_theme_option('crb_phones');
                  foreach ($phones as $phone): ?>
                    <div class="text-2xl">
                        <a href="tel:<?php echo $phone['crb_phone'] ?>"><?php echo $phone['crb_phone'] ?></a>
                    </div>
                <?php endforeach; ?> 
                <?php $emails = carbon_get_theme_option('crb_emails');
                  foreach ($emails as $email): ?>
                    <div class="text-2xl mb-12">
                        <a href="mailto:<?php echo $email['crb_email'] ?>"><?php echo $email['crb_email'] ?></a>
                    </div>
                <?php endforeach; ?> 
                <?php endif; ?>
	    		<div>
	    			Розроблено <a href="https://timeto.top/">TimeToTop</a>
	    		</div>
    		</div>
    	</div>
    </footer>

    <div class="modal modal_order">
    	<div class="modal_content w-full md:w-1/2 bg-white shadow-lg rounded-lg py-8 md:py-12 px-8 mx-4 md:mx-0">    		
    		<div class="modal_close">
	  			<img src="<?php bloginfo('template_url') ?>/img/close.svg" alt="" width="20px">
	  		</div>
    		<div class="modal_title rotonda_font text-2xl md:text-4xl text-center relative mb-4">
    			Замовити он-лайн
    		</div>
    		<div class="modal_text relative">
    			<?php echo do_shortcode('[contact-form-7 id="5" title="Contact form 1"]') ?>
    		</div>
    	</div>
    </div>
    <div class="modal modal_order_now">
        <div class="modal_content w-full md:w-1/2 bg-white shadow-lg rounded-lg py-8 md:py-12 px-8 mx-4 md:mx-0">          
            <div class="modal_close">
                <img src="<?php bloginfo('template_url') ?>/img/close.svg" alt="" width="20px">
            </div>
            <div class="modal_title rotonda_font text-2xl md:text-4xl text-center relative mb-4">
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