@extends('layouts.master')

@section('content')
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4 float-left">Section</h1><br>
    <a class="btn btn-sm btn-primary float-right" href="{{ url('/section/new') }}">Add New Section</a>
                        
                              <ol class="breadcrumb mb-12">
                                <li class="breadcrumb-item active">Section</li>
                            </ol>
                        </div>
                    </div>
                </main>
<div class="container" style="margin: 0px;">  
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Section</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($data as $i=>$d)
    <tr>
      <th scope="row">{{ $i+1 }}</th>
      <td>{{ $d->section }}</td>
      <td>
        <a href="{{ url('/section/edit') }}/{{ $d->id }}" class="btn btn-sm btn-primary">Edit</a>
        <a href="{{ url('/section/delete') }}/{{ $d->id }}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
      </td>
    </tr>
    @endforeach()
  </tbody>
</table>
</div>
@endsection