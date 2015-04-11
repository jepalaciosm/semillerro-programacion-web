<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUser extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usuario', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->string('nombre');
                        $table->string('correo');
                        $table->string('password');
                        $table->rememberToken();
                        $table->timestamps();
		});
                
		Schema::create('publicacion', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->text('publicacion');
                        $table->boolean('tipo');
                        $table->integer('padre')->nullable()->unsigned();
                        $table->foreign('padre')->references('id')->on('publicacion');
                        $table->integer('usuario')->unsigned();
                        $table->foreign('usuario')->references('id')->on('usuario');
                        $table->timestamps();
		});
		Schema::create('me_gusta', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->integer('publicacion')->unsigned();
                        $table->foreign('publicacion')->references('id')->on('publicacion');
                        $table->integer('usuario')->unsigned();
                        $table->foreign('usuario')->references('id')->on('usuario');
                        $table->timestamps();
		});
                
                DB::table('usuario')
                        ->insert([
                            'nombre' => 'John',
                            'correo' => 'john@gmail.com',
                            'password' => Hash::make('123')                            
                        ]);
                
                DB::table('usuario')
                        ->insert([
                            'nombre' => 'Juan',
                            'correo' => 'juan@gmail.com',
                            'password' => Hash::make('321')                            
                        ]);
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
            Schema::drop('me_gusta');
            Schema::drop('publicacion');
            Schema::drop('usuario');
		/*Schema::table('usuario', function(Blueprint $table)
		{
			//
		});*/
	}

}
