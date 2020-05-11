
@extends('layouts.master')

@section('content')
<div class="container" style="margin: 40px;">
  <div class="col-md-6">
    <h2>New Student</h2>
    <form method="post" action="{{ url('/student') }}" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label>Name</label>
        <input name="name" type="text" class="form-control form-control-sm">
      </div>
      <div class="form-group">
        <label>DOB</label>
        <input name="dob" type="text" class="form-control form-control-sm">
      </div>
      <div class="form-group">
        <label>Select Family</label>
        <select name="family_id" class="form-control form-control-sm" required>
          <option value="">Select Family</option>
          @foreach($data as $i=>$f)
            <option value="{{$f->id}}">{{ $f->father_name }}</option>
          @endforeach
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection