<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

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

    public function affiliates()
    {
        return view('admin.affiliates');
    }

    public function downloadFile(User $user, $file)
    {
        return Storage::download($user->{$file});
    }
}
