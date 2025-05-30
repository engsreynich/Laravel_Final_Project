<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use App\Models\User;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResetPasswordController extends Controller
{
    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/';

    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('guest:teacher');
    }

    /**
     * Get the password reset validation rules.
     *
     * @return array
     */
    protected function rules()
    {
        return [
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8',
        ];
    }

    /**
     * Get the password reset credentials from the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    protected function credentials(Request $request)
    {
        return $request->only(
            'email', 'password', 'password_confirmation', 'token'
        );
    }

    /**
     * Get the broker to be used during password reset.
     *
     * @return \Illuminate\Contracts\Auth\PasswordBroker
     */
    public function broker()
    {
        $email = request()->input('email');
        $user = User::where('email', $email)->first();
        $teacher = Teacher::where('email', $email)->first();

        if ($teacher) {
            return app('auth.password')->broker('teachers');
        }

        return app('auth.password')->broker('users');
    }

    /**
     * Redirect the user after resetting their password.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function sendResetResponse(Request $request, $response)
    {
        $email = $request->input('email');
        $user = User::where('email', $email)->first();
        $teacher = Teacher::where('email', $email)->first();

        if ($teacher) {
            Auth::guard('teacher')->login($teacher);
            return redirect()->route('teacher.courses')
                            ->with('status', trans($response));
        }

        Auth::guard('web')->login($user);
        return redirect()->route('my.bookings')
                        ->with('status', trans($response));
    }
}