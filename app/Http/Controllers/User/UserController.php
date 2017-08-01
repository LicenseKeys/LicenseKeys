<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use DB;


class UserController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      return view('users.dashboard.main');
  }
  public function invoices()
  {
    return view('users.dashboard.invoices');
  }
  public function services()
  {
    return view('users.dashboard.services');
  }
  public function editUser()
  {
    $userid = Auth::user()->id;
    $user = DB::table('users')->where('id', $userid)->first();
    return view('users.dashboard.editaccount')->with(['user' => $user]);
  }
  public function editPass()
  {
    return view('users.dashboard.changepass');
  }  
}
