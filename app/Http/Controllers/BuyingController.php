<?php

namespace App\Http\Controllers;

use App\Models\Buying;
use App\Models\Qty;
use App\Models\Stock;
use App\Models\Supplier;
use Illuminate\Http\Request;

class BuyingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stocks = Stock::all();
        $qtys = Qty::all();
        $suppliers = Supplier::all();
        if (request('search') == null || request('search') == " ") {
            $buyings = Buying::orderBy('transaction_date', 'desc')->paginate(5);
        } else {
            $search = request('search');
            $buyings = Buying::whereHas("Stock", function ($query) use ($search) {
                $query->where('stock_name', 'like', '%' . $search . '%');
            })
                ->orWhereHas("Supplier", function ($query) use ($search) {
                    $query->where('supp_name', 'like', '%' . $search . '%');
                })->paginate(5);
            // dd($buyings);
        }
        return view('buyings.buying', compact('buyings', 'stocks', 'qtys', 'suppliers'));
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
        Buying::insert([
            "supp_id" => $request->supplier,
            "stock_id" => $request->stock_name,
            "transaction_date" => $request->date,
            "qty" => $request->qty,
            "price" => $request->price,
            "total" => $request->qty * $request->price,
        ]);

        $stock = Stock::find($request->stock_name);
        $qtystock = $stock->qty + $request->qty;

        $stock->update([
            "qty" => $qtystock
        ]);
        return redirect('/buying');
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
        //
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
