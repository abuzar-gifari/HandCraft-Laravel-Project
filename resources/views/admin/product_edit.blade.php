@extends('admin.layout.app')

@section('heading', 'Edit Product')

@section('button')
<div class="ml-auto">
<a href="{{ route('admin_product_view') }}" class="btn btn-primary"><i class="fa fa-eye"></i> View All</a>
</div>
@endsection

@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin_product_update',$product_data->id) }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-4">
                                    <label class="form-label">Name *</label>
                                    <input type="text" class="form-control" name="name" value="{{ $product_data->name }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Existing Photo *</label>
                                    <img style="width:50px; height:50px;" src="{{ asset('uploads/'.$product_data->photo) }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Photo *</label>
                                    <input type="file" class="form-control" name="photo">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Price *</label>
                                    <input type="text" value="{{ $product_data->price }}" class="form-control" name="price">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label"></label>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection