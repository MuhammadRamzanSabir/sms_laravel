
@extends('layouts.master')

@section('main-content')
<div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">New Subject</h4> 
                </div>
            </div>
<div class="col-sm-12">
  <div class="white-box">
      <div class="row">

          <div class="col-sm-12 col-xs-12">
    <form method="post" action="{{ url('/subject') }}">
      @csrf
      <div class="form-group">
        <label>Subject</label>
        <input name="title" type="text" class="form-control form-control-sm">
      </div>
      <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
</div>
</div>
</div>
@endsection