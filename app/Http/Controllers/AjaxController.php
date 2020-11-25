<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;

class AjaxController extends Controller
{
    public function readData(){
        $products = Inventory::get();
        // return response($products);
        return view('ajax-table-rows',compact('products'));

    }
}
