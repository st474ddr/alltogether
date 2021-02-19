<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class GroupController extends Controller
{
    //
    public function index()
    {
        return view('GroupCreate');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'topic' => ['required', 'max:100'],
            'reservation_date' => ['required','date'],
        ]);
        $group = Group::created($request->all());
        return response($group, Response::HTTP_CREATED);
    }
}
