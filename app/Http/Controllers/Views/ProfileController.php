<?php

namespace App\Http\Controllers\Views;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ProfileController extends Controller
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
    
    public function view(){
        return view('profile');
    }
}
