<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;

class GroupController extends Controller
{
    //
    public function index()
    {
        $groupPosts = Group::latest()->paginate(5);
        return view('group.create', ['groupPosts' => $groupPosts]);
    }

    public function store(Request $request)
    {
       $request->validate([
            'topic' => ['required', 'max:100'],
            'reservation_date' => ['required','date'],
            'reservation_time' => ['required']
        ]);

        Group::create($request->all());

        return redirect()->route('root')->with('notice', '發布揪團成功');
    }
}
