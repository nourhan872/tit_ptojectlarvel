<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;


class UserController extends Controller
{

    public function index ()
    {
        $users = json_decode(\Illuminate\Support\Facades\File::get(storage_path('users.json')),
true);
        return view ('users.index',['users=>$users']);

    }


    public function create ()
    {
        
        return view ('users.create');
    }


    function store(Request $request){

        $users = json_decode(\Illuminate\Support\Facades\File::get(storage_path('users.json')),true);

        $user = (object)  ['name' => $request->input('name') , 'email' =>$request->input('email')];

        array_push($users , $user ) ;

        return print_r($users);
        
    }
    public function show ($id)
    {
        $users = json_decode(\Illuminate\Support\Facades\File::get(storage_path('users.json')),
        true);
        return view ('users.show' , with( ['id'=> $id]) );
    }


    public function update (Request $Requset , $id)
    {
        return  ' Upduate the specifed resource eith id in storage ';
    }


    

    public function destory ($id)
    {
        return  "Delete the specifed resource with id from storage .";
    }



}