@extends('layout')
@section('title', 'Home')

@section('content')


<div class="container my-5">
    <table class="table table-dark table-striped">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">City</th>
            <th scope="col">Address</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>mark</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>
                <button type="button" class="btn btn-primary">Edit</button>
                <button type="button" class="btn btn-danger">Delete</button>
            </td>
          </tr>
     
        </tbody>
      </table>
    
</div>


@endsection

