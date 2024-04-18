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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('lname');
            $table->string('fname');
            $table->string('mname');
            $table->string('ext_name', 30)->nullable();
            $table->string('category');
            $table->string('birthdate')->nullable();
            $table->string('age')->nullable();
            $table->string('sex')->nullable();
            $table->string('home_add')->nullable();
            $table->string('contact')->nullable();
            $table->string('stud_nation')->nullable();
            $table->string('stud_religion')->nullable();
            $table->string('c_status')->nullable();
            $table->string('studCollege')->nullable();
            $table->string('studCourse')->nullable();
            $table->string('guardian')->nullable();
            $table->string('guardian_occup')->nullable();
            $table->string('guardian_contact')->nullable();
            $table->string('guardian_add')->nullable();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->string('bmi')->nullable();
            $table->string('temp')->nullable();
            $table->string('pr')->nullable();
            $table->string('bp')->nullable();
            $table->string('rr')->nullable();
            $table->string('disease')->nullable()->default(',,,,,,,,,,,,,,,,,,,');
            $table->string('disease_rem')->nullable()->default(',,,,,,,,,,,,,,,,,,,');
            $table->string('hospital_confine')->nullable()->default(',,,,,,,,,,,,,,,,,,,');
            $table->string('date_hospitaliz')->nullable()->default(',,,,,,,,,,,,,,,,,,,');
            $table->string('immunization1')->nullable()->default(',,,,,,,');
            $table->string('immunization2')->nullable()->default(',,,,,');
            $table->string('smoking')->nullable()->default(',');
            $table->string('drinking')->nullable()->default(',,,');
            $table->string('Menarche')->nullable();
            $table->string('Duration')->nullable();
            $table->string('Interval')->nullable();
            $table->string('pads_use')->nullable();
            $table->string('mens_symp')->nullable();
            $table->string('lmp')->nullable();
            $table->string('patient_findings')->nullable()->default(',,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,');
            $table->string('findings_stat')->nullable()->default(',,');
            $table->string('findings_desc')->nullable()->default(',,,,,,,,,,,,,,');
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
        Schema::dropIfExists('patients');
    }
};
