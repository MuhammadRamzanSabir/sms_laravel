@extends('layouts.master')

@section('content')
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4 float-left">Group</h1><br>
    <a class="btn btn-sm btn-primary float-right" href="{{ url('/group/new') }}">Add New Group</a>
                           <div><br><br><br>
                              <ol class="breadcrumb mb-12">
                                <li class="breadcrumb-item active">Group</li>
                            </ol>
                        </div>
                    </div>
                </main>
<div class="container" style="margin: 0px;">
    
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Group</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($data as $i=>$d)
    <tr>
      <th scope="row">{{ $i+1 }}</th>
      <td>{{ $d->group }}</td>
      <td>
        <a href="{{ url('/group/edit') }}/{{ $d->id }}" class="btn btn-sm btn-primary">Edit</a>
        <a href="{{ url('/group/delete') }}/{{ $d->id }}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
      </td>
    </tr>
    @endforeach()
  </tbody>
</table>
</div>
@endsection