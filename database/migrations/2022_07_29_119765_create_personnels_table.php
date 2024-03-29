<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonnelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//protected $fillable = ['matricule', 'civilite', 'prenom', 'nom', 'mail', 'telephone', 'statut', 'service_id'];
        Schema::create('personnels', function (Blueprint $table) {
            $table->id();
            $table->string('matricule');
            $table->enum('civilite', ['Mr','Mme','Mlle']);
            $table->string('prenom');
            $table->string('nom');
            $table->string('mail');
            $table->string('telephone');
            $table->string('statut');
            $table->timestamps();

            $table->foreignId('service_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personnels');
    }
}
