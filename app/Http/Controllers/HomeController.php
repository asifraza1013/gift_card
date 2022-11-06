<?php

namespace App\Http\Controllers;

use PDF;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use App\Notifications\GiftCardNotification;
use DateTime;
use Illuminate\Support\Facades\Notification;

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
            // 'password' => ['required', 'string'],
        ]);

        // dd($validator->errors()->getMessages());
        // Alert::success('Congrats', 'You\'ve Successfully Registered');
        if ($validator->fails()) {
            toast('Please try with correct data Thanks!', 'error');
            return redirect()->back();
        }
        $user = User::where('email', $request->email)->first();
        if($user){
            // dd(Carbon::now()->toDateTimeString());
            $to = \Carbon\Carbon::createFromFormat('Y-m-d H:s:i', $user->updated_at);
            $from = \Carbon\Carbon::createFromFormat('Y-m-d H:s:i', Carbon::now()->toDateTimeString());
            $diff_in_days = $to->diffInDays($from);
            if($diff_in_days < 1){
                toast('Opps! you have already got today gift card. Please try again next day. thank you.', 'error');
                return redirect(route('register'));
            }
        }
        $data = $request->all();
        $user = User::updateOrCreate(
            ['email' => $data['email']],
            [
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'password' => 'Password@1',
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
        $data = $user->toArray();
        $pdf = PDF::loadView('emails.gift_pdf', compact(['data']));
        $user->pdf = $pdf;
        // return view('emails.gift_pdf', compact([
        //     'data'
        // ]));
        Log::info('sendingEmail '.$user->email);
        Notification::route('mail', $user->email)
                ->notify(new GiftCardNotification($user));
        toast('Gift Card already sent to your given email. Thank you for using our service', 'success');
        return redirect(route('register'));
    }

    public function exportAllUsers(Request $request)
    {
        $title = 'All Users List';
        $users = User::where('type', 2)->get()->toArray();
        $pdf = PDF::loadView('export.gift_card', compact(['users']));

        return $pdf->download('allUsersList.pdf');
    }
}
