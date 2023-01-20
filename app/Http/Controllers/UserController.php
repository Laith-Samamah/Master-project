<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profile');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    //////////////////SIGN UP FORM VIEW

    public function signup()
    {
        // dd(request()->all());
        return view('signup');
    }

    //////////////////SIGN UP FORM SUBMIT

    public function signupsubmit(Request $request)
    {

        $formFields = $request->validate(
            [
                'name' => ['required', 'max:255'],
                'email' => ['required', 'email', 'max:255', 'unique:users'],
                'phone' => ['required', 'unique:users', 'size:10'],
                'city' => ['required'],
                'password' => ['required', 'min:6', 'confirmed'],
            ]
        );

        //Password hashing
        $formFields['password'] = bcrypt($formFields['password']);

        // dd($formFields);
        //create user
        $user = User::create($formFields);

        Auth::login($user);



        return back()->with('sucsess', 'User created!');
    }

    //////////////////LOG IN FORM VIEW


    public function login(Request $request)
    {
        // dd(request()->all());
        return view('login');
    }

    //////////////////LOG IN FORM SUBMIT

    public function loginsubmit(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/')->with('sucsess', 'User logged in!');
        }
        return back()->with('error', 'failed to login');
    }

    //////////////////LOG OUT

    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect('/')->with('sucsess', 'You have been logged out!');
    }
}
