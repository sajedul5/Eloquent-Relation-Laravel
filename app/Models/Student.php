<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = "students";

    public function phone()
    {
        return $this->hasOne('App\Models\Phone');
    }

    public function subjects()
    {
        return $this->hasMany(Subject::class);
    }
}
