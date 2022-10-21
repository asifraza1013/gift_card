<?php

namespace App\Http\Controllers;

use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        toast('Login Successfull!', 'success');
        $user = Auth::user();
        if ($user->type != 1) return redirect(route('user.profile'));
        if ($user->type == 1) return redirect(route('admin.dashboard'));
        return view('home');
    }

    /**
     * User registration flow
     */
    public function manuallRegistrations(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string'],
        ]);

        // dd($validator->errors()->getMessages());
        // Alert::success('Congrats', 'You\'ve Successfully Registered');
        if ($validator->fails()) {
            toast('Please try with correct data Thanks!', 'error');
            return redirect()->back();
        }

        $data = $request->all();
        $user = User::updateOrCreate(
            ['email' => $data['email']],
            [
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'password' => $data['email'],
                'email_verified_at' => Carbon::now()->toDateTimeString(),
            ],
        );
        Log::info("newUserCreated " . json_encode($user));
        // $user = new User();
        // $user->first_name = $data['first_name'];
        // $user->last_name = $data['last_name'];
        // $user->email = $data['email'];
        // $user->password = $data['password'];
        // $user->email_verified_at = Carbon::now()->toDateTimeString();
        // $user->save();
        // if (setting('register_notification_email')) {
        //     Mail::to($data['email'])->send( new UserRegistered($user));
        // }
        // if ( setting('default_role')) {
        //     $user->assignRole(setting('default_role'));
        // }
        toast('Gift Card already sent to your given email. Thank you for using our service', 'success');
        return redirect(route('register'));
    }
}
