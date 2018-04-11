@extends('admin.home')

@section('content')
    <div class="bs-example">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
            </tr>
            </thead>
            <tbody>

            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->role}}</td>
                    <td>
                        <div class="btn-group">
                        <a type="button" class="btn btn-group btn-success" href="{{url('admin/edit/'.$user->id)}}">Редактировать</a>
                        <a type="button" class="btn btn-group btn-danger" href="{{url('admin/delete/'.$user->id)}}">Удалить</a>
                    </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

