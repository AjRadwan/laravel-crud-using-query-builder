@extends('layout')
@section('title', 'Home')

@section('content')


<div class="container my-5">
<table class="table table-dark table-striped">
    <thead>
        <tr>
        <th scope="col">No</th>
        <th scope="col">Name</th>
        <th scope="col">Roll</th>
        <th scope="col">Address</th>
        <th>Action</th>
        </tr>
    </thead>
    <tbody>
      @foreach ($students as $student)
          <tr>
        <th scope="row">{{$loop->iteration}}</th>
        <td>{{$student->name}}</td>
        <td>{{$student->roll}}</td>
        <td>{{$student->address}}</td>
        <td>
            <button type="button" class="btn btn-primary">Edit</button>
            <button type="button" class="btn btn-danger">Delete</button>
        </td>
        </tr>
        @endforeach
    </tbody>
    </table>

</div>


@endsection

