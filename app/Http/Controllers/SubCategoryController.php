<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function index()
    {
        $sub_categories = SubCategory::paginate(10);
        $data = ['sub_categories' => $sub_categories];
        return view('admin.sub_categories.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  $categories=Category::all();
        return view('admin.sub_categories.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new SubCategory();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = 'category_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $category->image = $name;
            $file->move('uploads/categories/', $name);
        }
        $category->title = strtolower(trim($request->title));
        $category->category_id = $request->category_id;

        $category->details = $request->details;

        if ($category->save()) {
            return redirect()->back()->with('success', 'Created Successfully');
        } else {
            return redirect()->back()->with('error', 'Something Went Wrong');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)

    {
        $category = SubCategory::find($id);

        if ($category) {
            $products = Product::where("sub_category_id", $id)->paginate(10);

            return view('admin.sub_categories.show', ['category' => $category, 'products' => $products]);
        } else {
            return redirect()->back()->with('error', "Sub Category is not there");
        }
    }
    public function get(){
         return SubCategory::where("category_id",request("category_id"))->get();
    }
    public function destroy(Request $request, $id)
    {
        SubCategory::findOrFail($id)->delete();
        return redirect()->back()->with('success', "SubCategory Deleted  Successfully");
    }
}
