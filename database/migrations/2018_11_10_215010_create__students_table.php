<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Students', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('first_name');
            $table->string('Last_name');
            $table->string('Nationality');
            $table->boolean('Gender')->nullable();
            $table->integer('Date')->nullable();
            
            $table->string('Address');
            $table->string('City');
            $table->string('State');
            $table->integer('Post_code');
            $table->string('Country');

            $table->string('Guardians_name');
            $table->string('Guardians_phonenumber');
            $table->string('Guardians_address');
            $table->string('Guardians_relationship');
            $table->string('Guardians_occupation');

            $table->string('Last_school_attended');
            $table->string('Reason_for_leaving_last_school');
            $table->string('Last_class_attended');
            $table->string('Admission_class_sought');
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
        Schema::dropIfExists('Students');
    }
}
