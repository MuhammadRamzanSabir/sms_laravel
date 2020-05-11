
@extends('layouts.master')

@section('content')
<div class="container" style="margin: 40px;">
  <div class="col-md-6">
    <h2>Edit Family</h2>
    <form method="post" action="{{ url('/family/update') }}">
      @csrf
      <input type="hidden" name="id" value="{{ $family->id }}">
      <div class="form-group">
        <label>Father Name</label>
        <input name="father_name" value="{{ $family->father_name }}" type="text" class="form-control form-control-sm">
      </div>
      <div class="form-group">
        <label>Address</label>
        <input name="address" value="{{ $family->address }}" type="text" class="form-control form-control-sm">
      </div>
      <div class="form-group">
        <label>Mobile</label>
        <input name="mobile" value="{{ $family->mobile }}" type="text" class="form-control form-control-sm">
      </div>
      <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection