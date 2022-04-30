<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;
use Carbon\Carbon;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::create([
            'name' => 'Bincy Mathew',
            'age' => 18,
            'gender' => 'Female',
            'reporting_teacher_id' => 1,
            'status' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Student::create([
            'name' => 'Jity Samuel',
            'age' => 18,
            'gender' => 'Female',
            'reporting_teacher_id' => 2,
            'status' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Student::create([
            'name' => 'Sulphy',
            'age' => 18,
            'gender' => 'Female',
            'reporting_teacher_id' => 3,
            'status' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Student::create([
            'name' => 'Vismaya Kumar',
            'age' => 18,
            'gender' => 'Female',
            'reporting_teacher_id' => 3,
            'status' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Student::create([
            'name' => 'Vidya V',
            'age' => 18,
            'gender' => 'Female',
            'reporting_teacher_id' => 3,
            'status' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
