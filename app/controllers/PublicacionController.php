<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PublicacionController
 *
 * @author John
 */
class PublicacionController extends BaseController{
    public function postCrear(){
        $publicacion = [ //forma de crear array rápido
            'publicacion' => Input::get('publicacion'),
            'tipo' => '0',           
            'usuario' => Auth::user()->id
        ];
        
        DB::table('publicacion')->insert($publicacion);
        return Redirect::to("/perfil");
       // dd(Input::all()); --Para hacer debut para todo y me muestra esto
      ///  echo "XD";
    }
    
    public function postComentar(){
        
    }
    
    public function getEliminar($id){
        //echo $id;
        $publicacion = Publicacion::find($id);
        if($publicacion && $publicacion->usuario == Auth::user()->id){
            $publicacion->delete();
        }
        return Redirect::to("/perfil");
    }
        
}
