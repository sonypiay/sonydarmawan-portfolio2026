<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    const MODULE_NAME = 'Login';
    const MODULE_TITLE = 'Login';
    const MODULE_PATH = 'admin.pages.login';

    /**
     * Login view
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function login(Request $request)
    {
        $data = [
            'request' => $request,
            'module' => [
                'name' => static::MODULE_NAME,
                'title' => static::MODULE_TITLE,
            ],
        ];

        return response()->view(
            static::MODULE_PATH,
            $data
        );
    }

    /**
     * Login authentication
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ], [
            'email.required' => 'Email is required',
            'password.required' => 'Password is required',
        ]);

        try {
            $admin = Auth::guard('web')->attempt($credentials);

            if( ! $admin ) {

                Session::flash('login_error', 'Account not found');

                return redirect()
                    ->route('admin.auth.login')
                    ->withInput();
            }

            $request->session()->regenerate();

            Session::flash('toast_success', 'Login success');
            return redirect()->route('admin.dashboard.index');
        } catch(\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Logout
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(Request $request)
    {
        $request->session()->forget('user');

        return redirect()->route('admin.auth.logout');
    }
}
