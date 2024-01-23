<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ContactFormController;
use App\Models\User;
use App\Models\Programs;
use App\Models\Services;
use App\Models\Team;
use App\Models\Menu;
use App\Models\Payment;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
route::get('/',[HomeController::class,'index'])->name('home');

Route::group(['middleware' => ['auth','verified']], function(){
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Route::resource('services',controller: App\Http\Controllers\ServiceController::class)
    //     ->middleware('is_admin');
    // Route::resource('programs',controller: App\Http\Controllers\ProgramController::class)
    //     ->middleware('is_admin');


// Route::middleware(['auth:sanctum','verified'])->get('/dashboard',function(){
//     return view('dashboard');
// })->name('dashboard');
route::get('/redirect',[HomeController::class,'redirect']);

Route::group(['middleware' => ['is_admin']], function(){
route::get('/view_services',[AdminController::class,'view_services']);
route::post('/add_services',[AdminController::class,'add_services']);
route::get('/show_services',[AdminController::class,'show_services']);
route::get('/delete_services/{id}',[AdminController::class,'delete_services']);
route::get('/update_services/{id}',[AdminController::class,'update_services']);
route::post('/update_services_confirm/{id}',[AdminController::class,'update_services_confirm']);

route::get('/view_programs',[AdminController::class,'view_programs']);
route::get('/show_programs',[AdminController::class,'show_programs']);
route::post('/add_programs',[AdminController::class,'add_programs']);
route::get('/delete_programs/{id}',[AdminController::class,'delete_programs']);
route::get('/update_programs/{id}',[AdminController::class,'update_programs']);
route::post('/update_programs_confirm/{id}',[AdminController::class,'update_programs_confirm']);
// Route::resource('programs', ProductController::class);

// Route::resource('programs',controller: App\Http\Controllers\ProgramController::class);

route::get('/menu_create',[MenuController::class,'create']);
route::get('/menu_show',[MenuController::class,'show']);
route::post('/menu_store',[MenuController::class,'store']);
route::get('/update_menu/{id}',[MenuController::class,'update']);
route::post('/update_menu_confirm/{id}',[MenuController::class,'update_confirm']);
route::get('/delete_menu/{id}',[MenuController::class,'destroy']);

route::get('/team/create',[TeamController::class,'create']);
route::get('/team/index',[TeamController::class,'show']);
route::post('/team/store',[TeamController::class,'store']);
route::get('/team/update/{id}',[TeamController::class,'update']);
route::post('/team/update_confirm/{id}',[TeamController::class,'update_confirm']);
route::get('/team/destroy/{id}',[TeamController::class,'destroy']);





});
});


Route::get('/contact_us', function () {
    $programs = Programs::all();
        $services = Services::all();
        $teams = Team::all();
        $menu = Menu::all();
        $menu = Menu::where('status','Enabled')->get();

        view()->share('menu',$menu);
        return view('home.contact_us',compact('programs','services','teams','menu'));
});

Route::get('/ourservices', function () {
    $programs = Programs::all();
        $services = Services::all();
        $teams = Team::all();
        $menu = Menu::all();
        $menu = Menu::where('status','Enabled')->get();

        view()->share('menu',$menu);
        return view('home.ourservices',compact('programs','services','teams','menu'));
});

Route::get('/ourprograms', function () {
    $programs = Programs::all();
        $services = Services::all();
        $teams = Team::all();
        $menu = Menu::all();
        $menu = Menu::where('status','Enabled')->get();

        view()->share('menu',$menu);
        return view('home.ourprograms',compact('programs','services','teams','menu'));
});

Route::get('/about_us', function () {
    $programs = Programs::all();
        $services = Services::all();
        $teams = Team::all();
        $menu = Menu::all();
        $menu = Menu::where('status','Enabled')->get();
        view()->share('menu',$menu);
        return view('home.about_us',compact('programs','services','teams','menu'));
});

// Route::get('processPaypal',[PaymentController::class, 'processPaypal'])->name('processPaypal');
// Route::get('processSuccess',[PaymentController::class, 'processSuccess'])->name('processSuccess');
// Route::get('processCancel',[PaymentController::class, 'processCancel'])->name('processCancel');

Route::get('payment',[PaymentController::class, 'index']);
Route::post('charge',[PaymentController::class, 'charge']);
Route::get('success',[PaymentController::class, 'success']);
Route::get('error',[PaymentController::class, 'error']);

Route::get('/show_donation', function () {
   
        $payment = Payment::all();
        return view('admin.show_donation',compact('payment'));
});

Route::get('/contact_mail',[ContactFormController::class, 'show'])->name('show');
Route::post('/contact_mail',[ContactFormController::class, 'send'])->name('send');