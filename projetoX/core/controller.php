<?php

class controller {
    public function loadView($viewName, $viewData = array()) {
        extract($viewData);
        require 'views/'.$viewName.'.php';
    }  
    
    public function loadTemplate($viewName, $viewData = array()) {
        require 'template.php';
    }
    
    public function loadViewInTemplate($viewName, $viewData) {
        extract($viewData);
        require 'views/'.$viewName.'.php';
    }
}
