<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public function company(){
        return $this->belongsTo(Company::class,'company');
    }

    protected $fillable = [
        'name', 'color', 'company'
    ];
}
