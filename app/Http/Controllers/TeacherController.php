<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\teacher;

class TeacherController extends Controller
{
    public function index()
    {
      return view('Teacher.Teachers',[
        'vars'=>teacher::all()

        ]);

      // code...
    }


    public function create($value='')
    {
      return view('Teacher.CreateTeacher');
      // code...
    }

    public function add()
    {
      $new=request()->validate([
        'name'=>'required',
        'age'=>'required',
        'subject'=>'required',
      'school_id'=>['required', Rule::exists('schools','id')]
      // code...
    ]);
    teacher::create($new);
    return redirect('/teachers');
  }
}
