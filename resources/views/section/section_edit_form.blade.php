
@extends('layouts.master')

@section('content')
<div class="container" style="margin: 40px;">
  <div class="col-md-6">
    <h2>Edit Section</h2>
    <form method="post" action="{{ url('/section/update') }}">
      @csrf
      <input type="hidden" name="id" value="{{ $section->id }}">
      <div class="form-group">
        <label>Section</label>
        <input name="section" value="{{ $section->section }}" type="text" class="form-control form-control-sm">
      </div>
      <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection