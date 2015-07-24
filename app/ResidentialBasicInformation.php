<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResidentialBasicInformation extends Model
{
    public function rbims()
    {
        return $this->hasMany('App\ResidentialBasicInformationMeta', 'information_id');
    }
    
}
