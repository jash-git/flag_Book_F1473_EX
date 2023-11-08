@extends('products.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            <h2>產品資訊</h2><hr>
            </div>
            <div class="pull-right">
            <a class="btn btn-primary" href="{{route('products.index')}}">返回</a>
            </div>
        </div>
    </div>   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong>產品名稱: </strong> {{$product->name}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong>產品定價: </strong> {{$product->price}}
            </div>
        </div>
    </div>
@endsection