<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //    protected $fillable = ['cni_patient', 'nom_patient', 'prenom_patient', 'telephone_patient', 'mail_patient', 'groupe_sanguin_patient', 'adresse_patient', 'ville', 'chambre_id', 'lit_id'];

        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->enum('civilite_patient', ['Mr','Mme','Mlle']);
            $table->string('cni_patient')->unique();
            $table->string('nom_patient');
            $table->string('prenom_patient');
            $table->string('telephone_patient');
            $table->string('mail_patient')->unique();
            $table->enum('groupe_sanguin_patient', ['AB+', 'AB-','A+', 'A-','B+', 'B-','O+', 'O-']);
            $table->string('adresse_patient');
            $table->string('ville_patient');
            $table->timestamps();

            $table->foreignId('chambre_id')->constrained();
            $table->foreignId('lit_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
