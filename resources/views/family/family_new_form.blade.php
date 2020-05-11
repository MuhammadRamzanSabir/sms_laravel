
@extends('layouts.master')

@section('content')
<div class="container" style="margin: 40px;">
  <div class="col-md-6">
    <h2>New Family</h2>
    <form method="post" action="{{ url('/family') }}">
      @csrf
      <div class="form-group">
        <label>Father Name</label>
        <input name="father_name" type="text" class="form-control form-control-sm">
      </div>
      <div class="form-group">
        <label>Address</label>
        <input name="address" type="text" class="form-control form-control-sm">
      </div>
      <div class="form-group">
        <label>Mobile</label>
        <input name="mobile" type="text" class="form-control form-control-sm">
      </div>
      <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection