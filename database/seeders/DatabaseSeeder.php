<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Teacher;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Seed a student
        User::create([
            'name' => 'Student One',
            'email' => 'student1@example.com',
            'password' => \Illuminate\Support\Facades\Hash::make('password123'),
        ]);

        // Seed a teacher
        Teacher::create([
            'name' => 'Teacher One',
            'email' => 'teacher1@example.com',
            'password' => \Illuminate\Support\Facades\Hash::make('password123'),
            'subject' => 'Mathematics',
            'available_time' => 'Mon-Fri 9 AM - 5 PM',
            'price' => 50.00,
            'class_type' => 'online',
        ]);
    }
}