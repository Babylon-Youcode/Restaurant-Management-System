<?php

namespace App\Http\Controllers\Cashier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CashierController extends Controller
{
    //// First Page of Cashier
    public function index(){
        $categories = Category::all();
        return view('cashier.index')->with('categories', $categories);
    }



}
