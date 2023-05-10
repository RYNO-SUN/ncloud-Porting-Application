<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BriaCustomers;

class BriaCustomersController extends Controller
{
        
    public function index()
    {
    $allbriacustomers = BriaCustomers::all()->toArray();
    return view('briacustomerlist', compact('allbriacustomers'));
}


public function edit($briarecord)
    {
      
        $briacustomers = BriaCustomers::all();
        $briarecord = BriaCustomers::find($briarecord);
        return view('editbria' , compact( 'briarecord' , 'briacustomers'));
    }



public function update(Request $request , $briarecord)

    {
        $briainput = $request->all();

        $briarecord = BriaCustomers::find($briarecord);
        $briarecord->name = $briainput['name'];
        $briarecord->surname = $briainput['surname'];
        $briarecord->CompanyName = $briainput['CompanyName'];
        $briarecord->CellNumber = $briainput['CellNumber'];
        $briarecord->VoipNumber = $briainput['VoipNumber'];
        $briarecord->VpnServer = $briainput['VpnServer'];
        $briarecord->VirtualPabx = $briainput['VirtualPabx'];
        $briarecord->adress = $briainput['adress'];
        $briarecord->Extensions = $briainput['Extensions'];
        


        $briarecord->save();
        return redirect('briacustomerlist');


    }

    public function destroy($briarecord){


    
        BriaCustomers::find($briarecord)->delete();
        return redirect()->back();
    }

}
