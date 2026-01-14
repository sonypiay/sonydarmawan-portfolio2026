<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    const MODULE_NAME = 'dashboard';
    const MODULE_TITLE = 'Dashboard';
    const MODULE_PATH = 'admin.pages.dashboard';

    public function index()
    {
        return response()->view(static::MODULE_PATH);
    }
}
