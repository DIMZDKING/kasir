@extends('layouts.index')
@section('title', 'Edit Product')
    
@section('contents')
<link href="../css/sb-admin-2.min.css" rel="stylesheet">

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Product</h6>
    </div>
    <div class="card-body">
        <form action="{{ route('product-update', $product->id) }}" method="post">
            @csrf
            <div class="form-group">
                <label for="nama">Nama Produk</label>
                <input value="{{ $product->nama }}" type="text" name="nama" id="nama" class="form-control">
            </div>
            <div class="form-group">
                <label for="harga">Harga Produk</label>
                <input value="{{ $product->harga }}" type="harga" name="harga" id="harga" class="form-control">
            </div>
            <div class="form-group">
                <label for="stok">Stok</label>
                <input value="{{ $product->stok }}" type="stok" name="stok" id="stok" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

@endsection