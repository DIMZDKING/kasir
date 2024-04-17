<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use App\Models\Product;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.admin.main');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
    
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
    
            return redirect()->intended()->route('admin-main');
        }
    
        return dd($credentials);
    }        /**
     * Show the form for creating a new resource.
     */

    public function add_product()
    {
        return view('dashboard.admin.add-product');
    }

    public function store_product(Request $request)
    {
        $product = [
            'nama' => $request->nama,
            'harga' => $request->harga,
            'stok' => $request->stok,
        ];

        Product::create($product);

        return redirect('/product-list');
    }

    public function show_product()
    {
        $product = Product::get();

        return view('dashboard.admin.product-list', ['product' => $product]);
    }

    public function edit_product($id)
    {
        $product = Product::find($id);

        return view('dashboard.admin.edit-product', ['product' => $product]);
    }

    public function update_product(Request $request, $id)
    {
        $product = [
            'nama' => $request->nama,
            'harga' => $request->harga,
            'stok' =>$request->stok,
        ];

        Product::find($id)->update($product);

        return redirect('/product-list');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */

    public function show_cashier()
    {
        
    }

    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
