<?php

namespace App\Http\Controllers;

use App\Models\items;

use Illuminate\Http\Request;

class ItemsController extends Controller
{
    // Read
    public function index()
    {
         item::select('item_name')->get()->toArray();
    }

    // Create
    public function create(Resquest $request)
    {
        items::insert(['item_name' => $request->user_input]);
    }

    // Update
    public function update(Request $request)
    {
        items::where('id',$request->id)->update(['item_name'=>'Item updated']);
    }

    // Delete
    public function destroy(Request $request)
    {
        items::where('id',$request->id)->delete();
    }
}
