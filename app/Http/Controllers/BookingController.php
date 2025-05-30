<?php
namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Teacher;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function book(Request $request, $teacherId)
    {
        $teacher = Teacher::findOrFail($teacherId);
        $user = auth()->guard('web')->user();

        Booking::create([
            'user_id' => $user->id,
            'teacher_id' => $teacher->id,
            'time_slot' => $request->input('time_slot'),
            'status' => 'booked',
        ]);

        return redirect()->back()->with('success', 'Booking successful!');
    }

   public function cancel($bookingId)
{
    $booking = Booking::findOrFail($bookingId);
    $this->authorize('cancel', $booking);

    $booking->update(['status' => 'cancelled']);

    // Notify student
    $booking->user->notify(new BookingCancellation($booking));
    // Notify teacher
    $booking->teacher->notify(new BookingCancellation($booking));

    return redirect()->back()->with('success', 'Booking cancelled!');
}

    public function myBookings()
    {
        $bookings = auth()->guard('web')->user()->bookings()
            ->with('teacher')
            ->where('status', 'booked')
            ->get();

        return view('pages.student_bookings', compact('bookings'));
    }
}