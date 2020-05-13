@extends('layouts.master')

@section('main-content')

            <div class="col-sm-12">
              <div class="white-box">
                  <div class="table-responsive">
                      <table id="example23" class="display nowrap" cellspacing="0" width="100%">
                          <thead>
                              <tr>
                                  <th>Sr#</th>
                                  <th>Name</th>
                                  <th>Father Name</th>
                                  <th>Level</th>
                                  <th>Group</th>
                                  <th>Section</th>
                                  <th>Action</th>
                              </tr>
                          </thead>
                          <tfoot>
                              <tr>
                                  <th>Sr#</th>
                                  <th>Name</th>
                                  <th>Father Name</th>
                                  <th>Level</th>
                                  <th>Group</th>
                                  <th>Section</th>
                                  <th>Action</th>
                              </tr>
                          </tfoot>
                          <tbody>
    @foreach($data as $i=>$d)
    <tr>
      <th scope="row">{{ $i+1 }}</th>
      <td>{{ $d->name }}</td>
      <td>{{ $d->family->father_name }}</td>
      <td>{{ $d->level->level}}</td>
      <td>{{ $d->group->group}}</td>
      <td>{{ $d->section->section}}</td>
      <td>
        <a href="{{ url('/student/edit') }}/{{ $d->id }}" class="btn btn-sm btn-primary">Edit</a>
        <a href="{{ url('/student/delete') }}/{{ $d->id }}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
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