<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserUpdateRequest;
use App\Http\Requests\UserStoreRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::latest()->paginate(7);
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    public function store(UserStoreRequest $request)
    {
        User::create($request->validated());
        return to_route('users.index');
    }

    public function show(User $user)
    {
        //
    }


    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }


    public function update(UserUpdateRequest $request, User $user)
    {
        $user->update($request->validated());
        return to_route('users.index');
    }


    public function destroy(User $user)
    {
        if (auth()->id() == $user->id) {
            return back();
        }

        $user->delete();
        return back();
    }
}
