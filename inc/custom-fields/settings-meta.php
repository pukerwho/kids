<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
  Container::make( 'theme_options', 'Options' )
    ->add_tab( 'Контакты', array(
        Field::make( 'text', 'crb_header_top_text', 'Текст перед номером телефона' ),
    ) );
}

?>