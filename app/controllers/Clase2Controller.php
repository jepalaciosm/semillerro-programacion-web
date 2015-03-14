<?php

class Clase2Controller extends BaseController{
    
    public function getCss(){
        return View::make('index');        
    }
    
    
    public function getBoot(){
        return View::make('boot');        
    }
    
    public function getResponsive(){
        return View::make('grilla');        
    }
}

