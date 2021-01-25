<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    use HasFactory;
    public function specialities(){
        return $this -> belongsTo(Speciality::class)->withTimeStamp();
    }
    public function repositories(){
        return $this -> belongsTo(Repository::class);
    }
}
