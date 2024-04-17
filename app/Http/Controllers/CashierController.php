<?php

namespace App\Http\Controllers;

use App\Models\Cashier;
use App\Models\Sale;
use App\Models\Customer;
use App\Models\Product;
use Illuminate\Http\Request;

class CashierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.cashier.main');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.admin.add-cashier');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cashier = [
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => $request->password,
        ];

        Cashier::create($cashier);

        return redirect('/cashier-list');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $cashier = Cashier::get();

        return view('dashboard.admin.cashier-list', ['cashier' => $cashier]);
    }

    public function add_purchase()
    {
        return view('dashboard.cashier.add-purchase');
    }

    public function store_purchase(Request $request)
    {
        $purchase = [
            'tgl' => $request->tgl,
            'total' => $request->total,
        ];

        purchase::create($purchase);

        return redirect('/purchase-list');
    }

    public function show_purchase()
    {
        $purchase = Sale::get();

        return view('dashboard.cashier.purchase-list', ['purchase' => $purchase]);
    }

    public function edit_purchase($id)
    {
        $purchase = Sale::find($id);

        return view('dashboard.admin.edit-purchase', ['purchase' => $purchase]);
    }

    public function update_purchase(Request $request, $id)
    {
        $purchase = [
            'tgl' => $request->tgl,
            'total' => $request->total,
        ];

        Sale::find($id)->update($purchase);

        return redirect('/purchase-list');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cashier $cashier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cashier $cashier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cashier $cashier)
    {
        //
    }
}
