@extends('products.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            <h2>產品資料管理</h2><hr>
            </div>
            <div class="pull-right">
            <a class="btn btn-success" href="{{route('products.create')}}">新增產品</a>
            </div>
        </div>
    </div>   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
    @endif   
    <table class="table table-bordered">
        <tr>
            <th>編號</th>
            <th>產品名稱</th>
            <th>產品定價</th>
            <th width="280px">操作</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->price}}</td>
            <td>
            <form action="{{route('products.destroy',$product->id)}}" method="post">   
                <a class="btn btn-info" href="{{route('products.show',$product->id)}}">詳細</a>    
                <a class="btn btn-primary" href="{{route('products.edit',$product->id)}}">編輯</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">刪除</button>
            </form>
            </td>
        </tr>
        @endforeach
    </table>  
    {!! $products->links() !!}      
@endsection