<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\voipcustomers;

class VoipCustomersController extends Controller
{

    public function index(){
    $voipcustomers = voipcustomers::all()->toArray();
    return view('submittedocs', compact('voipcustomers'));
}
}
