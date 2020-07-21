<?php

namespace App\Http\Controllers\Views;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\history_password;
use Auth;


class PengaturanController extends Controller
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
    
    public function cpview(){

        $data['history_pw'] = history_password::where('user_id',Auth::user()->id)->get();
        // dd($data['history_pw']);
        
        return view('change_password',$data);
    }
}
