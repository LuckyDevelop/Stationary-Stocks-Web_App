<?php

namespace App\Http\Controllers;

use App\Models\Buying;
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
        if (request('search') == null || request('search') == " ") {
            $buyings = Buying::latest()->paginate(20);
        } else {
            $search = request('search');
            $buyings = Buying::whereHas("Stock", function ($query) use ($search) {
                $query->where('stock_name', 'like', '%' . $search . '%');
            })
                ->orWhereHas("Supplier", function ($query) use ($search) {
                    $query->where('supp_name', 'like', '%' . $search . '%');
                })->paginate(20);
            // dd($buyings);
        }
        return view('buyings.buying', compact('buyings'));
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
        //
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
