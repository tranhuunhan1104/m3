@extends('layout.master')
@section('content')

<h2> Form Chỉnh sửa</h2>

<form method="POST" action="{{route('blog.update',[$blogs->id])}}" enctype= "multipart/form-data" >
    @method('PUT')
    @csrf
  <label for="fname">Tên :</label><br>
  <input type="text" id="fname" name="name" value="{{$blogs->name}}"  ><br>
  <label for="lname">Mô tả:</label><br>
  <input type="text" id="lname" name="description" value="{{$blogs->description}}"><br>
    <label class="control-label" for="flatpickr01">Danh mục<abbr
            name="Trường bắt buộc">*</abbr></label>
    <select name="category_id" id="" class="form-control">
        <option value="">--Vui lòng chọn--</option>
        @foreach ($categories as $item)
            <option value="{{ $item->id }}">{{ $item->name }}</option>
        @endforeach
    </select>
  <input type="submit" value="Submit">
</form>

@endsection
