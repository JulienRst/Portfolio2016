<?php

    /**
     * ROUTING CLASS
     */
    class ROUTING {

        private $root;
        private $request;
        private $routes;
        private $route;
        private $parameter;

        function __construct(){

            $this->root = $_SERVER['DOCUMENT_ROOT'];
            $this->request = $_SERVER['REQUEST_URI'];
            // ERASE Site BDI of the URL WHEN PUSH ON SERVER
            $this->route = $this->root.'Portfolio2016/';
            $this->parameter = "";

            // ERASE THIS LINE WHEN PUSH ON SERVER
            $this->request = explode('/',$this->request,3);
            $this->request = $this->request[2];

            if($this->request == "" || $this->request == "admin/"){
                header('location:index/');
                exit();
            }

            // REPLACE BY THIS ONE
            //$this->request = explode('/',$this->request,2);
            //$this->request = $this->request[1];
            // END

            // ERASE Site BDI of the URL WHEN PUSH ON SERVER
            $this->routes = json_decode(file_get_contents($this->root."Portfolio2016/model/routes.json"),true);

            if(array_key_exists($this->request,$this->routes)){
                $this->route .= $this->routes[$this->request]["request"];
            } else {
                $this->route .= $this->routes["404/"]["request"];
            }
        }

        function getRoute(){
            return $this->route;
        }

        function getParameter(){
            return $this->parameter;
        }

        function getRoot(){
            return $this->root;
        }
    }


?>
