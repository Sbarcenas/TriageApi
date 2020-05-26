<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patients extends Model
{
    //
    public function triage(){
        return $this->hasMany("App\Patients");
    }
}
