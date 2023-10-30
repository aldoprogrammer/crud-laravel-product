@extends('products.layout')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
         <div class="pull-left float-left">
            <h2>Add New Products</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary float-right" href="{{  route('products.index') }}">Back</a>
        </div>
    </div>

</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops</strong> some error occured.<br>

        <ul>
            @foreach ( $errors->all() as $error )
                <li>{{  $error }}</li>
            @endforeach
        </ul>
    </div>

@endif

<form action="{{  route('products.store') }}" method="POST">
    @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control"
                placeholder="name">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Detail:</strong>
                <textarea name="detail" class="form-control"
                placeholder="Detail" style="height:150px"></textarea>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
</form>

@endsection
