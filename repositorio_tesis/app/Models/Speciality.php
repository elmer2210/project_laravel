<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Speciality extends Model
{
    use HasFactory;
    public function repositories(){
        return $this -> hasMany(Repository::class);
    }
    public function autors(){
        return $this -> hasMany(Autor::class);
    } 
}
