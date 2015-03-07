<?php

class PersonalController extends BaseController{
    public function getRegistrar($tipo, $nombre, $edad){
        echo"Hola {$nombre} eres {$tipo} y tienes {$edad}";
    }
}

