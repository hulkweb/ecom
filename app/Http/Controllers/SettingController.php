<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.settings.index', ['settings' => Setting::orderBy("id", "desc")->paginate(1000)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.settings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Setting::where("name", $request->name)->count()) return redirect()->back()->with('error', " already there");

        $setting = new Setting();
        $setting->name = $request->name;
        $setting->value = $request->value;
        if ($request->hasFile("value")) {
            $file = $request->file('value');
            $file_name = $request->name . "." . $file->getClientOriginalExtension();
            $file->move("uploads/settings/", $file_name);
            $setting->value = $file_name;
        }


        if ($setting->save()) {
            return redirect()->back()->with('success', " Created Successfully");
        } else {
            return redirect()->back()->with('success', "Something Went Wrong");
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $setting)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
    {
        return view('admin.settings.edit', ['setting' => Setting::find($setting->id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setting $setting)
    {
        $setting = Setting::find($setting->id);

        $setting->name = $request->has("name") ? $request->name : $setting->name;
        $setting->value = $request->has("value") ? $request->value : $setting->value;
        if ($request->hasFile("value")) {
            $file = $request->file('value');
            $file_name = $setting->name . "." . $file->getClientOriginalExtension();
            $file->move("uploads/settings/", $file_name);
            $setting->value = $file_name;
        }
        if ($setting->save()) {
            return redirect()->back()->with('success', " Updated Successfully");
        } else {
            return redirect()->back()->with('error', "Something Went Wrong");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        $setting = Setting::find($setting->id);


        if ($setting) {
            return redirect()->back()->with('success', " Deleted Successfully");
        } else {
            return redirect()->back()->with('error', "Something Went Wrong");
        }
    }
}
