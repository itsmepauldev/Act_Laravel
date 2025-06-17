@extends('layouts.app', ['page_title' => 'Students List'])
@section('content')

<h1 class="students">{{$user}}</h1>
@session('success')
<div class="alert alert-success" role="alert">
 {{session('success')}}
</div>
@endsession


    @if($isAdmin)

    <div class="d-flex justify-content-end">
<a href="{{ route('students.create')}}" class="btn btn-primary">Create Student</a>

    </div>
    


<table class="table table-hover table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Student Name</th>
            <th>Email</th>
            <th>Contact Number</th>
            <th>Action</th>
        </tr>
    </thead>
<tbody>
     @foreach($students as $key => $student)

    <tr>
        <td>{{$key+1}}</td>
        <td>{{ $student->fname .' '. $student->lname}}</td>
        <td>{{ $student->email }}</td>
        <td>{{ $student->contact }}</td>
        <td>
            <a href="{{ url('students', $student->id)}}/edit" class="btn btn-success btn-sm">Edit</a>
           <form action="{{route('students.delete', $student->id)}}" method="post">
            @csrf 
            @method('DELETE')
            <button class="btn btn-danger btn-sm" onclick="return confirm('are you sure you want to delete')">Delete</button>
            </form>
        </td>
    </tr>
    
@endforeach
</tbody>
</table>

{!! $students->links()!!}

        <!-- <li style="font-size: 20px">{{$students[0]['name']}}</li>
        <li  style="font-size: 20px">{{$students[1]['name']}}</li> -->
   
    @endif
@endsection
 
@section('css')
<style>
    .students{
        
        text-align:center;
    }
    </style>
    @endsection

    @push('scripts')
    <script>
           //alert('Hello')
    </script>

    @endpush
 
