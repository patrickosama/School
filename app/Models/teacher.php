<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teacher extends Model
{
    use HasFactory;

    protected $guarded= ['id'];

    public function school()
    {
      return $this->belongsTo(school::class);
      // code...
    }

    public function student()
    {
      return $this->belongsToMany(student::class);
      // code...
    }

}
