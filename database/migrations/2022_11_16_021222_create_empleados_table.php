<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->increments('comprbMov');
            $table->string("Nombre");
            $table->string("ApellidoPaterno");
            $table->string("ApellidoMaterno");
            $table->string("Correo");
            $table->string("Foto");
            $table->string("FechaNacimiento");
            $table->string("Puesto");
            $table->string("AreaTrabajo");
            $table->string("Sucursal");
            $table->string("EstatusLaboral");
            $table->string("FechaIngreso");
            $table->string("TelefonoContacto");
            $table->string("PersonaContactoEmergencia");
            $table->string("TelefonoContactoEmergencia");

            $table->string("NoVehiculo");
            $table->string("Combustible");
            $table->string("Placas");
            $table->string("Verificacion");
            $table->string("Modelo");



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
};
