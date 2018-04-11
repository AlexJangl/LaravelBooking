<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function search ($keyword){
        return self::where('name','LIKE','%'.$keyword.'%')->orderBy('name','ASC')->get();
    }
    public static function createUser($name,$email,$password){
        $user=new User();
        $user->name=$name;
        $user->email=$email;
        $user->password=$password;
        $user->save();
        return $user;
    }
    public static function deleteUser($id){
        $user=self::find($id);
        $user->delete();
    }
    public static function updateUser($id,$name,$email,$role){
        $user=self::find($id);
        $user->name=$name;
        $user->email=$email;
        $user->role=$role;
        $user->update();
        return $user;

    }
}
