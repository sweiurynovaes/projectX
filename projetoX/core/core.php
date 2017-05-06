<?php

class Core {
    public function run() {
        $url = '/'. (isset($_GET['q'])?$_GET['q']:'');
        
        if(!empty($url) && $url != '/') {
            $url = explode("/", $url);
            array_shift($url);
            
            $currentController = $url[0].'Controller';
            array_shift($url);
            
            if(isset($url[0]) && !empty($url[0])) {
                $currentAction = $url[0];
            } else {
                $currentAction = 'index';
            }
            
            if(count($url) > 0) {
                $params = $url;
            } else {
                $params = array();
            }
        } else {
            $currentController = 'homeController';
            $currentAction = 'index';
            $params = array();
        }
        
        require 'core/controller.php';
        $c = new $currentController();
        call_user_func_array(array($c, $currentAction), $params);
    }
}
