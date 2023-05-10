<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usednumbers;

class UsednumbersController extends Controller
{
    public function index()
    {
    $usednumbers = usednumbers::all()->toArray();
    return view('usednumbers', compact('usednumbers'));
}
}
