<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use App\Repositories\User\UserContract;

class UserController extends Controller
{
	protected $repo;
    public function __construct(UserContract $userCont){
    	$this->repo = $userCont;
    }

    public function index(){
        // $allusers = $this->repo->findAll();
        // return view('user.index')->with('allusers', $allusers);
    	return view('index');
    }

    public function createUserForm(){
    	return view('user.register');
    }
    // public function createuser(){

    // }

    public function createUser(Request $request){
    	$user = $this->repo->create($request);
    	if ($user){
    		return redirect()->route('landingpage');
            // return redirect()->route('viewpost');
            return back();
    	}else{
    		return back();
    	}
    }

    // public function viewuser($userid){
    //     $userid = $this->repo->findById($userid);
    //     return view('user.view')->with('userid', $userid);
    // }

    // public function edituser($userid){
    //     $userid = $this->repo->findById($userid);
    //     return view('user.edit')->with('userid', $userid);

    // }

    // public function updateuser(Request $request, $userid)
    // {
    //     $user = $this->repo->update($request, $userid);
    //     if ($user){
    //         return redirect()->route('homepage');
    //         return back();
    //     }else{
    //         return back();
    //     } 

    // }


    // public function deleteuser($userid){
    //     $user = $this->repo->delete($userid);
    //     if ($user){
    //         return redirect()->route('homepage');
    //     }else{
    //         return back();
    //     } 
    // }

}