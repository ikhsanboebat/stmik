<?php

namespace App\Http\Controllers\Src;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;
use App\User;
use Auth;
use App\history_password;

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
    
    public function cpcont(Request $request){
        $request->validate([
            'current_password' => ['required', new MatchOldPassword,],
            'new_password' => ['required','different:current_password'],
            'confirm_password' => ['same:new_password'],
        ]);

        // if (!(Hash::check($request->get('current_password'), Auth::user()->password))) {
        //     // The passwords matches
        //     return redirect()->route('pengaturan.ubahpassword')->with("error","Password yang anda masukan tidak sesuai dengan database kami.");
        // }

        // if(strcmp($request->get('current_password'), $request->get('new-password')) == 0){
        //     //Current password and new password are same
        //     return redirect()->route('pengaturan.ubahpassword')->with("error","Password baru tidak boleh sama dengan password lama anda");
        // }

        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);

        history_password::create([
            'user_id' => Auth::user()->id
        ]);

        // dd('Password change successfully.');

        // $validatedData = $request->validate([
        //     'current-password' => 'required',
        //     'new-password' => 'required|string|min:6|confirmed',
        //     'confirmation-password' => 'required|string|min:6|same:new-password'
        // ]);

        
        // //Change Password
        // $user = Auth::user();
        // $user->password = bcrypt($request->get('new-password'));
        // $user->save();

        return redirect()->route('pengaturan.ubahpassword')->with("success","Password berhasil diganti ^_^ !");
    }
}
