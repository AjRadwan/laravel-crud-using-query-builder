@extends('layout')
@section('title', 'AddStudent')

@section('content')

<div class="container my-5">
   <form action="" method="post">
    @csrf
    <div class="mb-3">
        <label  class="form-label">Name</label>
        <input type="name" name="name" class="form-control"  placeholder="name@example.com">
      </div>
      <div class="mb-3">
        <label  class="form-label">Roll</label>
        <input type="number" name="roll" class="form-control"  placeholder="roll@example.com">
      </div>
    <div class="mb-3">
        <label  class="form-label">Address</label>
        <input type="address" name="address" class="form-control"  placeholder="address@example.com">
      </div>
   
      <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{route('index')}}" class="btn btn-primary">Go Back</a>
   </form>
</div>

@endsection