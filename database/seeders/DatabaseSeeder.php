<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\school;
use App\Models\teacher;
use App\Models\student;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)=>create();

        school::truncate();
        teacher::truncate();
        student::truncate();
        User::truncate();


          User::create([
            'name'=>'patrickosama',
            'email'=>'patrickosama72@gmail.com',
            'password'=>bcrypt('patspats')
          ]);

          $first = school::create([
              'name'=> 'Ramses College' ,
              'address'=> 'The First Street'
        ]);

          $second = school::create([
              'name'=> 'New Testament',
              'address'=> 'The Second Street'
        ]);

          teacher::create([
            'school_id'=> $first->id,
            'name'=>'Mr Ahmed',
            'age'=>30,
            'subject'=>'Arabic'

          ]);

          teacher::create([
            'school_id'=>$first->id,
            'name'=>'Mr Hany',
            'age'=>35,
            'subject'=>'English'

          ]);

          teacher::create([
            'school_id'=>$first->id,
            'name'=>'Mr Patrick',
            'age'=>23,
            'subject'=>'French'

          ]);

          teacher::create([
            'school_id'=>$first->id,
            'name'=>'Mr Fady',
            'age'=>35,
            'subject'=>'Physics'

          ]);

          teacher::create([
            'school_id'=>$second->id,
            'name'=>'Mr Samy',
            'age'=>40,
            'subject'=>'Maths'

          ]);

          teacher::create([
            'school_id'=>$second->id,
            'name'=>'Mr Mohamed',
            'age'=>50,
            'subject'=>'Arabic'

          ]);

          teacher::create([
            'school_id'=>$second->id,
            'name'=>'Mr Nader',
            'age'=>26,
            'subject'=>'Frnch'

          ]);

          student::create([
            'school_id'=>$first->id,
            'name'=>'Patrick Osama',
            'grade'=>1
          ]);

          student::create([
            'school_id'=>$first->id,
            'name'=>'Samy magdy',
            'grade'=>2
          ]);

          student::create([
            'school_id'=>$first->id,
            'name'=>'Mohamed Ahmed',
            'grade'=>3
          ]);

          student::create([
            'school_id'=>$second->id,
            'name'=>'Abdallah Osama',
            'grade'=>1
          ]);

          student::create([
            'school_id'=>$second->id,
            'name'=>'Hossam Sherief',
            'grade'=>2
          ]);

          student::create([
            'school_id'=>$second->id,
            'name'=>'Nader Fouad',
            'grade'=>3
          ]);



    }
}
