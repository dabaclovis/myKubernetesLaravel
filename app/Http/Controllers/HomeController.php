<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('users.home');
    }

    public function profile()
    {

        return view('users.profile',[
            $user_id = Auth::user()->id,
            $user = User::find($user_id),
            'user' => $user,

           'contacts' => $this->contacts(),
        ]);
    }

    public function contacts()
    {
        return Contact::all();
    }

    public function setting()
    {
        return view('users.settings');
    }

    public function uploadAvatar(Request $request)
    {
        if($request->hasFile('avatar')){
            $file = $request->file('avatar');
                if(File::exists('storage/users/'.Auth::user()->avatar))
                {
                    File::delete('storage/users/'.Auth::user()->avatar);
                }
            $filename = $file->getClientOriginalName();
            $path = $request->file('avatar')->storeAs('users', $filename,'public');
            User::where('id',Auth::user()->id)->update(['avatar' => $filename]);
        }
        return back();
    }

}
