<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CalendarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); // Auth users are only supposed to see calendar
    }

    public function index()
    {
        // Return the calendar view
        return view('admin.calendar');
    }

}
