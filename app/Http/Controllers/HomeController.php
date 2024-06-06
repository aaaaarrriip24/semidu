<?php

namespace App\Http\Controllers;

use App\Models\ArtikelModel;
use App\Models\User;
use App\Rules\MatchOldPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

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
        $data = ArtikelModel::all();
        return view('home' ,compact('data'));
    }
    public function jurnalis()
    {
        $data = ArtikelModel::all();
        return view('jurnalis.home');
    }
    public function admin()
    {
        $data = ArtikelModel::all();
        return view('admin.home');
    }

    //Ganti Password
    public function ganti_password()
    {
        $id = Auth::user()->id;
        $data = DB::table('users')->select('users.*')
            ->where('users.id', $id)
            ->get();
        return view('/admin/changepassword', compact('data'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);
   
        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
        Alert::success('Success', 'Ganti Password Berhasil!');
        return redirect()->route('admin');
    }

    //Ganti Password Dosen
    public function ganti_password_jurnalis()
    {
        $id = Auth::user()->id;
        $data = DB::table('users')->select('users.*')
            ->where('users.id', $id)
            ->get();
        return view('/jurnalis/changepassword', compact('data'));
    }

    public function update_jurnalis(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);
   
        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
        Alert::success('Success', 'Ganti Password Berhasil!');
        return redirect()->route('jurnalis');
    }
}
