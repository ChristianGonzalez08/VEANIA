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
        Schema::create('salidas', function (Blueprint $table) {
            $table->id();
            $table->string("IDcomprb");

            //Datos Producto
            $table->string("CodProduct");
            $table->string("Nombre");
            $table->string("Familia");
            $table->string("Sub-Familia");

            //Informacion de Salida
            $table->string("TipoSalida");
            $table->string("FechaSalida");
            $table->string("ComprbInteggra");
            $table->string("FechaCmprbInteggra");

            //Detalles Venta
            $table->string("CantidadSalida");
            $table->string("PrecioVenta");
            $table->string("PrecioRegular");

            $table->string("CostoUnitario");
            $table->string("PrecioPromocion");
            $table->string("PorcentajeUtilidad");
            $table->string("Utilidad");
            $table->string("Moneda");

            //Datos Vendedor
            $table->string("Vendedor");
            $table->string("comision");
            $table->string("EstatusComision");

            //Datos Cliente
            $table->string("Cliente");
            $table->string("NoCliente");

            //Datos Entrega
            $table->string("FechaEntrega");
            $table->string("ResponEntrega");
            $table->string("ResponRecepcion");
            $table->string("Firma/Sello");


            //Datos del Pago
            $table->string("FormaPago");
            $table->string("NoPago");


            $table->string("OC");
            $table->string("Presupesto");
            $table->string("NombrePresupuesto");
            $table->string("ResponsableMovimiento");
            $table->string("SucSalida");

            //devoluciones
            $table->string("FechaDevolucion");
            $table->string("CausaDevolucion");



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
        Schema::dropIfExists('salidas');
    }
};
