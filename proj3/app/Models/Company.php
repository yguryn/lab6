<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function car(){
        return $this->hasMany(Car::class);
    }

    public function country(){
        return $this->belongsToMany(Country::class);
    }

    public function getFirstNameAttribute($value)
    {
        return ucfirst($value);
    }

    public $table = "company";
    protected $fillable = [
        'name', 'quantity'
    ];
}
