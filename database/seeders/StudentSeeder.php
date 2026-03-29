<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    public function run(): void
    {
        Student::create([
            'student_number' => '2026-0001',
            'name' => 'Juan Dela Cruz',
            'course' => 'BS Information Technology',
            'age' => 20,
            'email' => 'juan@example.com',
        ]);

        Student::create([
            'student_number' => '2026-0002',
            'name' => 'Maria Santos',
            'course' => 'BS Computer Science',
            'age' => 22,
            'email' => 'maria@example.com',
        ]);
    }
}