@extends('layouts.app', ['page_title' => 'Students List'])
@section('content')

<h1 class="students">{{$user}}</h1>
    @if($isAdmin)
    <ul>
 @foreach($students as $key => $student)
 <li style="font-size: 20px;">{{$key+1}}. {{ $student->fname .' '. $student->lname}}</li>

@endforeach

{!! $students->links()!!}

        <!-- <li style="font-size: 20px">{{$students[0]['name']}}</li>
        <li  style="font-size: 20px">{{$students[1]['name']}}</li> -->
    </ul>
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
 
