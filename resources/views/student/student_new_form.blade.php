
@extends('layouts.master')

@section('main-content')

<div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">New Student</h4> 
                </div>
            </div>
<div class="col-sm-12">
  <div class="white-box">
      <div class="row">

          <div class="col-sm-12 col-xs-12">
          
              <form method="post" action="{{ url('/student') }}" enctype="multipart/form-data" autocomplete="off">
                @csrf
                
                  <div class="form-group col-md-6">
                      <label for="exampleInputEmail1">Student Name</label>
                      <input name="name" type="text" class="form-control input-sm" id="exampleInputEmail1" placeholder="Enter Student Name"> </div>
                      
            <div class="form-group col-md-6">
                <label for="exampleInputEmail1">Date of Birth</label>
                <input id="dob" name="dob" type="text" class="form-control mydatepicker input-sm">
            </div>  
                  <div class="form-group col-md-6">
                      <label for="exampleInputEmail1">Father Name</label>
                      <select name="family_id" class="form-control form-control-sm input-sm " required>
          <option value="" class="select2-search-choice-close">Select Family</option>
          @foreach($family as $i=>$f)
            <option value="{{$f->id}}">{{ $f->father_name }}</option>
          @endforeach
        </select>
            </div>
          
                  
                  <div class="form-group col-md-6">
                      <label for="exampleInputPassword1">Level</label>
                      <select name="level_id" class="form-control form-control-sm input-sm" required>
          <option value="">Select Level</option>
          @foreach($level as $i=>$f)
            <option value="{{$f->id}}">{{ $f->level }}</option>
          @endforeach
        </select> </div>
                  <div class="form-group col-md-6">
                      <label for="exampleInputPassword1">Group</label>
                      <select name="group_id" class="form-control form-control-sm input-sm" required>
          <option value="">Select Group</option>
          @foreach($group as $i=>$f)
            <option value="{{$f->id}}">{{ $f->group }}</option>
          @endforeach
        </select> </div>
                  <div class="form-group col-md-6">
                      <label for="exampleInputPassword1">Section</label>
                      <select name="section_id" class="form-control form-control-sm input-sm" required>
          <option value="">Select Section</option>
          @foreach($section as $i=>$f)
            <option value="{{$f->id}}">{{ $f->section }}</option>
          @endforeach
        </select> </div>
                  
        <div class="row">
          <div class="col-lg-12">
              <div class="white-box">
                  <div class="row">
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h3 class="box-title m-b-0">Select Subjects</h3>   
                          @foreach($subject as $i=>$f)
                          <div class="col-md-2">
                            <div class="checkbox">
                <input id="subject_{{$f->id}}" type="checkbox" value="{{$f->id}}" name="subject_ids[]">
                            <label for="subject_{{$f->id}}"> {{ $f->title }}</label>
                            </div>
                          </div>
                          @endforeach
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Save</button>
              <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
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