<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomersCount;
use App\Models\BriaCustomers;
use App\Models\Numbers;
use App\Models\PendingPorts;
use App\Models\CustomerList;




class CustomerListController extends Controller
{


    public function index()
    {
        $customers = CustomersCount::count();
        
        $allcustomers = CustomerList::all()->toArray();
        return view('customerlist' , compact('customers' , 'allcustomers'));
    }

public function show(CustomersList $findcustomers){


$findcustomers = CustomerList::where('name' , $findcustomers->name)->first();

return view('show' , ['customerlist' =>$findcustomers]);

    }


    public function edit($record)
    {
      
        $allcustomers = CustomerList::all();
        $record = CustomerList::find($record);
        return view('edit' , compact( 'record' , 'allcustomers'));
    }

    public function update(Request $request , $record)

    {
        $input = $request->all();

        $record = CustomerList::find($record);
        $record->name = $input['name'];
        $record->surname = $input['surname'];
        $record->CompanyName = $input['CompanyName'];
        $record->CellNumber = $input['CellNumber'];
        $record->VoipNumber = $input['VoipNumber'];
        $record->VpnServer = $input['VpnServer'];
        $record->VirtualPabx = $input['VirtualPabx'];
        $record->adress = $input['adress'];
        


        $record->save();
        return redirect('customerlist');




    }

    

    

public function destroy($record){


    
    CustomerList::find($record)->delete();
    return redirect()->back();
}

}



