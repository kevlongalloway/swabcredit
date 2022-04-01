<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function dashboard()
    {
        return view('dashboard', ['users' => User::all()]);
    }

    public function customer(User $user)
    {
        return view('admin.user-info', [
            'user' => $user
        ]);
    }
}
