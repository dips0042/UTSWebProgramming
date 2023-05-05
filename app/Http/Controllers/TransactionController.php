<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Coffee;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    //
    public function index() {
        $transactions = Transaction::all();
        $coffees = Coffee::all();
        return view('transactionPage', compact('transactions', 'coffees'));
    }
    public function purchase(Request $request)
    {
        // get the selected coffee id from the request
        // $coffeeId = $request->input('data');

        // get the current authenticated user
        // $user = auth()->user();

        // create a new transaction
        $transaction = new Transaction();
        $transaction->coffee_id = 4;
        $transaction->appuser_id = 1;
        $transaction->transaction_date = now();
        $transaction->save();

        return redirect('/transaction.histories')->with('success', 'Transaction has been added successfully');
    }
}
