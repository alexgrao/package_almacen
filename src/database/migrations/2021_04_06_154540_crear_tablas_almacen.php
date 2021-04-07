<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablasAlmacen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('almacenes', function($table)
        {
            $table->increments('id');
            $table->string('old_id')->index()->default('');
            $table->string('nombre')->index();
            $table->string('direccion')->nullable();
            $table->string('ciudad')->nullable();
            $table->string('codigo_postal')->nullable();
            $table->string('provincia')->nullable();
            $table->integer('pais_id')->unsigned()->nullable();
            $table->foreign('pais_id')->references('id')->on('paises')->onDelete('set null');
            $table->string('telefono')->nullable();
            $table->string('email')->nullable();
            $table->boolean('disponible')->default(true);
            
            $table->timestamps();
            $table->integer('created_by')->unsigned()->nullable();
            $table->integer('updated_by')->unsigned()->nullable();
            
        });

        Schema::create('almacenes_zonas', function($table)
        {
            $table->increments('id');
            $table->string('old_id')->index()->default('');
            $table->integer('almacen_id')->unsigned()->nullable();
            $table->foreign('almacen_id')->references('id')->on('almacenes')->onDelete('cascade');
            $table->string('descripcion')->index();
            $table->boolean('disponible')->default(true);
            
            $table->timestamps();
            $table->integer('created_by')->unsigned()->nullable();
            $table->integer('updated_by')->unsigned()->nullable();
        });

        Schema::create('almacenes_estanterias', function($table)
        {
            $table->increments('id');
            $table->string('old_id')->index()->default('');
            $table->integer('zona_id')->unsigned()->nullable();;
            $table->foreign('zona_id')->references('id')->on('almacenes_zonas')->onDelete('cascade');
            $table->string('descripcion')->index();
            $table->boolean('disponible')->default(true);
            
            $table->timestamps();
            $table->integer('created_by')->unsigned()->nullable();
            $table->integer('updated_by')->unsigned()->nullable();
        });

        Schema::create('almacenes_ubicaciones', function($table)
        {
            $table->increments('id');
            $table->string('old_id')->index()->default('');
            $table->integer('estanteria_id')->unsigned()->nullable();
            $table->foreign('estanteria_id')->references('id')->on('almacenes_estanterias')->onDelete('cascade');
            $table->string('descripcion')->index();
            $table->boolean('disponible')->default(true);
            
            $table->timestamps();
            $table->integer('created_by')->unsigned()->nullable();
            $table->integer('updated_by')->unsigned()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
