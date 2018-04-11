<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\EditUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function search(Request $request)
    {
        $users = new User();
        $users = $users->search($request->input('search'));
        return view('admin/search', ['users' => $users]);
    }

    public function all_user()
    {
        $users = User::all();
        return view('admin/users', ['users' => $users]);
    }

    public function create()
    {
        return view('admin/create');
    }

    public function save(Request $request)
    {

        $user = User::createUser($request->name,$request->email,$request->password);
        $request->session()->flash('message', 'Пользователь '.$user->name.' создан');
        return redirect('/admin/users');

    }

    public function delete($id)
    {
        $user = User::find($id);
        return view('/admin/delete', ['user' => $user]);
    }
    public function del($id, Request $request){
        dd($request);
//        $user = User::deleteUser($id);
//        //Session::flash('message', 'Пользователь удален');
//        $request->session()->flash('message', 'Пользователь '.$user->name.' обновлен');
//        return redirect('/admin/users');
    }
    public function edit($id){
        $user=User::find($id);
        return view ('/admin/edit',['user'=>$user]);
    }
    public function update($id, EditUserRequest $request)
    {
        $user = User::updateUser($id,$request->name,$request->email,$request->role);
        $request->session()->flash('message', 'Пользователь '.$user->name.' обновлен');
        return redirect('/admin/users');
    }
}
