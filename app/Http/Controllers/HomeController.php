<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(Request $request)
    {

        $data = [];
        $top_rated = [];
        $reviews = DB::table('reviews')->select('product_id')->groupBy('product_id')->take(10)->get();
        foreach ($reviews as $pid) {
            $top_rated[] = Product::findOrFail($pid->product_id);
        }
        $data['top_rated'] = $top_rated;
        $data['latest'] = Product::orderBy("id", "desc")->take(10)->get();
        $data['featured'] = Product::where("featured", 1)->take(10)->get();
        $data['categories'] = Category::orderBy("id", "desc")->take(10)->get();
        $data['blogs'] = Blog::orderBy("id", "desc")->take(10)->get();
        return view('home', $data);
    }
   
    public function about()
    {
        return view('about-us');
    }
    public function terms()
    {
        return view('terms');
    }
    public function privacy()
    {
        return view('privacy');
    }
    public function sitemap()
    {
        return view('sitemap');
    }
    public function contact()
    {
        return view('contact');
    }

}
