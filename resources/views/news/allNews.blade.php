@extends('layouts.adminStructure')
@section('title','All News')
@section('Main-content')

<div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">New Name</th>
      <th scope="col">Description</th>
      <th scope="col">Department</th>
     
    </tr>
  </thead>

  <tbody>
  @foreach($news as $new)
  <tr>
      <th scope="row">{{$new->id}}</th>
      <td>{{$new->title}}</td>
      <td>{{$new->description}}</td>
      <td>{{$new->deparment->title}}</td>
      <td><img style="width: 100px;" src={{ asset('images/news/' . $new->news_photo) }} alt=""></td>
     
      <td><a href= class="btn btn-primary">Show</a></td>
      <td><a href= class="btn btn-success">Update</a></td>
      <td><a href= class="btn btn-danger">Delete</a></td>
    </tr>
@endforeach
  
   
  </tbody>
</table>
</div>

@endsection