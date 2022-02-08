<?php

namespace App\Http\Controllers;

use App\Models\Student;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
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

        $students = Student::latest()->paginate(5);
        return view('home',compact('students'))
            ->with('i', (request()->input('page',1)-1)*5);
    }
}
