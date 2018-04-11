@extends('admin.home')

@section('content')
    <form action="{{url('admin/create')}}" method="post">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="put">
        <input type="text" placeholder="name " name="name">
        <input type="email" placeholder="email" name="email">
        <input type="password" placeholder="password" name="password">
        {{--<input type="password" placeholder="password" name="password">--}}

        <input type="submit" value="Create">
    </form>
@endsection
