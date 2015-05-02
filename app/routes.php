<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/hello', function()
{
	return View::make('hello');
});

Route::get('/prueba', function()
{
	return View::make('prueba');
});
Route::get('/test', function()
{
	return View::make('clase3');
});

Route::get('/Smarty', function()
{
	return View::make('ejemplosmarty');
});

Route::get('/perfil',array('before' => 'auth', function()
{
    $publicacion = publicacion::orderBy('id','desc')->get();
    return View::make('perfil.perfil')
            ->with("nombre",Auth::user()->nombre)
            ->with("publicaciones",$publicacion);
    //Se pasan variables quemadas a la vista
	//return View::make('masterpage.template')
          //      ->with("nombre","John")
          //      ->with("edad","23");
}));

Route::get('/', function()
{
    if(Auth::check()){
        return Redirect::to("/perfil");
    }
    return View::make('general.login');
    //Se pasan variables quemadas a la vista
	//return View::make('masterpage.template')
          //      ->with("nombre","John")
          //      ->with("edad","23");
});

Route::post('/loguear', function(){
        ///echo "Se estan enviando los datos";
    $correo = Input::get('correo');
    $contraseña = Input::get('contraseña');
    
    if(Auth::attempt(['correo'=>$correo,'password'=>$contraseña])){
        //echo "Usuario logueado";
        return Redirect::to("/perfil");
    }else{
        echo "El usuario no está logueado";
        echo $correo;
        echo $contraseña;
    }
        });
        
Route::get('/logout', function(){
    Auth::logout();
    echo "Marica te saliste";
    return Redirect::to("/");
        });
        
Route::controller('personal','PersonalController');
Route::controller('clase','Clase2Controller');
Route::controller('publicacion','PublicacionController');