<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\OrderOwner;
use App\Rules\Passcheck;
use Auth;
use Hash;
use Illuminate\Http\Request;
use Validator;

class UserController extends Controller
{
    /**
     * Show the edit user modal
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function showEditUser()
    {
        $data = [
            'user' => Auth::user(),
        ];

        return view('ManageUser.Modals.EditUser', $data);
    }

    /**
     * Updates the current user
     *
     * @param Request $request
     * @return mixed
     */
    public function postEditUser(Request $request)
    {
        $rules = [
            'email'        => [
                'required',
                'email',
                'unique:users,email,' . Auth::user()->id . ',id,account_id,' . Auth::user()->account_id
            ],
            'password'     => [new Passcheck],
            'new_password' => ['min:8', 'confirmed', 'required_with:password'],
            'first_name'   => ['required'],
            'last_name'    => ['required'],
        ];

        $messages = [
            'email.email'         => trans("Controllers.error.email.email"),
            'email.required'      => trans("Controllers.error.email.required"),
            'password.passcheck'  => trans("Controllers.error.password.passcheck"),
            'email.unique'        => trans("Controllers.error.email.unique"),
            'first_name.required' => trans("Controllers.error.first_name.required"),
            'last_name.required'  => trans("Controllers.error.last_name.required"),
        ];

        $validation = Validator::make($request->all(), $rules, $messages);

        if ($validation->fails()) {
            return response()->json([
                'status'   => 'error',
                'messages' => $validation->messages()->toArray(),
            ]);
        }

        $user = Auth::user();

        if ($request->get('password')) {
            $user->password = Hash::make($request->get('new_password'));
        }

        $user->first_name = $request->get('first_name');
        $user->last_name = $request->get('last_name');
        $user->email = $request->get('email');

        $user->save();

        return response()->json([
            'status'  => 'success',
            'message' => trans("Controllers.successfully_saved_details"),
        ]);
    }


    public function login(Request $request){
        $class ='white-bg';
        return view('web.login',compact('class'));
    }

    public function doLogin(Request $request){
        // dd($request->all());
        $email = $request->email;
        $password = $request->password;
        $attempt = Auth::guard('attendee')->attempt(['email' => $email, 'password' => $password]);
        
        if($attempt){
            return redirect()->route('user.home');
            // dd(auth('attendee')->user());
        }
    }


    public function forgotPassword(Request $request){
        $class ='white-bg';
        return view('web.forgotPassword',compact('class'));
    }

    public function doForgotPassword(Request $request){
        // dd($request->all());
        $email = $request->email;
        $password = $request->password;
        $attempt = Auth::guard('attendee')->attempt(['email' => $email, 'password' => $password]);
        
        if($attempt){
            return redirect()->route('user.home');
            // dd(auth('attendee')->user());
        }
    }

    public function resetPassword(Request $request){
        $class ='white-bg';
        return view('web.resetPassword',compact('class'));
    }

    public function doResetPassword(Request $request){
        // dd($request->all());
        $email = $request->email;
        $password = $request->password;
        $attempt = Auth::guard('attendee')->attempt(['email' => $email, 'password' => $password]);
        
        if($attempt){
            return redirect()->route('user.home');
            // dd(auth('attendee')->user());
        }
    }

    public function otp(Request $request){
        $class ='white-bg';
        return view('web.signup',compact('class'));
    }

    public function doOTP(Request $request){
        // dd($request->all());
        $email = $request->email;
        $password = $request->password;
        $attempt = Auth::guard('attendee')->attempt(['email' => $email, 'password' => $password]);
        
        if($attempt){
            return redirect()->route('user.home');
            // dd(auth('attendee')->user());
        }
    }

    public function signup(Request $request){
        $class ='white-bg';
        return view('web.signup',compact('class'));
    }

    public function doSignup(Request $request){
        // dd($request->all());
        $email = $request->email;
        $password = $request->password;
        $name = $request->name;
        $rules = [
            'email'        => [
                'required',
                'email',
                'unique:order_owners,email'
            ],
            'password'     => ['required'],
            'name'   => ['required'],
            
        ];
        $validation = Validator::make($request->all(), $rules);
        
        if ($validation->fails()) {
            
            return redirect()->back();
        }
        $user = OrderOwner::create([
            'first_name'  =>  $name,
            'email'  =>  $email,
            'password'  =>  bcrypt($password),
        ]);
        $attempt = Auth::guard('attendee')->attempt(['email' => $email, 'password' => bcrypt($password)]);
        if($attempt){
            
            return redirect()->route('user.home');
            // dd(auth('attendee')->user());
        }
        else{
            return redirect()->back();
        }
    }

    public function home(Request $request){
        $class ='white-bg';
        //dump(auth('attendee')->user());
        $orders = auth('attendee')->user()->orders;
        return view('web.home',compact('class','orders'));
    }

    public function doLogout(){
        auth('attendee')->logout();
        return redirect('/');
    }

     
}
