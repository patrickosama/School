<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\student;
use App\Models\teacher;

class StudentController extends Controller
{
    public function index()
    {
      return view('Student.Students',[
        'vars'=>student::all()
      ]);
      // code...
    }

    public function show($id)
    {
      $student=student::find($id)->teacher;
      return view('Student.TShow',[
        'vars'=>$student
      ]);
      // code...
    }

    public function create()
    {
      return view('Student.CreateStudent');
      // code...
    }

    public function add()
    {
      $new=request()->validate([
      'name'=>'required',
      'grade'=>'required',
      'school_id'=>['required', Rule::exists('schools','id')]
      // code...
    ]);
    student::create($new);
    return redirect('/students');
  }

  public function edit(student $student)
  {
    return view('Student.EditStudent',[
      'student'=>$student
    ]);
    // code...
  }

public function update(student $student)
{
  $new=request()->validate([
  'name'=>'required',
  'grade'=>'required',
  'school_id'=>['required', Rule::exists('schools','id')]
  // code...
  ]);
  $student->update($new);
  return redirect('/students');
  // code...
}

public function destroy(student $student)
{
  $student->delete();
  return redirect('/students');
  // code...
}

}
