@extends('layouts.master')

@section('content')
<div class="container" style="margin: 40px;">
    <h2>Level</h2>
    <a class="btn btn-sm btn-primary" href="{{ url('/level/new') }}">Add New Level</a>
    <br/>
    <br/>
    <table class="table table-sm table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Level</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($data as $i=>$d)
    <tr>
      <th scope="row">{{ $i+1 }}</th>
      <td>{{ $d->level }}</td>
      <td>
        <a href="{{ url('/level/edit') }}/{{ $d->id }}" class="btn btn-sm btn-primary">Edit</a>
        <a href="{{ url('/level/delete') }}/{{ $d->id }}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
      </td>
    </tr>
    @endforeach()
  </tbody>
</table>
</div>
@endsection