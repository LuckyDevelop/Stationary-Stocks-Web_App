<?php

namespace App\Http\Controllers;

use App\Models\Qty;
use App\Models\Stock;
use App\Models\UserUsage;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $uoms = Qty::all();
        $stocks = Stock::all();
        $userusage = UserUsage::all();
        if (request('search') == null || request('search') == " ") {
            $transactions = Transaction::orderBy('transaction_date', 'desc')->paginate(20);
        } else {
            $search = request('search');
            $transactions = Transaction::orderBy('transaction_date')->whereHas('Stock', function ($query) use ($search) {
                $query->where('stock_name', 'like', '%' . $search . '%');
            });
        }
        return view('transactions.transaction', compact('transactions', 'stocks', 'userusage', 'uoms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        Transaction::insert([
            "stock_id" => $request->stock_name,
            "user_usage_id" => $request->user,
            "qty" => $request->qty,
            "transaction_date" => $request->date,
        ]);

        $stock = Stock::find($request->stock_name);
        $qtystock = $stock->qty - $request->qty;

        $stock->update([
            "qty" => $qtystock
        ]);
        return redirect('/usages');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
