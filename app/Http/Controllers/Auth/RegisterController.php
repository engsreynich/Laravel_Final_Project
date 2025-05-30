<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Teacher;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = '/';

    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('guest:teacher');
    }

    protected function validator(array $data)
    {
        $rules = [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role' => ['required', 'in:student,teacher'],
        ];

        if ($data['role'] === 'teacher') {
            $rules['email'][] = 'unique:teachers';
            $rules['subject'] = ['required', 'string', 'max:255'];
            $rules['available_time'] = ['required', 'string', 'max:255'];
            $rules['price'] = ['required', 'numeric', 'min:0'];
            $rules['class_type'] = ['required', 'in:online,physical'];
        } else {
            $rules['email'][] = 'unique:users';
        }

        return Validator::make($data, $rules);
    }

    protected function create(array $data)
    {
        if ($data['role'] === 'teacher') {
            return Teacher::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'subject' => $data['subject'],
                'available_time' => $data['available_time'],
                'price' => $data['price'],
                'class_type' => $data['class_type'],
            ]);
        }

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    protected function registered(Request $request, $user)
    {
        $user->sendEmailVerificationNotification();
        return redirect($this->redirectPath())->with('status', 'A verification email has been sent to your email address.');
    }
}