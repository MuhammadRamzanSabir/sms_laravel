@extends('layouts.master')

@section('content')
<div class="container" style="margin: 40px;">
    <h2>Family</h2>
    <a class="btn btn-sm btn-primary" href="{{ url('/family/new') }}">Add New Family</a>
    <br/>
    <br/>
    <table class="table table-sm table-bordered">
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
@endsection