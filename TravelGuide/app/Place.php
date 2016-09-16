<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $table = 'places';

    protected $primaryKey = 'pageid';

    public function images()
    {
        return $this->hasMany('App\Image');
    }
}
