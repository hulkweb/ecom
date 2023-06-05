<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Home;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\QueryController;
use App\Http\Controllers\RazorpayController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VendorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/admin', [AdminController::class, "index"])->name('admin.index');
Route::get('/adminlogin', [AdminController::class, "login"])->name('adminlogin');
Route::post('/admin_login', [AdminController::class, "authenticate"])->name('admin_login');



Route::resource("categories", CategoryController::class);
Route::resource("sub_categories", SubCategoryController::class);
Route::resource("products", ProductController::class);
Route::get("/p/{slug}", [ProductController::class, "show"]);
Route::post("/product/upload/images", [ProductController::class, "upload"])->middleware('auth');
Route::get("/product/search/", [ProductController::class, "search"]);
Route::get("filter", [ProductController::class, 'filter']);
Route::get("store/{slug}", [ProductController::class, 'shop']);

Route::get("/product/featured/{id}", [ProductController::class, "featured"]);
Route::get("/checkout", [CartController::class, "checkout"]);
Route::post("/update_cart", [CartController::class, "update_cart"]);
Route::post("/add_to_cart", [CartController::class, "add"]);
Route::get("/remove_from_cart/{id}", [CartController::class, "destroy"]);

Route::resource("transactions", TransactionController::class);

Route::resource("cart", CartController::class);
Route::resource("orders", OrderController::class);
Route::resource("users", UserController::class);

Route::resource("reviews", ReviewController::class);
Route::resource("settings", SettingController::class);
Route::get("/vendors", [VendorController::class, 'index'])->name('vendors');

// Payment
Route::get('razorpay-payment', [RazorpayController::class, 'index'])->name("razorpay.index");
Route::post('razorpay-payment', [RazorpayController::class, 'store'])->name('razorpay.payment.store');

Route::post("/get_sub_categories",[SubCategoryController::class,'get'])->name('get_sub_categories');

Route::get('/login', [UserController::class, "login"])->name('login');
Route::post('/authenticate', [UserController::class, "authenticate"])->name('authenticate');
Route::post('/register', [UserController::class, "register"])->name('register');
Route::get('/logout', [UserController::class, 'logout'])->middleware(['auth'])->name('logout');
Route::get('/forget_password', [UserController::class, 'forget_password'])->name('forget_password');
Route::post('/forget_password', [UserController::class, 'forget_password_link'])->name('forget_password_link');
Route::get('/password_reset/{token}', [UserController::class, 'password_reset'])->name('password_reset');
Route::post('/reset_password', [UserController::class, 'reset_password'])->name('reset_password');
Route::resource("users", UserController::class);

Route::resource("queries", QueryController::class);

Route::resource("orders", OrderController::class);
Route::post("cancel_order", [OrderController::class, 'cancel'])->name("cancel_order")->middleware("auth");
Route::get("/order/view/{order_id}", [OrderController::class, 'view'])->name("view_order")->middleware("auth");
Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard')->middleware("auth");;


Route::get("about-us", [HomeController::class, 'about'])->name('about');
Route::get("contact-us", [HomeController::class, 'contact'])->name('contact');

Route::get("privacy-policy", [HomeController::class, 'privacy'])->name('privacy');
Route::get("sitemap.xml", [HomeController::class, 'sitemap'])->name('sitemap');
Route::get("refund-policy", [HomeController::class, 'refund'])->name('refund');
Route::get("terms-and-conditions", [HomeController::class, 'terms'])->name('terms');

Route::prefix('vendor')->group(function () {
    Route::get("/", [VendorController::class, 'dashboard'])->name('vendor.dashboard');
    Route::get("login", [VendorController::class, 'login'])->name('vendor.login');
    Route::post("login", [VendorController::class, '_login'])->name('vendor._login');
    
    Route::get("register", [VendorController::class, 'register'])->name('vendor.register');
    Route::post("register", [VendorController::class, '_register'])->name('vendor._register');
    
    Route::get("profile", [VendorController::class, 'profile'])->name('vendor.profile');
    Route::post("profile", [VendorController::class, '_profile'])->name('vendor._profile');
 
});
