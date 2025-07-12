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
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('presentation');
            $table->string('adresse');
            $table->string('configuration');
            $table->string('usage');
            $table->string('prix');
            $table->string('superficie')->nullable();
            $table->string('climatisation')->nullable();
            $table->string('douche')->nullable();
            $table->string('cuisine')->nullable();
            $table->string('balcon')->nullable();
            $table->string('sonnerie')->nullable();
            $table->string('alarme')->nullable();
            $table->string('detecteur')->nullable();
            $table->string('controle')->nullable();
            $table->string('ascenseur')->nullable();
            $table->string('images')->nullable();
            $table->string('imag')->nullable();
            $table->string('picture')->nullable();
            $table->string('ima')->nullable();
            $table->string('im')->nullable();
            $table->string('pictur')->nullable();
            $table->string('pict')->nullable();
            $table->string('videos')->nullable();
            // $table->string('condition')->nullable();
            $table->string('resp_images')->nullable();
            $table->string('nom');
            $table->string('caution');
            $table->string('avance');
            $table->string('prenoms');
            $table->string('telephone');
            $table->string('cour');
            $table->string('niveau');
            $table->string('securite')->nullable();
            $table->string('groupe')->nullable();
            $table->string('resp_adresse');
            $table->integer('status');
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
        Schema::dropIfExists('locations');
    }
};
