<?php

namespace App\Repositories\User;

use App\Repositories\User\UserContract;

use App\User;

/**
* 
*/
class EloquentUserRepository implements UserContract
{
	public function create($request){
		$user = new User;
		$user->first_name = $request->first_name;
		$user->last_name = $request->last_name;
		$user->user_name = $request->user_name;
		$user->email = $request->email;
		$user->password = $request->password;
		$user->user_bio = $request->user_bio;
		$user->profile_image = $request->profile_image;
		$user->save();
		return $user;
	}
}
// 	public function findAll(){
// 		$alluser = User::all();
// 		return $alluser;
// 	}
// 	public function findByid($userid){
// 		return User::find($userid);
// 	}

// 	public function update($request, $userid){
// 		$user = $this->findById($userid);
// 		$user->first_name = $request->first_name;
// 		$user->last_name = $request->last_name;
// 		$user->save();
// 		return $user;
// 	}	

// 	public function delete($userid){
// 		$deleteUser = $this->findById($userid);
//         $deleteUser->delete();
//      	return $deleteUser;
// 	}
// }
