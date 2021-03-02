<?php

namespace App\Http\Controllers;

/*use Illuminate\Foundation\Auth\User;*/
use app\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function profile()
    {

        return view('profile', array('user' => Auth::user()));
    }

    /*public function edit($id)
    {
        $paciente = Paciente::findOrFail($id);

        return view('pacientes.edit', compact('paciente'));
    }*/


    /*public function updateProfile(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());

        return view('profile');*/
    //}
}
