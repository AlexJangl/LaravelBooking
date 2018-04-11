@extends('admin.home')

@section('content')

<form action="{{url('admin/delete/'.$user->id)}}" method="post">
    {{csrf_field()}}
    <input type="hidden" name="_method" value="delete">
    <input type="number" placeholder="id" name="id" value="{{$user->id}}" >
    <input type="submit" value="Delete">
</form>

@endsection
