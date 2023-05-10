<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Numbers;
class NumbersController extends Controller
{
    public function index()
    {
    $numberslist = Numbers::all()->toArray();
 
    
    return view('numberslist', compact('numberslist' ));
}
}
