<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->has('approve')) {
            $user = User::find(request('approve'));
            $user->email_verified_at = $user->email_verified_at == null ? now() : null;
            $user->save();
            return redirect()->back()->with('success', 'Vendor status changed');
        }
        $users = User::where("vendor", 1)->paginate(10);
        $data = ['users' => $users];
        return view('admin.vendors', $data);
    }
    public function dashboard()
    {
        if (auth()->user()) {
            if (!auth()->user()->vendor) return redirect("/");
        } else {
            return redirect(route("vendor.login"));
        }


        $revenue = 0;
        // foreach (Order::where("status", "!=", "pending")->where("vendor_id", auth()->user()->id)->get() as $key => $value) {
        //     $revenue += $value->amount;
        // }
        $data = [
            'products' => Product::where("vendor_id", auth()->user()->id)->count(),
        'orders' => 0,

            'revenue' => $revenue
        ];

        return view('vendor.index', $data);
    }
    public function _login(Request $request)
    {
        if (User::where("email", $request->email)->count()) {
            if (Auth::attempt($request->only(['email', 'password']))) {
                $user = User::where("email", $request->email)->get()[0];
                if ($user->vendor && $user->email_verified_at != null) {
                    Auth::login($user);
                    return redirect("/vendor");
                } else {
                    return redirect()->back()->with("error", "Your accoutn is not approved yet");
                }
            } else {
                return redirect()->back()->with("error", "Invalid Password");
            }
        } else {
            return redirect()->back()->with("error", "Invalid Email");
        }
    }
    public function _register(Request $request)
    {

        if (User::where("email", $request->email)->count()) {
            return redirect()->back()->with("error", "Email Already exists");
        } else {
            $user = User::create([
                'email' => $request->email,
                'name' => $request->name,
                'vendor' => 1,
                'password' => Hash::make($request->password),

            ]);
            if ($user) {


                return redirect()->back()->with("success", "Registered Successfully");
            } else {
                return redirect()->back()->with("error", "Please Input credentials correctly");
            }
        }
    }
    public function login()
    {
        return view('vendor.login');
    }
    public function register()
    {
        return view('vendor.register');
    }
    public function profile()
    {
        return view('vendor.profile');
    }
    public function _profile(Request $request)
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
     * @param  \App\Models\Vendor  $Vendor
     * @return \Illuminate\Http\Response
     */
    public function show(Vendor $Vendor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vendor  $Vendor
     * @return \Illuminate\Http\Response
     */
    public function edit(Vendor $Vendor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vendor  $Vendor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vendor $Vendor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vendor  $Vendor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vendor $Vendor)
    {
        //
    }
}
