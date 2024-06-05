<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::create([
            'group_id' => 1,
            'surname' => 'Петров',
            'name' => 'Иван',
        ]);
        Student::create([
            'group_id' => 1,
            'surname' => 'Иванов',
            'name' => 'Семен',
        ]);
        Student::create([
            'group_id' => 1,
            'surname' => 'Сидоров',
            'name' => 'Василий',
        ]);
        Student::create([
            'group_id' => 2,
            'surname' => 'Семенов',
            'name' => 'Петр',
        ]);
    }
}