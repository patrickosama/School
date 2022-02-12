<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class school extends Model
{
    use HasFactory;

    protected $guarded= ['id'];

    public function teacher()
    {
      return $this->hasMany(teacher::class);
      // code...
    }

    public function student()
    {
      return $this->hasMany(student::class);
      // code...
    }
}
