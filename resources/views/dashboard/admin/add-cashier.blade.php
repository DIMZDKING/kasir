@extends('layouts.index')
@section('title', 'Add Cashier')
    
@section('contents')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Add Cashier</h6>
    </div>
    <div class="card-body">
        <form action="/add-cashier" method="post">
            @csrf
            <div class="form-group">
                <label for="nama">Nama Kasir</label>
                <input type="text" name="nama" id="nama" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Email Kasir</label>
                <input type="email" name="email" id="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

@endsection