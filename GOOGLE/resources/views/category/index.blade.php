@extends('layout.master')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">
            Display board</h4>
        <p class="card-description">
          Add class <code>.table-dark</code>
        </p>
          <a class="btn btn-info" href="{{route('category.create')}}">Thêm</a>
        <p></p>
        <div class="table-responsive pt-3">
          <table class="table table-info">
            <thead>
              <tr>
                <th>
                    #
                </th>
                <th>
                    Category_name
                </th>
                <th>
                    Description
                </th>
                <th>
                    Status
                </th>
                <th>
                    Slug
                </th>
                <th>
                   Action
                </th>
              </tr>
            </thead>
            <tbody>
                @foreach ($categories as $key => $team)
                <tr>
                    <th scope="row">{{$key+1}}</th>
                    <td>{{$team->name}}</td>
                    <td>{{$team->description}}</td>
                    <td>{{$team->status}}</td>
                    <td>{{$team->slug}}</td>
                    <td>
                        <form action="{{route('category_destroy',$team->id)}}" method="post">
                            @method('DELETE')
                            @csrf
                            <button onclick="return confirm('Bạn chắc chắn muốn xóa danh mục này không?');" class="btn btn-danger">Xóa</button>
                            </form>
                        <a href="{{route('category_edit',[$team->id])}}" class="btn btn-primary">Sửa</a>
                    </td>
                  </tr>
        @endforeach

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  @endsection
