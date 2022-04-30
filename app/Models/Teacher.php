<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    public function getTeachers()
    {
        return Teacher::select('id','name')
                    ->where('status', 1)
                    ->get();
    }


}
