<?php

/*
    Plugin Name: Fernanda Soy Widget
    Description: Despliega las 10 noticias recientes del sitio web de Fernanda Familiar
    Author: Fernando Pozos
    Version: 1.0
    Author URI: http://dev.strichpunkt.io
*/

class Fernanda_Soy_Widget extends WP_Widget
{
    public function __construct()
    {
        parent::__construct(
            'fernanda_soy_widget',
            __('Fernanda Soy Widget'),
            array(
                'description' => __('Muestra las 10 últimas notas del sitio de Fernanda Familiar')
            )
        );
    }

    public function form($instance)
    {
    }

    public function update($new_instance, $old_instance)
    {
    }

    public function widget($args, $instance)
    {
    }
}
function register_fernanda_soy_widget()
{
    register_widget('Fernanda_Soy_Widget');
}
add_action('widgets_init', 'register_fernanda_soy_widget');
