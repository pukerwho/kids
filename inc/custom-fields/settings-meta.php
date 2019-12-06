<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
  Container::make( 'theme_options', 'Options' )
    ->add_tab( 'Контакты', array(
        Field::make( 'complex', 'crb_emails', 'Emails' )->add_fields( array(
            Field::make( 'text', 'crb_email', 'Email' ),
        )), 
        Field::make( 'complex', 'crb_phones', 'Телефоны' )->add_fields( array(
            Field::make( 'text', 'crb_phone', 'Телефон' ),
        )), 
        Field::make( 'text', 'crb_viber', 'Viber' ),
        Field::make( 'text', 'crb_facebook', 'Ссылка на Facebook' ),
        Field::make( 'text', 'crb_instagram', 'Ссылка на Instagram' ),
    ) );
}

?>