<?php
namespace App\Http\Controllers;

use App\Models\Teacher;

class ClassController extends Controller
{
    public function index()
    {
        return view('pages.services');
    }

    public function listTeachers($type)
    {
        $teachers = Teacher::where('class_type', $type)->get();
        return view('pages.classes_teachers', compact('teachers', 'type'));
    }
}