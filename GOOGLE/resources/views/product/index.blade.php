@extends('layout.master')
@section('content')

<a class="btn btn-primary" href="{{route('product.create')}}">Thêm </a>
<table class="table">

    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Product_name</th>
        <th scope="col">Slug</th>
        <th scope="col">Price</th>
        <th scope="col">Description</th>
        <th scope="col">Status</th>
        <th scope="col">Category_id </th>
        <th scope="col">Action </th>

      </tr>
    </thead>
    <tbody>
        @foreach ($products as $key => $team)
        <tr>
            <th scope="row">{{$key+1}}</th>
            <td>{{$team->name}}</td>
            <td>{{$team->slug}}</td>
            <td>{{$team->price}}</td>
            <td>{{$team->description}}</td>
            <td>{{$team->status}}</td>
            <td>{{$team->category_id }}</td>
            <td>{{$team->category->name}}</td>
          <td>
                <form action="" method="post">
                    @method('DELETE')
                    @csrf
                    <button onclick="return confirm('Bạn có muốn xóa truyện này không?');" class="btn btn-danger">Xóa</button>
                    </form>
                <a href="" class="btn btn-primary">Sửa</a>
            </td>
          </tr>
@endforeach
@endsection
