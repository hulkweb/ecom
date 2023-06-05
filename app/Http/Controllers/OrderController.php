<?php

namespace App\Http\Controllers;

use App\Mail\OrderMail;
use App\Models\Billing;
use App\Models\Gift;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::paginate(10);
        $data = ['orders' => $orders];
        return view('admin.orders.index', $data);
    }

    /**`
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function view($order_id)
    {
        $order = Order::where("order_id", $order_id)->first();
        return view('admin.orders.view', ['order' => $order]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $order_id = "ORD" . strtoupper(uniqid());
        $user = new User();
        if ($request->user_id == 0) {

            $user->name = $request->name;
            $user->phone = $request->phone;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);

            $user->save();
        } else {
            $user = User::find($request->user_id);
        }

        Auth::login($user);


        $billing_id = DB::table("billings")->insertGetId([
            "user_id" => $user->id,
            'city' => $request->city,
            'name' => $request->billing_name,
            'phone' => $request->billing_phone,
            'address' => $request->address,
            'pincode' => $request->pincode,
            'date_of_delivery' => $request->date_of_delivery,
            'time_of_delivery' => $request->time_of_delivery,

        ]);



        $amount = $request->subtotal;


        $oid = DB::table("orders")->insertGetId([
            "user_id" => $user->id,
            'billing_id' => $billing_id,
            'amount' => $amount,
            "order_id" => $order_id,
            "created_at" => now()
        ]);
       

        if (session()->has('products')) {
            foreach (session()->get('products') as $id => $item) {
                if (OrderItem::where("product_id", $id)->where("order_id", $oid)->count() == 0) {
                    DB::table("order_items")->insertGetId([
                        "order_id" => $oid,
                        'product_id' => $id,
                        'qty' => $item["qty"],
                    ]);
                }
            }
        }
        session()->forget("products");

        session()->put("order", [
            "order_id" => $order_id,
            "name" => $user->name,
            "email" => $user->email,
            "phone" => $user->phone,
            "amount" => $amount * 100,

        ]);
        return redirect(route("razorpay.index"));
    }
    public function api_store(Request $request)
    {

        $order_id = "ORD" . strtoupper(uniqid());
        $user = new User();
        if (!$request->user()) {

            $user->name = $request->name;
            $user->phone = $request->phone;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);

            $user->save();
            $access_token=$user->createToken('auth-token')->plainTextToken;
        } else {
            $user = User::find($request->user_id);
            
            $access_token=$request->bearerToken();
        }




        $billing_id = DB::table("billings")->insertGetId([
            "user_id" => $user->id,
            'city' => $request->city,
            'name' => $request->billing_name,
            'phone' => $request->billing_phone,
            'address' => $request->address,
            'pincode' => $request->pincode,
            'date_of_delivery' => $request->date_of_delivery,
            'time_of_delivery' => $request->time_of_delivery,

        ]);



        $amount = $request->subtotal;


        $oid = DB::table("orders")->insertGetId([
            "user_id" => $user->id,
            'billing_id' => $billing_id,
            'amount' => $amount,
            "order_id" => $order_id,
            "created_at" => now()
        ]);
        $gift = Gift::create([
            'order_id' => $oid,
            'wrapper_id' => $request->wrapper_id,
            'card_color' => $request->card_color,
            'card_text' => $request->card_text,
            'wrapper_id' => $request->wrapper_id,


        ]);
         
        if (request()->has('products')) {
            foreach (request()->get('products') as $id => $item) {
                if (OrderItem::where("product_id", $id)->where("order_id", $oid)->count() == 0) {
                    DB::table("order_items")->insertGetId([
                        "order_id" => $oid,
                        'product_id' => $id,
                        'qty' => $item["qty"],
                    ]);
                }
            }
        }
        // session()->forget("products");

        
        return response()->json([
            "order_id" => $order_id,
            "name" => $user->name,
            "email" => $user->email,
            "phone" => $user->phone,
            "amount" => $amount * 100,
            'access-token'=>$access_token
        ]);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */

    public function details($slug)
    {
        $order = Order::where("slug", $slug)->get()[0];
        return view("orders.blade.php", ['order' => $order]);
    }

    public function show(Order $order)
    {
        return view("orders.blade.php", ['order' => $order]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        return view("admin.orders.edit", ['order' => $order]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function api_update(Request $request)
    { 
       $order_id=$request->order_id;
       $payment_id=$request->payment_id;
       $status=$request->status;
       $order = Order::where("order_id",$order_id)->first();

       $order->status = $status;
       $order->payment_id = $payment_id;
       foreach ($order->orderItems as $key => $item) {
           $product = Product::find($item->product_id);
           $product->qty -= $item->qty;
           $product->save();
       }

       
       $order->save();

       return response()->json(['status'=>200,'message'=>'updated']);
    }

    public function update(Request $request, Order $order)
    {
        $order->status = $request->status;;
        if ($order->save()) {
            Mail::to($order->user->email)->send(new OrderMail($order));
            return redirect()->back()->with("success", "updated");
        } else {

            return redirect()->back()->with("error", "Something Went Wrong");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        $order = Order::find($order->id);
        $order->status = "cancelled";
        if ($order->save()) {
            return redirect()->back()->with("success", "Your Order has been cancelled");
        } else {
            return redirect()->back()->with("success", "Something went wrong");
        }
    }
}
