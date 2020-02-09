<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index(User $user)
  {
    return view('admin.calendar');
  }
}