<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Wrapper;
use Darryldecode\Cart\Cart;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Nette\Utils\Json;
use PhpParser\JsonDecoder;


class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $cartItems = array();

        if (session()->has("products")) {
            $cartItems = session()->get("products");
        }

        return view('cart', ['cartItems' => $cartItems]);
    }
    public function api_index()
    {

        $cartItems = array();

        if (session()->has("products")) {
            $cartItems = session()->get("products");
        }

        return $cartItems;
    }
    public function checkout()
    {
        $wrappers = [];
        $cartItems = array();

        if (session()->has("products")) {
            $cartItems = session()->get("products");
        }
        if (count($cartItems)) {
            return view('checkout', ['cartItems' => $cartItems, 'wrappers' => $wrappers]);
        } else {
            return redirect("/cart");
        }
    }
    /**
     * Show the form for creating a new resource.
     *s
     * @return \Illuminate\Http\Response
     */

    public function add(Request $request)
    {
        $id = $request->product_id;
        $product = Product::find($id);
        $qty = $request->qty;
        $products = array();


        if (key_exists("products", session()->all())) {

            $products = session()->get("products");

            if (!key_exists("$id", $products)) {
                $products["$id"] = array('qty' => $qty, 'name' => $product->name, 'price' => $product->price, "image" => $product->image);
                session()->put("products", $products);

                return redirect("/cart")->with("success", "Product  Added to cart");
            } else {
                return redirect()->back()->with("success", "Product Already exists in the cart");
            }
        } else {
            $products["$id"] = array('qty' => $qty, 'name' => $product->name, 'price' => $product->price, "image" => $product->image);
            session()->put("products", $products);
            return redirect()->back()->with("success", "Product  Added to cart");
        }
        return redirect()->back()->with("error", "Product not found");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
    public function update_cart(Request $request)

    {

        $count = 0;
        $products = session()->get("products");

        foreach ($request->all() as $key => $request) {
            if ($key != "_token") {
                $id = explode("_", $key)[2];
                if (key_exists("$id", $products)) {
                    $products["$id"]["qty"] =  $request;
                    session()->put("products", $products);
                    $count++;
                }
            }
        }
        return redirect()->back()->with("success", "$count items updated");
    }
    public function update(Request $request)

    {
        session_start();
        $id = $request->id;
        $qty = $request->qty;
        $products = session()->get("products");

        if (key_exists("$id", $products)) {
            $products["$id"]["qty"] =  $qty;
            session()->put("products", $products);
            return redirect()->back()->with("success", "Product  Added to cart");
        } else {

            return redirect()->back()->with("success", "Product Already exists");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        session_start();
        $products = session()->get("products");
        if (key_exists($id, $products)) {
            unset($products[$id]);
            session()->put("products", $products);
            return redirect()->back()->with("success", "Product Removed");
        } else {

            return redirect()->back()->with("success", "Product Does not exist");
        }
    }
}
