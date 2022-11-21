
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<form method="POST" action="{{route('danhmuc.update',[$danhmucs->id])}}" enctype= "multipart/form-data" >
    @method('PUT')
    @csrf

    <div class="row">
        <div class="col-lg-8 mx-auto">
         <div class="card">
           <div class="card-header py-3 bg-transparent">
              <h5 class="mb-0">Sửa danh mục</h5>
             </div>
           <div class="card-body">
             <div class="border p-3 rounded">
             <form class="row g-3">
                <div class="col-12">
                    <label class="form-label">Danh Mục</label>
                    <select name="danhmuc" id="" >
                        <option value="Gas">Gas</option>
                        <option value="Internet">Internet</option>
                        <option value="Điện thoại">Điện thoại</option>
                        <option value="Điện nước">Điện nước</option>
                        <option value="Sinh hoạt">Sinh hoạt</option>
                        <option value="Tiền học">Tiền học</option>
                        <option value="Tiền đi lại">Tiền đi lại</option>
                    </select>
                  </div>
               <div class="col-12">
                 <label class="form-label">ngày</label>
                 <input type="date" class="form-control" value="{{$danhmucs->ngay}}" name="ngay">
               </div>
               <div class="col-12">
                 <label class="form-label">sotien</label>
                 <input type="text" class="form-control" value="{{$danhmucs->sotien}}" name="sotien">
                 <br>
               </div>
               <div class="col-12">
                 <label class="form-label">Ghi chú</label>
                 <textarea class="form-control" name="ghichu" rows="4" cols="4">{{$danhmucs->ghichu}}</textarea>
               </div>


            <input type="submit" value="Submit">

             </div>
            </div>
           </div>
        </div>
     </div><!--end row-->

</form>


