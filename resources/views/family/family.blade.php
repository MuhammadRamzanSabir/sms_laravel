@extends('layouts.master')

@section('main-content')

<div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Family</h4> 
                </div>
            </div>
            <div class="col-sm-12">
              <div class="white-box">
                  <div class="table-responsive">
                      <table id="example23" class="display nowrap" cellspacing="0" width="100%">
              
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Father Name</th>
      <th scope="col">Address</th>
      <th scope="col">Mobile</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($data as $i=>$d)
    <tr>
      <th scope="row">{{ $i+1 }}</th>
      <td>{{ $d->father_name }}</td>
      <td>{{ $d->address}}</td>
      <td>{{ $d->mobile }}</td>
      <td>
        <a href="{{ url('/family/edit') }}/{{ $d->id }}" class="btn btn-sm btn-primary">Edit</a>
        <a href="{{ url('/family/delete') }}/{{ $d->id }}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
      </td>
    </tr>
    @endforeach()
  </tbody>
</table>
</div>
</div>
</div>
@endsection

@section('page-js')
<script type="text/javascript">
        $('#example23').DataTable({
            dom: 'Bfrtip'
            , buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
</script>

@endsection