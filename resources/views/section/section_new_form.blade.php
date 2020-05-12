
@extends('layouts.master')

@section('content')
<div class="container" style="margin: 40px;">
  <div class="col-md-6">
    <h2>New Section</h2>
    <form method="post" action="{{ url('/section') }}">
      @csrf
      <div class="form-group">
        <label>Section</label>
        <input name="section" type="text" class="form-control form-control-sm">
      </div>
      <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection