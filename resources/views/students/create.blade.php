@extends('layouts.app', ['page_title' => 'Create Students'])
@section('content')
<div class="row">
<div class="col-md-6">
<form action="{{ route('store')}}" method="post">
@csrf 
<div clas="form-group mb-3">
<label for="fname">First Name</label>
<input type="text " name="fname" id="fname" class="form-control">

@error('fname')
<p class="text-danger">{{$message}}</p>
@enderror 
</div>

<div clas="form-group mb-3">
<label for="lname">Last Name</label>
<input type="text " name="lname" id="lname" class="form-control">
@error('lname')
<p class="text-danger">{{$message}}</p>
@enderror 
</div>

<div clas="form-group mb-3">
<label for="email">Email</label>
<input type="email" name="email" id="email" class="form-control">
@error('email')
<p class="text-danger">{{$message}}</p>
@enderror 
</div> 

<div clas="form-group mb-3">
<label for="contact">Contact Number</label>
<input type="text " name="contact" id="contact" class="form-control">
@error('contact')
<p class="text-danger">{{$message}}</p>
@enderror 
</div>

<div class="form-group mt-3">
    <button class="btn btn-primary" type="submit">Submit</button>
</div>


</form>
</div>
</div>
@endsection