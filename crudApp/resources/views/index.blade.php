@extends('layout')
@section('title', 'Home')

@section('content')
<div class="container my-5">
 @if (session()->has('msg'))
 <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{session('msg')}} </strong> 
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>  
 @endif  
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
     
    <a href="{{url('edit', $student->id)}}" class="btn btn-primary">Edit</a>
    <a onclick="return confirm('Are you sure you want to delete this?')" 
        href="{{url('delete', $student->id)}}" class="btn btn-danger">Delete</a>
            
        </td>
        </tr>
        @endforeach
    </tbody>
  
    </table>
     <div class="d-flex justify-content-center ">
        {{$students->links()}}
     </div>
</div>
@endsection

