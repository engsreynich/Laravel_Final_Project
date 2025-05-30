<?php
namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:teacher');
    }

    public function index()
    {
        $teacher = auth()->guard('teacher')->user();
        $bookings = Booking::where('teacher_id', $teacher->id)->with('user')->get();

        return view('pages.teacher_courses', compact('bookings'));
    }

    public function update(Request $request)
    {
        $teacher = auth()->guard('teacher')->user();
        $teacher->update([
            'subject' => $request->input('subject'),
            'available_time' => $request->input('available_time'),
            'price' => $request->input('price'),
            'class_type' => $request->input('class_type'),
        ]);

        return redirect()->back()->with('success', 'Profile updated!');
    }
}