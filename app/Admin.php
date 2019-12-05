<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed name
 * @property string password
 */
class Admin extends Model
{
    public function roles()
    {
        return $this->hasMany('App\Role');
    }
}
