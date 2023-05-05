<?php

namespace App\Http\Controllers;

use App\Models\Coffee;
use Illuminate\Http\Request;

class CoffeeController extends Controller
{
    //
    public function index() {
        $coffees = Coffee::all()->groupBy('coffee_category');
        return view('productlist', compact('coffees'));
    }

    public function transaction(Request $request)
    {
        $transaction = new Transaction;
        $transaction->coffee_id = $request->coffee_id;
        $transaction->appuser_id = Auth::id();
        $transaction->save();

        return redirect()->back()->with('success', 'Transaction has been added to your transaction histories.');
    }
}
