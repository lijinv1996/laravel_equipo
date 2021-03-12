<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable=['clinic_name',
                         'clinic_logo',
                         'physician_name',
                         'physician_contact',
                         'patient_first_name',
                         'patient_last_name',
                         'patient_dob',
                         'patient_contact',
                         'chief_complaint',
                         'consultation_note'
                        ];
}
