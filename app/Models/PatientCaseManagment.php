<?php

namespace euro_hms\Models;

use Illuminate\Database\Eloquent\Model;

class PatientCaseManagment extends Model
{
    //
     protected $table = 'patient_case_managment';

        protected $fillable=[
              'case_type',
              'section_type',
              'section_id',
              'patient_id',
              'status',
        ];
}
