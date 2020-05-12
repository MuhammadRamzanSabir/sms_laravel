
@extends('layouts.master')

@section('content')
<div class="container" style="margin: 40px;">
  <div class="col-md-6">
    <h2>New Level</h2>
    <form method="post" action="{{ url('/level') }}">
      @csrf
      <div class="form-group">
        <label>Level</label>
        <input name="level" type="text" class="form-control form-control-sm">
      </div>
      <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection