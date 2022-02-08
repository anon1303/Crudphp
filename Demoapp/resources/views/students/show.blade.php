@extends('students.layout')
@section('content')
 

<br>
<div class="card text-center">
  <div class="card-header">
    <h2><strong>STUDENT INFORMATION</strong></h2>
  </div>

  <div class="card-body">
   
 
    <div class="card-body ">
        <h5 class="card-title">Name : {{ $student->name }}</h5>
        <p class="card-text">Email : {{ $student->email }}</p>
        <p class="card-text">Course : {{ $student->course }}</p>
    </div>
       
    </hr>

  </div>

</div>
<br>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
          <div class="pull-right">
             <a class="btn btn-primary" href="{{ route('students.index')}}"> back</a>
          </div>
        </div>
@endsection
