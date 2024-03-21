<?php

namespace App\Http\Controllers;

use App\Models\Roles;
use App\Models\Society;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $members = User::where('role_id', 2)->get();
        return view('admin.members.index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $roles = Roles::limit(3)->get();
        // $societies = Society::all();
        $create = true;
        $title = 'Members Create';
        return view('admin.members.create', compact('create', 'title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required',
        ]);

        $user = new User();
        $user->name = $request->name;
         $user->PAN = $request->PAN;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->role_id = 2;

        $user->save();
        // User::create($request->post());

        return redirect()->route('members.index')->with('message', 'TL Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $member = User::findOrFail($id);
        $roles = Roles::limit(3)->get();
        $societies = Society::all();
        $edit = true;
        $title = 'Members Edit';
        return view('admin.members.create', compact('member', 'roles', 'societies', 'edit', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|unique:users,email',
        ]);

        $user->name = $request->name;
        $user->phone = $request->phone;
         $user->PAN = $request->PAN;
        $user->email = $request->email;
        $user->update();
        return redirect()->route('members.index')->with('message', 'TL Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('members.index')->with('message', 'TL Deleted Successfully');
    }

    public function status(Request $request)
    {
        $user = User::findOrFail($request->user_id);
        $user->status = $request->status;
        $user->save();

        return redirect()->back();
    }
}
