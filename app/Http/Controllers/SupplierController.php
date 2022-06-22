<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
// use Illuminate\Support\Facades\DB;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request('search') == null || request('search') == " ") {
            $suppliers = Supplier::orderBy('supp_name', 'asc')->paginate(10);
        } else {
            $search = request('search');
            $suppliers = Supplier::orderBy('supp_name', 'asc')->where('supp_name', 'like', '%' . $search . '%')
                ->orWhere('address', 'like', '%' . $search . '%')
                ->paginate(10);
        }
        return view('suppliers.supplier', compact('suppliers'));
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
        Supplier::create([
            'supp_name' => $request->supp_name,
            'address' => $request->address
        ]);
        return redirect('/supplier');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Supplier $supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        Supplier::find($id)->update([
            'supp_name' => $request->supp_name,
            'address' => $request->address
        ]);

        return redirect('/supplier');
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
        // $deleted = DB::table('suppliers')->delete($id);
        Supplier::find($id)->delete($id);
        // DB::table('suppliers')->where('id', $id)->delete();

        // return response()->json(([
        //     'success' => "Supplier Has Been Deleted!"
        // ]));
        return redirect('/supplier');
    }
}
