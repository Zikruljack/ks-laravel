<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function index()
    {
        // Code to display the admin dashboard
        return view('admin.kategori.index');
    }

}
