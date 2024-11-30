<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;    
use Illuminate\Http\Request;

class DashboardController extends Controller
{
public function index()
{
    $user = Auth::user();

    // Pastikan user memiliki role tertentu
    if ($user->hasRole('SuperAdmin')) {
        return view('dashboard.superadmin');
    }

    if ($user->hasRole('Admin')) {
        return view('dashboard.admin');
    }

    return redirect('/')->with('error', 'You do not have permission to access this page.');
}


}
