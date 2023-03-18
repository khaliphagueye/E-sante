<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRendezvousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rendezvouses', function (Blueprint $table) {
            $table->id();
            $table->enum('civilite', ['Mr','Mme','Mlle']);
            $table->string('prenom');
            $table->string('nom');
            $table->string('num_tel');
            $table->string('email');
            $table->timestamp('date_rv')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('service');
            $table->longText('commentaire');
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
        Schema::dropIfExists('rendezvouses');
    }
}
