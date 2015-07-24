<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResidentialBasicInformationMeta extends Model
{
    public function rbi()
    {
        return $this->belongsTo('App\ResidentialBasicInformation');
    }
}
