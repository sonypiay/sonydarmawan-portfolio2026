<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
     * Logout
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(Request $request)
    {
        $request->session()->forget('user');

        return redirect()->route('system.auth.login');
    }
}
