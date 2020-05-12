
@extends('layouts.master')

@section('content')
<div class="container" style="margin: 40px;">
  <div class="col-md-6">
    <h2>New Group</h2>
    <form method="post" action="{{ url('/group') }}">
      @csrf
      <div class="form-group">
        <label>Group</label>
        <input name="group" type="text" class="form-control form-control-sm">
      </div>
      <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection