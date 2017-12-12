<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use Image;
class UserController extends Controller
{
    public function getProfile(){

        $collection = collect(['Awesome', 'Happy', 'Cold', 'Hot', 'Thirsty', 'Ugly', 'Nervous', 'Love', 'Angry', 'Blessed', 'Rock', 'Handsome']);
        $collection->random();
        $feel = $collection->random();	

        return view('profile', array('user' => Auth::user(), 'feel' => $feel) );
    }

    public function updateAvatar(Request $request){
    	// Handle upload avatar
    	if($request->hasFile('avatar')){
    		$avatar = $request->file('avatar');
    		$filename = time() . '.' . $avatar->getClientOriginalExtension();
    		Image::make($avatar)->resize(300,300)->save( public_path('uploads/avatars/' .$filename));

    		$user = Auth::user();
    		$user->avatar = $filename;
    		$user->save();
    	}

    	$collection = collect(['Awesome', 'Happy', 'Cold', 'Hot', 'Thirsty', 'Ugly', 'Nervous', 'Love', 'Angry', 'Blessed', 'Rock', 'Handsome']);
        $collection->random();
        $feel = $collection->random();
        
    	return view('profile', array('user' => Auth::user(), 'feel' => $feel) );
    }

}