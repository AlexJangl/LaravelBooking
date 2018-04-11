@extends('admin.home')

@section('content')
    @if($errors->count()>0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{url('admin/edit/'.$user->id)}}" method="post">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="patch">
        <input type="text" placeholder="name" name="name" value="{{$user->name}}">
        <input type="email" placeholder="email" name="email" value="{{$user->email}}">
        <input type="text" placeholder="role" name="role" value="{{$user->role}}">
        <input type="submit" value="Edit">
    </form>
@endsection