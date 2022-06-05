@extends('layouts.adminStructure')
@section('title','All News')
@section('Main-content')
<form method="post" action={{url('news/store')}}  enctype="multipart/form-data">
    @csrf
<input type="text" class="form-control form-control-sm my-3" name="name"  placeholder="news name">
<input type="text" class="form-control form-control-sm my-3" name="description"  placeholder="news description">
<input type="file" class="form-control form-control-sm my-3" name="newPhoto"  >
<div>
<label for="dept">Department</label>
    <select name="id_dept" id="dept" >
       @foreach($depart as $depart)
        <option value="{{$depart->id}}"> {{$depart->title}}</option>
   @endforeach
    </select>
</div>
<input type="submit" class="btn btn-success my-3" >

</form>


@endsection