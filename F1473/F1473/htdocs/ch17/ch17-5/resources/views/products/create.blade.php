@extends('products.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
        <h2>新增產品</h2><hr>
        </div>
        <div class="pull-right">
        <a class="btn btn-primary" href="{{route('products.index')}}">返回</a>
        </div>
    </div>
</div>   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>錯誤!</strong>輸入資料有一些問題...<br><br>
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
        </ul>
    </div>
@endif   
<form action="{{route('products.store')}}" method="post">
    @csrf  
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong>產品名稱:</strong>
            <input type="text" name="name" class="form-control" placeholder="輸入產品名稱">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong>產品定價:</strong>
            <input type="text" name="price" class="form-control" placeholder="輸入產品定價">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">新增產品</button>
        </div>
    </div>   
</form>
@endsection