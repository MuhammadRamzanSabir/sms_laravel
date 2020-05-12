
@extends('layouts.master')

@section('content')
<div class="container" style="margin: 40px;">
  <div class="col-md-6">
    <h2>Edit Level</h2>
    <form method="post" action="{{ url('/level/update') }}">
      @csrf
      <input type="hidden" name="id" value="{{ $level->id }}">
      <div class="form-group">
        <label>Level</label>
        <input name="level" value="{{ $level->level }}" type="text" class="form-control form-control-sm">
      </div>
      <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection