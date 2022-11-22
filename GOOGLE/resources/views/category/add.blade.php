
@extends('layout.master')
@section('content')
<form action="{{route('category.store')}}" method = 'post'>
    @csrf
    <div class="row">
        <div class="col-lg-8 mx-auto">
         <div class="card">
           <div class="card-header py-3 bg-transparent">
              <h5 class="mb-0">Add New Category</h5>
             </div>
           <div class="card-body">
             <div class="border p-3 rounded">
             <form class="row g-3">

               <div class="col-12">
                 <label class="form-label">Name</label>
                 <input type="text" name="name" class="form-control" placeholder="Product title">
                 @error('name')
                 <div style="color: red">{{$message}}</div>
                @enderror
                 </div>

               <div class="col-12">
                 <label class="form-label">Full description</label>
                 <textarea class="form-control" name="description" placeholder="description" rows="4" cols="4"></textarea>
                 @error('description')
                 <div style="color: red">{{$message}}</div>
                 @enderror
               </div>

               <div class="col-12">
                 <label class="form-label">Slug</label>
                 <input type="text" class="form-control" name="slug" >
                 @error('slug')
                <div style="color: red">{{$message}}</div>
                @enderror
               </div>

               <div class="col-12">
                 <label class="form-label">Status</label>
                 <input type="number" name="status" class="form-control" placeholder="Enter tags">
                 @error('status')
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
@endsection
