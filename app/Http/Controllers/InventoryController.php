<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Models\Inventory;

class InventoryController extends Controller
{
    public function index()
    {
    	$data = Inventory::all();
        return view('inventory',compact('data'));
    }

    public function update(Request $request)
    {
    	if($request->ajax()){
	       	Contact::find($request->input('pk'))->update([$request->input('name') => $request->input('value')]);
	        return response()->json(['success' => true]);
    	}
    } 
}

