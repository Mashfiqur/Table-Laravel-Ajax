<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Models\Inventory;

class AjaxController extends Controller
{
    public function readData(){
        $products = Inventory::get();
        // return response($products);
        return view('ajax-table-rows',compact('products'));

    }
    public function update(Request $request)
    {
    	if($request->ajax()){
	       	Contact::find($request->input('pk'))->update([$request->input('name') => $request->input('value')]);
	        return response()->json(['success' => true]);
    	}
    }

}



