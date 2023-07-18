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
        Schema::create('propuestas', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();
            $table->unsignedBigInteger('categoria_id');
            $table->foreign('categoria_id', 'fk_propuesta_categorias')->references('id')->on('categorias')->onDelete('restrict')->onUpdate('restrict');
            $table->string('nombre',255)->nullable();
            $table->string('apellido',255)->nullable();
            $table->string('cedula',255)->nullable();
            $table->string('direccion',255)->nullable();
            $table->string('telefono',255)->nullable();
            $table->string('email',255)->nullable();
            $table->longText('descripcion')->nullable();
            $table->string('foto1',255)->nullable();
            $table->string('foto2',255)->nullable();
            $table->string('foto3',255)->nullable();
            $table->string('pagina',255)->nullable();
            $table->string('facebook',255)->nullable();
            $table->string('instagram',255)->nullable();
            $table->string('producto1',255)->nullable();
            $table->string('producto2',255)->nullable();
            $table->string('producto3',255)->nullable();
            $table->string('producto4',255)->nullable();
            $table->string('producto5',255)->nullable();
            $table->string('producto6',255)->nullable();
            $table->integer('estado')->default(1);
            $table->timestamps();
            $table->charset = 'utf8';
            $table->collation = 'utf8_spanish_ci';
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('propuestas');
    }
};
