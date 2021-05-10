<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function company(){
        return $this->belongsToMany(Company::class);
    }

    use HasFactory;
}
