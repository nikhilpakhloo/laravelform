<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function showUsers()
    {
        $users = DB::table('students')
            ->orderBy('id')
            ->simplePaginate(2);
        // ->orderBy('name', 'desc')
        // ->get();

        // return $users ;
        // dump($users);
        // foreach($users as $user){
        //     echo $user->name. "<br>";
        // }
        return view('allusers', ['data' => $users]);
    }
    public function singleUser(string $id)
    {
        $users = DB::table('students')->where('id', $id)->get();
        return view('user', ['data' => $users]);
    }
    public function addUser(Request $req)
    {
        $user = DB::table('students')
            ->insert([
                [
                    'name' => $req->username,
                    'email' => $req->useremail,
                    'city' => $req->usercity,
                    'age' => $req->userage,
                    // 'created_at'=> now(),
                    // 'updated_at'=> now()
                ]
            ]);
        if ($user) {
            return redirect()->route('home');
            // echo "<h1>Data inserted Successfully</h1>";
        }
    }
    public function updatePage(string $id)
    {
        $user = DB::table('students')->find($id);
        // return $user;
        return view('adduser', ['data' => $user]);
    }
    public function updateUser(Request $req, $id)
    {
        $user = DB::table('students')
            ->where('id', $id)
            ->update([
                'name' => $req->username,
                'email' => $req->useremail,
                'city' => $req->usercity,
                'age' => $req->userage,
                //     'name' => 'Nikhil Pakhloo'


            ]);
        if ($user) {
            return redirect()->route('home');
            // echo "Data Updated";
        }
    }
    public function deleteUser(string $id)
    {
        $user = DB::table('students')
            ->where('id', $id)
            ->delete();

        if ($user) {
            return redirect()->route('home');
        }
    }
}
