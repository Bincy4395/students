<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Teacher;
use Carbon\Carbon;

class TeachersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Teacher::create([
            'name' => 'Sithara',
            'age' => 33,
            'gender' => 'Female',
            'status' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Teacher::create([
            'name' => 'Asha',
            'age' => 35,
            'gender' => 'Female',
            'status' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);


        Teacher::create([
            'name' => 'Manju',
            'age' => 40,
            'gender' => 'Female',
            'status' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);


        Teacher::create([
            'name' => 'John',
            'age' => 33,
            'gender' => 'Male',
            'status' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Teacher::create([
            'name' => 'Vijay',
            'age' => 50,
            'gender' => 'Male',
            'status' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
