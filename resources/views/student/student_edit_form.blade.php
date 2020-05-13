
@extends('layouts.master')

@section('main-content')
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Edit Student</h4> 
            </div>
        </div>
        
        <div class="col-sm-12">
            <div class="white-box">
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <form method="post" action="{{ url('/student/update') }}" enctype="multipart/form-data" autocomplete="off">
                        @csrf
                        <input name="id" value="{{ $student->id }}" type="hidden" >
                    <div class="form-group col-md-6">
                        <label>Edit Name</label>
          <input name="name" value="{{ $student->name }}" type="text" class="form-control input-sm ">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Date of Birth</label>
                        <input id="dob" name="dob" value="{{ $student->dob }}" type="text" class="form-control mydatepicker input-sm">
                    </div>  
                    <div class="form-group col-md-6">
                        <label>Select Family</label>
                        <select name="family_id" class="form-control form-control-sm input-sm" required>
                        @foreach($family as $i=>$f)
                        @if($f->id == $student->family_id)
                        <option value="{{$f->id}}" selected>{{ $f->father_name}}</option>
                        @else
                        <option value="{{$f->id}}">{{ $f->father_name}}</option>
                        @endif
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Select Level</label>
                        <select name="level_id" class="form-control form-control-sm input-sm" required>
                          @foreach($level as $i=>$f)
                            @if($f->id == $student->level_id)
                              <option value="{{$f->id}}" selected>{{ $f->level}}</option>
                            @else
                              <option value="{{$f->id}}">{{ $f->level}}</option>
                            @endif
                          @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                      <label>Select Group</label>
                      <select name="group_id" class="form-control form-control-sm input-sm" required>
                        @foreach($group as $i=>$f)
                          @if($f->id == $student->group_id)
                            <option value="{{$f->id}}" selected>{{ $f->group}}</option>
                          @else
                            <option value="{{$f->id}}">{{ $f->group}}</option>
                          @endif
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group col-md-6">
                      <label>Select Section</label>
                      <select name="section_id" class="form-control form-control-sm input-sm" required>
                        @foreach($section as $i=>$f)
                          @if($f->id == $student->section_id)
                            <option value="{{$f->id}}" selected>{{ $f->section}}</option>
                          @else
                            <option value="{{$f->id}}">{{ $f->section}}</option>
                          @endif
                        @endforeach
                      </select>
                    </div>
                <button type="submit" class="btn btn-primary">Update</button>
               </form>
              </div>
          </div>
      </div>
</div>
@endsection

@section('page-js')
<script type="text/javascript">
        
    jQuery('#dob').datepicker({
        autoclose: true,
        todayHighlight: true
    });

</script>

@endsection