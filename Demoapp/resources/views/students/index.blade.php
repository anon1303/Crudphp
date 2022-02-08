@extends('students.layout')
@section('content')
<div class="text-center">
    <br>
    <h2><strong>STUDENTS</strong></h2>
    <br>
</div>




    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message}}</p>
        </div>
    @endif
<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Email</th>
        <th>Course</th>
@if (Auth::user())

        <th>Action</th>
@endif
 
    </tr>
    
    @foreach ($students as $e)
    <tr>
        <td>{{++$i}}</td>
        <td>{{$e->name}}</td>
        <td>{{$e->email}}</td>
        <td>{{$e->course}}</td>

@if (Auth::user())
        
            <td>
                <form action="{{route('students.destroy',$e->id)}}" method="POST">
                    <a class="btn btn-info" href="{{route('students.show',$e->id)}}">Show</a>
                    <a class="btn btn-primary" href="{{route('students.edit',$e->id)}}">Update</a>
                    @csrf
                    @method('DELETE')
                    <a class="btn btn-danger" onclick="this.closest('form').submit()" href="#">DELETE</a>


                </form>
            </td>
@endif

    </tr>
    @endforeach
</table>
@if (Auth::user())
<div class="row">
    <div class="col-lg-12 padding-tb">
        <div class="text-right">
            <a class="btn btn-success" href="{{route('students.create')}}"> Enroll Student</a>
            
        </div>
        
    </div>
</div>
@else
        <div class="col-md-12 text-center">
            <a class="btn btn-primary" href="{{ route('home')}}"> back</a>

        </div>
@endif

@endsection
