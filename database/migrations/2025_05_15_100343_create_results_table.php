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
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->string('class');
            $table->string('section');
            $table->string('addmission_number');
            $table->string('dob');
            $table->string('student_name');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('roll_number');
            $table->string('gender');
            $table->string('student_type');
            $table->string('hindi_half_yearly_written');
            $table->string('hindi_half_yearly_oral');
            $table->string('hindi_yearly_written');
            $table->string('hindi_yearly_oral');
            $table->string('english_half_yearly_written');
            $table->string('english_half_yearly_oral');
            $table->string('english_yearly_written');
            $table->string('english_yearly_oral');
            $table->string('maths_half_yearly_written');
            $table->string('maths_half_yearly_oral');
            $table->string('maths_yearly_written');
            $table->string('maths_yearly_oral');
            $table->string('envormental_studies_half_yearly');
            $table->string('envormental_studies_yearly');
            $table->string('work_expirence_half_yearly');
            $table->string('work_expirence_yearly');
            $table->string('art_education_half_yearly');
            $table->string('art_education_yearly');
            $table->string('health_and_phisical_education_half_yearly');
            $table->string('health_and_phisical_education_yearly');
            $table->string('computer_half_yearly');
            $table->string('computer_yearly');
            $table->string('gk_half_yearly');
            $table->string('gk_yearly');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('results');
    }
};
