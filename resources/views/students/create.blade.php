@extends('layouts.app', ['page_title' => 'Create Students'])
@section('content')
<div class="row">
<div class="col-md-6">
<form action="{{ route('store')}}" method="post">
@csrf 
<div clas="form-group mb-3">
<label for="fname">First Name</label>
<input type="text " name="fname" id="fname" class="form-control">
</div>
</form>
</div>
</div>
@endsection