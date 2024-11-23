<?php
// app/Http/Controllers/DashboardController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function adminDashboard()
    {
        return view('admin.dashboard'); // Create this view
    }

    public function userDashboard()
    {
        return view('user.dashboard'); // Create this view
    }
}
