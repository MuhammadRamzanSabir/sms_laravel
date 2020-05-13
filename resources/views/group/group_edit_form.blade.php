
@extends('layouts.master')

@section('main-content')




<div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Edit Group</h4> 
            </div>
        </div>

<div class="col-sm-12">
            <div class="white-box">
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
    <form method="post" action="{{ url('/group/update') }}">
      @csrf
      <input type="hidden" name="id" value="{{ $group->id }}">
      <div class="form-group">
        <input name="group" value="{{ $group->group }}" type="text" class="form-control form-control-sm">
      </div>
      <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
</table>
</div>
</div>
</div>
@endsection