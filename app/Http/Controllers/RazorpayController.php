<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Exception;
use Illuminate\Http\Request;
use Razorpay\Api\Api;

class RazorpayController extends Controller
{
    public function index()
    {

        return view('razorpayView');
    }
    public function store(Request $request)
    {

        $timezone = "Asia/Kolkata";
        date_default_timezone_set($timezone);

        $input = $request->all();

        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));

        $payment = $api->payment->fetch($input['razorpay_payment_id']);

        if (count($input)  && !empty($input['razorpay_payment_id'])) {
            try {
                $response = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount' => $payment['amount']));
            } catch (Exception $e) {
                return  $e->getMessage();

                return redirect()->back()->with('errore', $e->getMessage());
            }
        }


        $order = Order::where("order_id", $input['order_id'])->first();

        $order->status = "completed";
        $order->payment_id = $input['razorpay_payment_id'];
        foreach ($order->orderItems as $key => $item) {
            $product = Product::find($item->product_id);
            $product->qty -= $item->qty;
            $product->save();
        }

        
        $order->save();
        session()->forget("order");
        return redirect("/")->with('success', 'Payment successful');
    }
}
