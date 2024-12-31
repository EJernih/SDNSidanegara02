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

        $user = Auth::user();  // Mendapatkan pengguna yang sedang login

        // Mengirimkan data ke view
        return view('dashboard.index', compact('user'));
    }
}

