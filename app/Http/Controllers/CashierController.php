<?php

namespace App\Http\Controllers;

use App\Models\Cashier;
use Illuminate\Http\Request;

class CashierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
