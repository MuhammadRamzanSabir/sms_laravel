@extends('layouts.master')

@section('content')
<div class="container" style="margin: 40px;">
    <h2>Students</h2>
    <a class="btn btn-sm btn-primary" href="{{ url('/student/new') }}">Add New Student</a>
    <br/>
    <br/>
    <table class="table table-sm table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">DOB</th>
      <th scope="col">Father Name</th>
      <th scope="col">Address</th>
      <th scope="col">Level</th>
      <th scope="col">Group</th>
      <th scope="col">Section</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($data as $i=>$d)
    <tr>
      <th scope="row">{{ $i+1 }}</th>
      <td>{{ $d->name }}</td>
      <td>{{ $d->dob}}</td>
      <td>{{ $d->family->father_name }}</td>
      <td>{{ $d->family->address}}</td>
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
@endsection