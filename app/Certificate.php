<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    public function participants()
    {
        return $this->belongsToMany('App\Participant','certificate_participant','certificate_id','participant_id');
    }
}
