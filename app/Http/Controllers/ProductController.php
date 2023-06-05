<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductImages;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        // $this->middleware("auth")->except(['show']);
    }
    public function index()
    {
        $products = new Product();
        if (auth()->user()->vendor) {
            $products =    $products->where("vendor_id", auth()->user()->id);
        }
        $products = $products->paginate(1000);
        $data = ['products' => $products];
        return view('admin.products.index', $data);
    }

    public function filter(Request $request)
    {
        $products = Product::paginate(10);
        if ($request->has("price_from") && $request->has("price_to")) {
            $products = Product::where("price", ">=", $request->price_from)->where("price", "<=", $request->price_to)->paginate(10);
        }
        if ($request->has("orderBy")) {
            $products = Product::orderBy("price", $request->orderBy)->paginate(10);
        }
        if ($request->has("keyword")) {
            $keyword = $request->keyword;
            $products = Product::where("name", "LIKE", "%$keyword%")->paginate(10);
        }
        if ($request->has("category")) {
            $title = str_replace("-", " ", $request->category);
            $category_id = Category::where("title", $title)->get()[0]->id;
            $products = Product::where("category_id", "$category_id")->paginate(10);
        }

        $categories = Category::orderBy("id", "desc")->get();
        $data = ['products' => $products, 'categories' => $categories];
        return view('admin.products.products', $data);
    }
    public function shop(Request $request, $slug)
    {
        $store = User::find($slug);
        if (!$store) {
            return redirect(route('home'))->with('error', 'store does not exists');
        }


        $products = Product::where('vendor_id', $slug)->paginate(10);
        if ($request->has("price_from") && $request->has("price_to")) {
            $products = Product::where("price", ">=", $request->price_from)->where("price", "<=", $request->price_to)->paginate(10);
        }
        if ($request->has("orderBy")) {
            $products = Product::orderBy("price", $request->orderBy)->paginate(10);
        }
        if ($request->has("keyword")) {
            $keyword = $request->keyword;
            $products = Product::where("name", "LIKE", "%$keyword%")->paginate(10);
        }
        if ($request->has("category")) {
            $title = str_replace("-", " ", $request->category);
            $category_id = Category::where("title", $title)->get()[0]->id;
            $products = Product::where("category_id", "$category_id")->paginate(10);
        }

        $categories = Category::orderBy("id", "desc")->get();

        $data = ['products' => $products, 'categories' => $categories,'store'=>$store];
        return view('admin.products.products', $data);
    }
    public function featured($id)
    {
        $product = Product::find($id);
        $product->featured = request()->featured;
        $product->save();

        return redirect()->back()->with('success', "Product Featured Successfully");
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $data = ['categories' => $categories];
        return view('admin.products.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        if ($request->hasFile("image")) {
            $image = "product_" . uniqid() . "." . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move("uploads/products/", $image);
        }

        $product = Product::create([
            'name' => strtolower(trim($request->name)),
            'qty' => $request->qty,
            'price' => $request->price,
            'weight' => $request->weight,
            'category_id' => $request->category_id,
            'image' => $image,
            'details' => $request->details,
            'vendor_id' => $request->vendor_id,

        ]);
        if ($product) {
            for ($i = 1; $i < 4; $i++) {

                if ($request->hasFile("image_$i")) {
                    $product_image = new ProductImage();
                    $product_image->product_id = $product->id;
                    $name = uniqid() . "." . $request->file("image_$i")->getClientOriginalExtension();
                    $request->file("image_$i")->move("uploads/products/", $name);
                    $product_image->image = $name;
                    $product->created_at = now();
                    $product_image->save();
                }
            }

            return redirect()->back()->with('success', "Product Created Successfully");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $slug)
    {
        $product = Product::where('name', str_replace("-", " ", $slug))->get()[0];
        $id = $product->id;
        $related = Product::where('category_id', $product->category->id)
            ->where("id", "!=", $product->id)->paginate(5);
        $product_images = ProductImage::where("product_id", $id)->orderBy("id", "desc")->get();
        $data = [
            "product" => $product, "reviews" => [], "product_images" => $product_images,
            'related' => $related
        ];
        return view('admin.products.show', $data);
    }

    public function upload(Request $request)
    {
        if ($request->has('file')) {
            $request->file('file')->move("uploads/", "image." . $request->file('file')->getClientOriginalExtension());
        }
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        $data = ["product" => $product, 'categories' => $categories];
        return view('admin.products.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        Product::findOrFail($id)->delete();
        return redirect()->back()->with('success', "Product Deleted  Successfully");
    }

    public function search()
    {
        $keyword = request('keyword');
        $products = Product::where("name", "LIKE", "%$keyword%")->get();
        return view('admin.categories.show', ['products' => $products]);
    }
}
