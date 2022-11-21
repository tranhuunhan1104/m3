<form action="{{route('danhmuc.store')}}" method = 'post'>
    @csrf
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <div class="row">
        <div class="col-lg-8 mx-auto">
         <div class="card">
           <div class="card-header py-3 bg-transparent">
              <h5 class="mb-0">THÊM MỚI DANH MỤC CHI TIÊU</h5>
             </div>
           <div class="card-body">
             <div class="border p-3 rounded">
             <form class="row g-3">

               <div class="col-12">
                 <label class="form-label">Danh mục</label>
                 <div>
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
                 @error('danhmuc')
                 <div style="color: red">{{$message}}</div>
                @enderror
                 </div>

               <div class="col-12">
                 <label class="form-label">Ngày</label>
                 <input type="date" class="form-control" name="ngay" placeholder="description" rows="4" cols="4">
                 @error('ngay')
                 <div style="color: red">{{$message}}</div>
                 @enderror
               </div>

               <div class="col-12">
                 <label class="form-label">Số Tiền </label>
                 <input type="text" class="form-control" name="sotien" >
                 @error('sotien')
                <div style="color: red">{{$message}}</div>
                @enderror
               </div>

               <div class="col-12">
                 <label class="form-label">Ghi chú</label>
                 <input type="text" name="ghichu" class="form-control" placeholder="Enter tags">
                 @error('ghichu')
                <div style="color: red">{{$message}}</div>
                 @enderror
               </div>

             </form>
             <div class="col-12">
                <button class="btn btn-primary px-4">Submit Item</button>
              </div>
             </div>
            </div>
           </div>
        </div>
     </div><!--end row-->
</form>
