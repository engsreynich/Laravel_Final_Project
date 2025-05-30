<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VerificationController extends Controller
{
    use VerifiesEmails;

    /**
     * Where to redirect users after verification.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:web,teacher');
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
    }

    /**
     * Mark the authenticated user's email as verified.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */
    public function verify(Request $request)
    {
        $user = $request->user('web') ?? $request->user('teacher');

        if (!$user) {
            return redirect($this->redirectPath())->with('error', 'Invalid verification link.');
        }

        if ($user->hasVerifiedEmail()) {
            return redirect($this->redirectPath())->with('status', 'Email already verified.');
        }

        if ($user->markEmailAsVerified()) {
            event(new \Illuminate\Auth\Events\Verified($user));
        }

        return redirect($this->redirectPath())->with('status', 'Email successfully verified!');
    }

    /**
     * Get the post-verification redirect path.
     *
     * @return string
     */
    protected function redirectTo()
    {
        if (Auth::guard('teacher')->check()) {
            return route('teacher.courses');
        }

        return route('my.bookings');
    }

    /**
     * Resend the email verification notification.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function resend(Request $request)
    {
        $user = $request->user('web') ?? $request->user('teacher');

        if (!$user) {
            return redirect($this->redirectPath())->with('error', 'User not found.');
        }

        if ($user->hasVerifiedEmail()) {
            return redirect($this->redirectPath())->with('status', 'Email already verified.');
        }

        $user->sendEmailVerificationNotification();

        return back()->with('status', 'Verification link sent!');
    }
}