@extends('students.layout')
@section('content')

<div class="row text-center">
  <div class="col-lg-12 margin-tb">
    <div class="pull-left">
      <br>
      <h2><strong>UPDATE</strong></h2>
      <br>
    </div>
  </div>
</div>

@if ($errors->any())
  <div class="alert alert-danger">
    <strong>Whoops!</strong> Please check your input.<br>
    <ul>
      @foreach($errors->all() as $error)
        <li>{{ $error}}</li>
      @endforeach
    </ul>
  </div>
@endif

<form action="{{ route('students.update',$student->id)}}" method="POST">
  @csrf
  @method('PUT')

  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
        <strong>Name</strong>
        <input type="text" name="name" value="{{$student->name}}" class="form-control" placeholder="Name">
        
      </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
        <strong>Email</strong>
        <input type="text" name="email" value="{{$student->email}}" class="form-control" placeholder="Email">
        
      </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
        <strong>Course</strong>
        <input type="text" name="course" value="{{$student->course}}" class="form-control" placeholder="Course">
        
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
            <a class="btn btn-primary" href="{{ route('students.index')}}"> back</a>
            <a class="btn btn-primary" onclick="this.closest('form').submit()" href="#">Update</a>

            <!-- <button type="submit" class="btn btn-primary"> Update</button> -->
        </div>
      </div>
    </div>
  </div>
  
</form>
@endsection