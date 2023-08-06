<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index', [
            'judul' => 'Dashboard',
            'totalAdmin' => User::where('id_level', '1')->count(),
            'totalUsers' => User::where('id_level', '2')->count()
        ]);
    }
}
