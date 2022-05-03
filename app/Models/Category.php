<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    #one To Many
    protected $appends = [
        'parent'
   ];

    public function places()
    {
        return $this->hasMany(Place::class);
    }

    

    // public function place(){
    //     return $this->hasMany(Place::class);
    // }
}
