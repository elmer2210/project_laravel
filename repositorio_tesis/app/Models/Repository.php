<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repository extends Model
{
    use HasFactory;
    public function teachers(){
        return $this -> belongsTo(Teacher::class)->withTimeStamp();
    }
    public function specialities(){
        return $this -> belongsTo(Speciality::class)->withTimeStamp();
    }
    public function categories(){
        return $this -> belongsTo(Category::class)->withTimeStamp();
    }
    public function autors(){
        return $this -> belongsTo(Autor::class);
    }
}
