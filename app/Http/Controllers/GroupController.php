<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GroupController extends Controller
{
    //
    public function index()
    {
        return view('GroupCreate');
    }

    public function store(Request $request)
    {
        $request;
        return '111';
    }
}
