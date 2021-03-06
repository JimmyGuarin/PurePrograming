

<?php

class FrontController {

    private $controlador="Home";
    private $metodo = "index";
    private $params;

    public function index() {
        echo "Entre a index";

        $url = $_SERVER["REQUEST_URI"];
        echo "url  ".$url;
        $path = trim(parse_url($url, PHP_URL_PATH), "/");
        
        echo "\n   path:  ";
        print_r($path);
        try {
            @list($appname, $controlador, $metodo, $params) = explode("/", $path, 4);
            @$params = explode('/', $params);
            
            if($controlador!=null){
                
                $this->controlador=$controlador;
            }
            echo "AppName".$appname;
            echo "  Controlador".$this->controlador;

            if($metodo != null)
            {
                $this->metodo =  $metodo;
            }
            
            echo "Metodo".$this->metodo;
        


            $micontrolador = $this->cargarControlador($this->controlador);
           
            if($micontrolador!=null){
                
                $micontrolador->setParametros($params);
                
                if(method_exists($micontrolador, $this->metodo)){
                    
                    $stringMetodo = $this->metodo;
                    $micontrolador->$stringMetodo();
                
                }else{
                    echo "Método no existe";
                }
            } 
            else{
                echo "Controlador no existe";
            }
        } catch (Exception $e) {
            $e->getMessage();
        }
    }

    public function setParametros($params) {
        $this->params = $params;
    }
    
        function cargarControlador($controlador) {
            $controlador = ucfirst(strtolower($controlador));
            $urlFile = 'controladores/' . $controlador . '.php';

            if (file_exists($urlFile)) {

                include $urlFile;
                $class = $controlador;
                $controller = new $class();
                return $controller;
            } else {
                return null;
            }
        }

}

$frontController = new FrontController();

$frontController->index();
?>
   
