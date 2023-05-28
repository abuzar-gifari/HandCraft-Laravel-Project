@extends('admin.layout.app')

@section('heading', 'Dashboard')

@section('content')
<div class="row">
    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-primary">
                <i class="fa fa-cart-plus"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Total Products</h4>
                </div>
                <div class="card-body">
                    @php
                        $products = \App\Models\Product::count();
                    @endphp
                    {{$products}}
                </div>
            </div>
        </div>
    </div>

</div>



@endsection