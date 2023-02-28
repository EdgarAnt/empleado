<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //Basicamente aqui esta el create
        Schema::create('empleados', function (Blueprint $table) {
            //Aqui van los campos que se usan para manipular cada uno de los empleados
            $table->id();//ID, por default se hara autoincremental

            //Basicamente aqui la creacion de las tablas o migraciones
            $table->string('nombre');
            $table->string('ApellidoPaterno');
            $table->string('ApellidoMaterno');
            $table->string('Correo');
            $table->string('Foto');

            $table->timestamps();//Tiempo que se genera un registro
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
