<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Mail\PasswordReset;
use App\Models\Order;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $users = User::paginate(10);
        $data = ['users' => $users];
        return view('admin.users', $data);
    }
    public function dashboard()
    {
        $orders = Order::where("user_id", auth()->user()->id)->paginate(10);
        $data = ['orders' => $orders];
        return view('dashboard', $data);
    }
    public function logout()
    {
        auth()->logout();
        return redirect("/");
    }
    public function login()
    {

        return view('signin');
    }
    public function password_reset($token)
    {
        $isthere = DB::table("password_resets")->where("token", $token)->count();
        $user = null;
        if ($isthere) {
            $reset = DB::table("password_resets")->where("token", $token)->first();
            $user = User::where("email", $reset->email)->first();
        }
        return view("password_reset", ['user' => $user]);
    }

    public function reset_password(Request $request)
    {
        if ($request->new_password != $request->confirm_password) {
            return redirect()->back()->with("error", "New and confirm password does not match");
        }
        $user = User::find($request->user_id);
        $user->password = Hash::make($request->new_password);
        if ($user->save()) {
            return redirect()->back()->with("success", "Password Reset Successfully");
        } else {
            return redirect()->back()->with("error", "Something went wrong");
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {
        if (User::where("email", $request->email)->count()) {
            if (Auth::attempt($request->only(['email', 'password']))) {
                $user = User::where("email", $request->email)->get()[0];
                Auth::login($user);
                return redirect("/dashboard");
            } else {
                return redirect()->back()->with("error", "Invalid Password");
            }
        } else {
            return redirect()->back()->with("error", "Invalid Email");
        }
    }
    public function forget_password(Request $request)
    {
        return view('forget_password');
    }
    public function forget_password_link(Request $request)
    {
        if (User::where("email", $request->email)->count()) {
            $token = md5($request->email) . "-" . uniqid();
            if (DB::table("password_resets")->where("email", $request->email)->count()) {
                DB::table("password_resets")->where("email", $request->email)->delete();
            }
            DB::table("password_resets")->insert([
                'email' => $request->email,
                'token' => $token,
                'created_at' => now()
            ]);

            // Mail::to($request->email)->send(new PasswordReset($token));
            return redirect()->back()->with("success", "Reset Link Send");
        } else {
            return redirect()->back()->with("error", "Email Not Exists in our Server");
        }
    }
    public function register(Request $request)
    {
        if (User::where("email", $request->email)->count()) {
            return ['status' => 0, "message" => "Email Already exists"];
        } else {
            $user = User::create([
                'email' => $request->email,
                'name' => $request->name,
                'phone' => $request->phone,

                'password' => Hash::make($request->password),

            ]);
            if ($user) {
                Auth::login($user);
                return ['status' => 1, "message" => "Logged In"];
            } else {
                return ['status' => 0, "message" => "Please Input credentials correctly"];
            }
        }
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
        $user =  $request->user();
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;

        if ($request->hasFile('profile')) {

            $file = $request->file('profile');
            $name = uniqid() . "." . $file->getClientOriginalExtension();
            $file->move("uploads/profiles/", $name);
            $user->profile = $name;
        }
        if ($user->save()) {
            return redirect()->back()->with("success", "profile Updated");
        } else {
            return redirect()->back()->with("error", "something went wrong");
        }
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
}
