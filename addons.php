<?php
function rasel_tt_one_child_widget( $widgets_manager ) {

require_once( __DIR__ . '/widgets/hello-world.php' );


$widgets_manager->register( new \Rasel_Elementor_Addon_Hello_world() );


}
add_action( 'elementor/widgets/register', 'rasel_tt_one_child_widget' );
