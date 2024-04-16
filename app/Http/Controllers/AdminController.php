<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Session\Session;
use App\Models\AdminLoginModel;
use Illuminate\Routing\RedirectController;

class AdminController extends Controller
{
    public function index()
    {
        if (Auth::guard('admin')->check()) {
            return redirect()->route('admin.dashboard');
        }
        return view('admin.index');
    }

    public function adminlogin(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $admin = AdminLoginModel::where('email', $email)->first();
        if ($admin) {
            if ($password === $admin->password) {
                Auth::guard('admin')->login($admin);
                return redirect()->route('admin.dashboard');
            }
        }

        return redirect()->route('admin2')->with('error', 'Invaild');
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin2.login');
    }

    public function register_view()
    {
        return view('layout.registration');
    }
}
