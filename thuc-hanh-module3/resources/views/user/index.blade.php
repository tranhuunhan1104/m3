<!DOCTYPE html>
<html>
<style>

</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<body>

<h2>Quản lí chi tiêu</h2>
<a class="btn btn-info" href="{{ route('danhmuc.create') }}">Thêm mới danh mục</a>
<table class="table">
    <div class="col-6">
  <tr>
    <th>#</th>
    <th>Danh mục</th>
    <th>Ngày</th>
    <th>Số Tiền </th>
    <th>Ghi Chú</th>
    <th>Action</th>
  </tr>
  <tr>
    <tbody>
        @php $totalAll = 0 @endphp
        @foreach ($danhmucs as $key => $team)
        <tr>
            <th scope="row">{{$key+1}}</th>
            <td>{{$team->danhmuc}}</td>
            <td>{{$team->ngay}}</td>
            <td>{{number_format($team->sotien)}}VND</td>
            <td>{{$team->ghichu}}</td>
          <td>
                <form action="{{route('danhmuc.destroy',$team->id)}}" method="post">
                    @method('DELETE')
                    @csrf
                    <button onclick="return confirm('Bạn có muốn danh mục này không?');" class="btn btn-danger">Xóa</button>
                    </form>
                    <a href="{{ route('danhmuc.edit',[$team->id]) }}" class="btn btn-primary">Sửa</a>
            </td>
          </tr>
          @php $totalAll += $team->sotien @endphp
          @endforeach
          <h3 style="color: red">tổng tiền {{number_format($totalAll)}} VND</h3>
  </tr>
</div>
</table>



</body>
</html>
