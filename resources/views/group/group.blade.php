@extends('layouts.master')

@section('content')
<div class="container" style="margin: 40px;">
    <h2>Group</h2>
    <a class="btn btn-sm btn-primary" href="{{ url('/group/new') }}">Add New Group</a>
    <br/>
    <br/>
    <table class="table table-sm table-bordered">
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