<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomersCount;
use App\Models\BriaCustomers;
use App\Models\Numbers;
use App\Models\PendingPorts;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $customers = CustomersCount::count();
        $briacustomers = BriaCustomers::count();
        $availablenumbers = Numbers::count();
        $pendingports = PendingPorts::count();
        return view('home' , compact('customers', 'briacustomers' , 'availablenumbers' , 'pendingports'));
    }

    public function edit($record)
    {
      
        $record = CustomerList::find($record)->get();;
        return view('edit' , compact( 'record'));
    }

    public function destroy($record_delete){

        $record_delete = CustomerList::find($record_delete)->delete();
        return redirect('customerlist')->with('message' , 'Record Deleted Successfully');
    }


}


    //$this->edit('koosie')