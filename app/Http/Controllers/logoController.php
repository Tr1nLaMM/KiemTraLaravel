<?php

namespace App\Http\Controllers;

use App\Models\logo;
use Illuminate\Http\Request;

class logoController extends Controller
{
    public function index()
    {
        $logos = logo::all();
        return view('index', compact('logos'));
    }
}