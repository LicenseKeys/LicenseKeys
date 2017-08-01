<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Auth;
use DB;

class UserInformationUpdater extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function updateUser(Request $request)
  {
    $userid = Auth::user()->id;
    $this->validate($request, [
        'email' => 'required',
        'username' => 'min:6|max:255|required',
    ]);
    DB::table('users')
      ->where('id', $userid)
      ->update([
        'fname' => $request->fname, 
        'lname' => $request->lname,
        'email' => $request->email,
        'username' => $request->username,
        'updated_at' => Carbon::now()
        ]);
    return "
      <div class='alert alert-success' role='alert'>
        <strong>Complete</strong> Your information has been successfully updated!
      </div>
    ";
  }

  public function changePass(Request $request)
  {
    $user = Auth::user()->id;
    $oldpass = DB::table('users')->where('id', $user)->select('password');
    // Checking that old password matched what was in the DB
    if(Hash::check($request->oldpass, $oldpass)){
    // Checking password length
      if(strlen($request->newpass) < 10 or strlen($request->newpass) > 120){
          return 'Password length needs to be between 10 and 120 characters';
      }
    //Checking that new passwords match
      if($request->newpass != $request->newpassconf){
        return 'New passwords do not match';
      }
    // Updating the DB with new password hash
      DB::table('users')
        ->where('id', $user)
        ->update([
          'password'=> Hash::make($request->newpass),
          ]);
    return 'password updated successfully';
    };
    return 'password does not match old password.';

  }
}
