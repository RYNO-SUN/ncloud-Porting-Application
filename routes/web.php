<?php

use Illuminate\Support\Facades\Route;
use App\Models\CustomersCount;
use App\Models\AddCustomer;
use App\Models\AddBriaCustomer;
use App\Models\AddNewNumber;
use App\Models\voipcustomers;
use App\Http\Controllers\CustomerListController;
use App\Http\Controllers\ContactController;
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

Route::get('/', function () {
    return view('auth/login');
});

Route::get('/customerlist', function () {
    return view('customerlist');
});

Route::get('/addcustomer', function () {
    return view('addcustomer');
});

Route::post('/addcustomer', function () {
    
    $addbriacustomer = new AddCustomer();
    $addbriacustomer->name = request('name');
    $addbriacustomer->surname = request('surname');
    $addbriacustomer->companyname = request('CompanyName');
    $addbriacustomer->cellnumber = request('CellNumber');
    $addbriacustomer->voipnumber = request('VoipNumber');
    $addbriacustomer->vpnserver = request('VpnServer');
    $addbriacustomer->VirtualPabx = request('VirtualPabx');
    $addbriacustomer->adress = request('adress');
    $addbriacustomer->save();
    
    return redirect('/addcustomer');
    
    
    });

    Route::get('/newvoipcustomer', function () {
        return view('newvoipcustomer');
    });

    Route::post('/newvoipcustomer', function () {
    
        $newvoipcustomer = new voipcustomers();
        $newvoipcustomer->name = request('name');
        $newvoipcustomer->surname = request('surname');
        $newvoipcustomer->companyname = request('CompanyName');
        $newvoipcustomer->cellnumber = request('CellNumber');
        $newvoipcustomer->voipnumber = request('VoipNumber');
        $newvoipcustomer->vpnserver = request('VpnServer');
        $newvoipcustomer->adress = request('adress');
        $newvoipcustomer->save();
        
        return redirect('/newvoipcustomer');
        
        
        });

Route::get('/addbriacustomer', function () {
    return view('addbriacustomer');
});


Route::post('/addbriacustomer', function () {
    
$addbriacustomer = new AddBriaCustomer();
$addbriacustomer->name = request('name');
$addbriacustomer->surname = request('surname');
$addbriacustomer->companyname = request('CompanyName');
$addbriacustomer->cellnumber = request('CellNumber');
$addbriacustomer->voipnumber = request('VoipNumber');
$addbriacustomer->vpnserver = request('VpnServer');
$addbriacustomer->VirtualPabx = request('VirtualPabx');
$addbriacustomer->Extensions = request('Extensions');
$addbriacustomer->adress = request('adress');
$addbriacustomer->save();

return redirect('/addbriacustomer');


});

Route::get('/addnewnumber', function () {
    return view('addnewnumber');
});

Route::get('/show', function () {
    return view('show');
});

Route::post('/addnewnumber', function () {
    
    $newnumber = new AddNewNumber();
    $newnumber->AvailableNumber = request('AvailableNumber');
  
    $newnumber->save();
    
    return redirect('/addnewnumber');
    
    
    });


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/customerlist', [App\Http\Controllers\CustomerListController::class, 'index'])->name('customerlist');
Route::get('/briacustomerlist', [App\Http\Controllers\BriaCustomersController::class, 'index'])->name('briacustomerlist');
Route::get('/numberslist', [App\Http\Controllers\NumbersController::class, 'index'])->name('numberslist');
Route::get('/usednumbers', [App\Http\Controllers\UsednumbersController::class, 'index'])->name('usednumbers');
Route::get('/submittedocs', [App\Http\Controllers\VoipCustomersController::class, 'index'])->name('submittedocs');
Route::get('/edit/{record}' , [App\Http\Controllers\CustomerListController::class, 'edit']);
Route::post('/edit/{record}' , [App\Http\Controllers\CustomerListController::class, 'update']);
Route::get('/editbria/{briarecord}' , [App\Http\Controllers\BriaCustomersController::class, 'edit']);
Route::post('/editbria/{briarecord}' , [App\Http\Controllers\BriaCustomersController::class, 'update']);
Route::delete('/delete-record/{record}' , [App\Http\Controllers\CustomerListController::class, 'destroy']);
Route::delete('/delete-bria-record/{briarecord}' , [App\Http\Controllers\BriaCustomersController::class, 'destroy']);
//Route::post('/send-email', [App\Http\Controllers\ContactController::class, 'sendEmail'])->name('send.email');

Route::get('/playground', function () {


    return view('mail.portingmail');


});

Route::get('/Documentation', function () {


    return view('Documentation');


});





//Route::get('/read' , function(){

//$customers = CustomersCount::all();

//oreach($customers as $CustomerCount){

    //return $CustomerCount->name;
//}

//});

