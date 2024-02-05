<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    const REDIRECTHOME = "/users";

    public function index()
    {
        if (Auth::check()) {
            return view('users.home', [
                'users' => User::latest('created_at')->get()
            ]);
        }
   
        return redirect('login')->withSuccess(AuthController::NOT_ALLOWED);
    }

    public function addPage()
    {
        if (Auth::check()) {
            return view('users.add');
        }
   
        return redirect('login')->withSuccess(AuthController::NOT_ALLOWED);
    }

    public function addData(Request $request)
    {
        if (Auth::check()) {
            $this->validate($request, [
                'username' => 'required',
                'password' => 'required',
            ]);

            User::create([
                'username' => $request->input('username'),
                'password' => $request->input('password'),
            ]);
            
            return redirect(self::REDIRECTHOME);
        }
   
        return redirect('login')->withSuccess(AuthController::NOT_ALLOWED);
    }

    public function updatePage($id)
    {
        if (Auth::check()) {
            return view('users.update', [
                'user' => User::find($id)
            ]);
        }
   
        return redirect('login')->withSuccess(AuthController::NOT_ALLOWED);
    }

    public function updateData(Request $request)
    {
        if (Auth::check()) {
            $id = $request->input('user_id');

            $this->validate($request, [
                'username' => 'required',
            ]);

            $user = User::find($id);
            $user->username = $request->input('username');

            if ($request->input('change_password')) {
                $this->validate($request, [
                    'password' => 'required',
                ]);

                $user->password = $request->input('password');
            }
  
            $user->save();
            
            return redirect(self::REDIRECTHOME);
        }
   
        return redirect('login')->withSuccess(AuthController::NOT_ALLOWED);
    }

    public function deleteData($id)
    {
        if (Auth::check()) {
            $user = User::findOrFail($id);
            $user->delete();
            
            return redirect(self::REDIRECTHOME);
        }
   
        return redirect('login')->withSuccess(AuthController::NOT_ALLOWED);
    }
}
