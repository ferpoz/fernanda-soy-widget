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
        $defaults = [
            'depth' => -1
        ];
        $depth = $instance['depth']; ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'depth' ); ?>">Profundidad:</label>
            <input class="widefat" type="text" id="<?php echo $this->get_field_id( 'depth' ); ?>" name="<?php echo $this->get_field_name( 'depth' ); ?>" value="<?php echo esc_attr( $depth ); ?>">
        </p>
        <?php
    }

    public function update($new_instance, $old_instance)
    {
        $instance = $old_instance;
        $instance[ 'depth' ] = strip_tags( $new_instance[ 'depth' ] );
        return $instance;
    }

    public function widget($args, $instance)
    {
        extract( $args );
        echo $before_widget;        
        echo $before_title . 'Noticias en Fernanda Soy' . $after_title; 

        $noticias = "";
        $url = "https://fernandafamiliar.soy/wp-json/wp/v2/posts";
        $response = file_get_contents($url);
        if ($response) 
        {
            $response = json_decode($response,true);
            foreach($response as $noticia) {
                $noticias .= "<li>".$noticia["title"]["rendered"]."</li>";
            }
            $noticias = "<ul>$noticias</ul>";
        }
        echo $noticias;
    }
}
function register_fernanda_soy_widget()
{
    register_widget('Fernanda_Soy_Widget');
}
add_action('widgets_init', 'register_fernanda_soy_widget');
