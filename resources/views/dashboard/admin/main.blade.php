@extends('layouts.index')

@section('title', 'Welcome, Admin')
    
@section('contents')
<div class="col-xl-3 mb-4">
    <div class="card border-left-primary shadow ">
        <a href="/cashier-list">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Cashier</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">-</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>

@endsection