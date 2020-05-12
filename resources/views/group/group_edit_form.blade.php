
@extends('layouts.master')

@section('content')
<div class="container" style="margin: 40px;">
  <div class="col-md-6">
    <h2>Edit Group</h2>
    <form method="post" action="{{ url('/group/update') }}">
      @csrf
      <input type="hidden" name="id" value="{{ $group->id }}">
      <div class="form-group">
        <label>Group</label>
        <input name="group" value="{{ $group->group }}" type="text" class="form-control form-control-sm">
      </div>
      <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection