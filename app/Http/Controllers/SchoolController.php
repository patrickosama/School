<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\school;
use App\Http\Middleware\AdminsOnly;

class SchoolController extends Controller
{
    public function index()
    {
      return view('School.Schools',[
        'schools'=>school::all()
      ]);
      // code...
    }

    public function show($id)
    {
      $schools=school::find($id)->student;
      return view('School.SShow',[
        'schools'=>$schools
      ]);
      // code...
    }

    public function create()
    {
        return view('School.CreateSchool');
      // code...
    }

    public function add()
    {
      $new=request()->validate([
        'name'=>'required',
        'address'=>'required'
      ]);

      school::create($new);
      return redirect('/schools');
      // code...
    }

    public function edit(school $school)
    {
      return view('School.EditSchool',[
        'school'=>$school
      ]);
      // code...
    }

    public function update(school $school)
    {
      $new=request()->validate([
        'name'=>'required',
        'address'=>'required'
      ]);

      $school->update($new);
      return redirect('/schools');

      // code...
    }

    public function destroy(school $school)
    {
      $school->delete();
      return redirect('/schools');
      // code...
    }
}
