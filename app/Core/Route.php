<?php 

class Route {

    protected $controller = 'home';
    protected $method = 'index';
    protected $param = [];

    public function __construct() {
        if(isset($_GET['url'])){
            $url = explode('/', filter_var(trim($_GET['url']), FILTER_SANITIZE_URL));
        }

        $url[0] = $url[0] .'Controller.php';
        /**
         * checking file controller
         * file exists
         */
        if(  file_exists( '../app/Controllers/' .$url[0])  ) {
            $this->controller = $url[0];
        }

        require_once '../app/Controllers/'. $this->controller;
    }
}