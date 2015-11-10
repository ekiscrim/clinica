<?php  if ( ! defined('BASEPATH')) exit('No se permite el acceso directo');
if ( ! function_exists('active')){
    function active($controller){
        $CI =& get_instance();

        $class = $CI->router->fetch_class();
        return ($class == $controller) ? 'active' : '';
    }
}