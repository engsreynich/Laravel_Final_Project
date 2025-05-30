<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Teacher;

class TeacherSeeder extends Seeder
{
    public function run()
{
    $teacherUser = \App\Models\User::create([
        'name' => 'Teacher One',
        'email' => 'teacher1@example.com',
        'password' => \Illuminate\Support\Facades\Hash::make('password123'),
        'role' => 'teacher',
    ]);

    \App\Models\Teacher::create([
        'user_id' => $teacherUser->id,
        'subject' => 'Mathematics',
        'type' => 'online',
    ]);
}
}