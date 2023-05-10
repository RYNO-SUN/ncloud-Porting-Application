<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Controllers\CustomersCountController;

class CustomersCount extends Model
{
    use HasFactory;

    
   protected $table = 'customers';
    
}


