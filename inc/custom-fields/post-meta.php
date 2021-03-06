<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_post_theme_options' );
function crb_post_theme_options() {
  Container::make( 'post_meta', 'More' )
    ->where( 'post_type', '=', 'post' )
    ->add_fields( array(
    	Field::make( 'textarea', 'crb_post_description', 'Короткое описание' ),
      Field::make( 'media_gallery', 'crb_post_photos', 'Галерея' )->set_type( array( 'image' ) )
  ) );
}

?>