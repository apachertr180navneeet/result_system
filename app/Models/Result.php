<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Result extends Model
{
    use HasFactory , SoftDeletes;

    protected $table = "results";

    protected $fillable = [
        'class',
        'section',
        'addmission_number',
        'addmission_number',
        'student_name',
        'father_name',
        'mother_name',
        'roll_number',
        'gender',
        'student_type',
        'hindi_half_yearly_written',
        'hindi_half_yearly_oral',
        'hindi_yearly_written',
        'hindi_yearly_oral',
        'english_half_yearly_written',
        'english_half_yearly_oral',
        'english_yearly_written',
        'english_yearly_oral',
        'maths_half_yearly_written',
        'maths_half_yearly_oral',
        'maths_yearly_written',
        'maths_yearly_oral',
        'envormental_studies_half_yearly',
        'envormental_studies_yearly',
        'work_expirence_half_yearly',
        'work_expirence_yearly',
        'art_education_half_yearly',
        'art_education_yearly',
        'health_and_phisical_education_half_yearly',
        'health_and_phisical_education_yearly',
        'computer_half_yearly',
        'computer_yearly',
        'gk_half_yearly',
        'gk_yearly'
    ];
}
