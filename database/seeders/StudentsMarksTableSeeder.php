<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\StudentsMark;
use Carbon\Carbon;

class StudentsMarksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StudentsMark::create([
            'student_id' => 1,
            'term' => 'ONE',
            'maths_marks' => 90,
            'science_marks' => 90,
            'history_marks' => 90,
            'total_marks' => 270,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        StudentsMark::create([
            'student_id' => 1,
            'term' => 'TWO',
            'maths_marks' => 80,
            'science_marks' => 80,
            'history_marks' => 80,
            'total_marks' => 240,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        StudentsMark::create([
            'student_id' => 2,
            'term' => 'ONE',
            'maths_marks' => 80,
            'science_marks' => 80,
            'history_marks' => 80,
            'total_marks' => 240,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        StudentsMark::create([
            'student_id' => 4,
            'term' => 'ONE',
            'maths_marks' => 80,
            'science_marks' => 80,
            'history_marks' => 80,
            'total_marks' => 240,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        StudentsMark::create([
            'student_id' => 5,
            'term' => 'TWO',
            'maths_marks' => 100,
            'science_marks' => 100,
            'history_marks' => 100,
            'total_marks' => 300,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
