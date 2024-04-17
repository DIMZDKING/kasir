@extends('layouts.index')
@section('title', 'Add Product')
    
@section('contents')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Add Product</h6>
    </div>
    <div class="card-body">
        <form action="/add-product" method="post">
            @csrf
            <div class="form-group">
                <label for="nama">Nama Produk</label>
                <input type="text" name="nama" id="nama" class="form-control">
            </div>
            <div class="form-group">
                <label for="harga">Harga Produk</label>
                <input type="harga" name="harga" id="harga" class="form-control">
            </div>
            <div class="form-group">
                <label for="stok">Stok</label>
                <input type="stok" name="stok" id="stok" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

@endsection