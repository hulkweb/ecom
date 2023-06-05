
<?php

use App\Http\Controllers\CartController;
use App\Models\Category;
use App\Models\Setting;

if (!function_exists("get_categories")) {
    function get_categories()
    {
        return Category::orderBy("id", "desc")->paginate(10);
    }
}
if (!function_exists("settings")) {
    function settings()
    {   $settings=[];
        foreach(Setting::all() as $setting){
            $settings["$setting->name"]=$setting->value;
        }
        return $settings;
    }
}

if (!function_exists("get_cart")) {
    function get_cart()
    {    $cart=new CartController();
        return $cart->api_index();
    }
}

?>
