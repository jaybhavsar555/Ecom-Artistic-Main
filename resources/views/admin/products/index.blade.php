@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header"> 
        <h1>Products</h1>
        <hr style="height:2px;border-width:0;color:gray;background-color:gray">
        </div>
        <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Category Name</th>
                    <th>name</th>
                    <th>SellingPrice</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->category->name}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->selling_price}}</td>
                    <td>
                        <img src="{{  asset('assets/uploads/products/'.$item->image)  }}"  class='cate-images'alt="Image Here"/>
                    </td>
                    <td>
                        <a href="{{url('edit-product/'.$item->id)}}" class='btn btn-primary'>Edit</a>
                        <a  href="{{url('delete-product/'.$item->id)}}"class='btn btn-danger'>Delete</a>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
@endsection