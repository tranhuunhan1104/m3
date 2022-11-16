@extends('layout.master')
@section('content')
<h2></h2>
<form action="" method = 'post'>
    @csrf
    <table></table>
    <div class="row">
        <div class="col-lg-8 mx-auto">
         <div class="card">
           <div class="card-header py-3 bg-transparent">
              <h5 class="mb-0">Add New Product</h5>
             </div>
           <div class="card-body">
             <div class="border p-3 rounded">
             <form class="row g-3">
               <div class="col-12">
                 <label class="form-label">Name</label>
                 <input type="text" class="form-control" name="name" placeholder="Name...... ">
               </div>
               <div class="col-12">
                 <label class="form-label">Slug</label>
                 <input type="text" class="form-control" name="slug" placeholder="Slug.......">
               </div>
               <div class="col-12">
                 <label class="form-label">Full description</label>
                 <textarea class="form-control" placeholder="Full description......." name="description" rows="4" cols="4"></textarea>
               </div>
               <div class="col-12">
                 <label class="form-label">Images</label>
                 <input class="form-control" name="image" type="file">
               </div>
               <div class="col-12">
                 <label class="form-label">Price</label>
                 <input type="text" class="form-control" name="price" placeholder="Price........">
               </div>
               <div class="col-12 col-md-6">
                <label class="control-label" for="flatpickr01">Category_id<abbr
                    name="category_id"></abbr></label>
            <select name="category_id" id="" class="form-control">
                <option value="">--Vui lòng chọn--</option>
                @foreach ($product as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>

            <input type="submit" value="Submit">

             </div>
            </div>
           </div>
        </div>
     </div><!--end row-->

</form>
@endsection






{{--
<label for="fname">name :</label><br>
<input type="text" id="fname" name="name" ><br>
<label for="lname">slug:</label><br>
<input type="text" id="lname" name="slug" ><br><br>
<label for="lname">price:</label><br>
<input type="text" id="lname" name="price" ><br><br>
<label for="lname">description:</label><br>
<input type="text" id="lname" name="description" ><br><br>
<label for="lname">status:</label><br>
<input type="text" id="lname" name="status" ><br><br>
{{-- <label for="lname">category_id :</label><br>
<input type="text" id="lname" name="category_id " ><br><br> --}}

{{-- <div class="form-group col-lg-12">
  <label class="control-label" for="flatpickr01">category_id<abbr
          name="category_id">*</abbr></label>
  <select name="category_id" id="" class="form-control">
      <option value="">--Vui lòng chọn--</option>
      @foreach ($product as $item)
          <option value="{{ $item->id }}">{{ $item->name }}</option>
      @endforeach
  </select>
</div>

<input type="submit" value="Submit">  --}}
