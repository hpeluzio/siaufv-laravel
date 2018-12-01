<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller {
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct () {
    $this->middleware('auth');
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Http\Response
   */
  public function changeAno ($id) {
    $user = User::find(Auth::user()->id);
    $user->ano_selecionado = $id;
    $user->save();
    return redirect()->back();
  }

  public function index () {
    return view('home');
  }
}
