
@extends('layouts.master')

@section('content')
<div class="container" style="margin: 40px;">
  <div class="col-md-6">
    <h2>Edit Student</h2>
    <form method="post" action="{{ url('/student/update') }}">
      @csrf
      <input type="hidden" name="id" value="{{ $student->id }}">
      <div class="form-group">
        <label>Name</label>
        <input name="name" value="{{ $student->name }}" type="text" class="form-control form-control-sm">
      </div>
      <div class="form-group">
        <label>DOB</label>
      <input name="dob" value="{{ $student->dob }}" type="date" class="form-control form-control-sm">
      </div>
      <div class="form-group">
        <label>Select Family</label>
        <select name="father_name" class="form-control form-control-sm" required>
          <option value="">Select Family</option>
          @foreach($family as $i=>$f)
            @if($f->id == $student->father_name)
              <option value="{{$f->id}}" selected>{{ $f->father_name}}</option>
            @else
              <option value="{{$f->id}}">{{ $f->father_name}}</option>
            @endif
          @endforeach
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection