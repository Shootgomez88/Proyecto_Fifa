<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFifaDatabase extends Migration
{
    public function up()
    {
        // Tabla de Paises
        Schema::create('paises', function (Blueprint $table) {
            $table->id(); // id autoincremental
            $table->string('nombre')->unique();
            $table->string('continente');
            $table->timestamps();
        });

        // Tabla de Divisiones
        Schema::create('divisiones', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->unique();
            $table->unsignedBigInteger('region'); // region como clave foránea de pais
            $table->timestamps();

            $table->foreign('region')->references('id')->on('paises')->onDelete('cascade');
        });

        // Tabla de Equipos
        Schema::create('equipos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->unique();
            $table->unsignedBigInteger('pais');
            $table->unsignedBigInteger('division')->nullable();
            $table->integer('fundado_en')->nullable();
            $table->string('estadio')->nullable();
            $table->integer('titulos')->default(0); // Número de títulos ganados
            $table->timestamps();

            $table->foreign('pais')->references('id')->on('paises')->onDelete('cascade');
            $table->foreign('division')->references('id')->on('divisiones')->onDelete('set null');
        });

        // Tabla de Jugadores
        Schema::create('jugadores', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->unsignedBigInteger('equipo')->nullable();
            $table->unsignedBigInteger('pais');
            $table->integer('edad');
            $table->string('posicion'); // Ej: Delantero, Mediocampista, etc.
            $table->float('valor_mercado', 12, 2)->default(0); // Valor en millones
            $table->timestamps();

            $table->foreign('equipo')->references('id')->on('equipos')->onDelete('set null');
            $table->foreign('pais')->references('id')->on('paises')->onDelete('cascade');
        });

        // Tabla de Tiendas (Sobres de FIFA)
        Schema::create('tiendas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('tipo_sobre')->nullable(); // Ej: Oro, Plata, etc.
            $table->float('precio', 8, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tiendas');
        Schema::dropIfExists('jugadores');
        Schema::dropIfExists('equipos');
        Schema::dropIfExists('divisiones');
        Schema::dropIfExists('paises');
    }
}