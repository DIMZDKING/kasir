@extends('layouts.index')

@section('title', 'Tambah Pembelian')

@section('contents')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Add Purchase</h6>
    </div>
    <div class="card-body">
        <form action="/add-purchase" method="post">
            @csrf
            <div class="form-group">
                <label for="tgl">Tanggal</label>
                <input type="date" name="tgl" id="tgl" class="form-control">
            </div>
            <div class="form-group">
                <label for="total">Total</label>
                <input type="number" name="total" id="total" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>


@endsection