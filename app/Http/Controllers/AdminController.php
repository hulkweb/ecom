<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        if (auth()->user()) {
            if (!auth()->user()->admin) return redirect("/");
        } else {
            return redirect("/adminlogin");
        }


        $revenue = 0;
        foreach (Order::where("status", "!=", "pending")->get() as $key => $value) {
            $revenue += $value->amount;
        }
        $data = [
            'products' => Product::count(),
            'orders' => Order::count(),
            'users' => User::where("vendor", 0)->count(),
            'vendors' => User::where("vendor", 1)->count(),

            'revenue' => $revenue,

        ];

        return view('admin.index', $data);
    }
    public function login()
    {
        return view('admin.login');
    }
    public function authenticate(Request $request)
    {
        $user = User::where("email", $request->email)->first();
        if ($user) {
            if (Auth::attempt($request->only(['email', 'password']))) {
                if ($user->admin) {
                    Auth::login($user);
                    return redirect("/admin");
                } else {
                    return redirect()->back()->with("error", "Unauthorized");
                }
            } else {
                return redirect()->back()->with("error", "Wrong password");
            }
        } else {
            return redirect()->back()->with("error", "Wrong email ");
        }
    }
}
