<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of publicacion
 *
 * @author John
 */
class publicacion extends Eloquent{
    protected $table = 'publicacion';
    
    public function freshTimestamp(){
        return date('Y-m-d h:i:s');
    }
}
