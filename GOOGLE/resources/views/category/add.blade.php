@extends('layout.master')
@section('content')
<form action="{{route('category.store')}}" method = 'post'>
    @csrf
<div class="col-lg-12 stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Table add</h4>
        <p class="card-description">
          Add class <code>.table-{color}</code>
        </p>
        <div class="table-responsive pt-3">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>
                  Category_name
                </th>
                <th>
                    Description
                </th>
                <th>
                    Slug
                </th>
                <th>
                    Status
                </th>
              </tr>
            </thead>
            <tbody>
              <tr class="table-info">
                <td>
                    <input type="text" id="fname" name="name" ><br>
                </td>
                <td>
                    <input type="text" id="lname" name="description" ><br><br>

                </td>
                <td>
                    <input type="text" id="lname" name="slug" ><br><br>
                </td>
                <td>
                    <input type="text" id="lname" name="status" ><br><br>
                </td>
                <input type="submit" value="Submit">

              </tr>

            </tbody>
          </table>
        </div>
      </div>
    </div>
</div>
@endsection
