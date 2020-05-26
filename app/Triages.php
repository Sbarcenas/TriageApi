<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Triages extends Model
{
    protected $fillable = ["consult_reason", "Diagnostic", "suspect_covid"];
}
