<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('clinic_name');
            $table->string('clinic_logo');
            $table->string('physician_name');
            $table->string('physician_contact');
            $table->string('patient_first_name');
            $table->string('patient_last_name');
            $table->string('patient_dob');
            $table->string('patient_contact');
            $table->string('chief_complaint');
            $table->string('consultation_note');
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
        Schema::dropIfExists('contacts');
    }
}
