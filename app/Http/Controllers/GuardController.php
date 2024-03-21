<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Roles;
use App\Models\Society;
use App\Models\User;
use Illuminate\Http\Request;

class GuardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $members = User::select('users.*', DB::raw('SUM(societies.commision) As commision'), DB::raw('SUM(societies.value) As sale'))
         ->leftJoin('societies', 'societies.agent', '=', 'users.user_id')
         ->where('users.role_id',  3)
         ->groupBy('users.user_id')
         ->get();

        // $members = User::Leftjoin('societies', 'societies.agent', '=', 'users.user_id')->where('role_id', 3)->select('users.*','societies.commision as commision')->groupBy('users.id')->get();

        return view('admin.societyGuard.index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $role = Roles::findOrFail(3);
        $societies = User::where('role_id', 2)->get();
        $title = 'Agent Create';
        $create = true;
        return view('admin.societyGuard.create', compact('role', 'societies', 'title', 'create'));
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
            'user_id' => 'unique:users,user_id',
            'society' => 'required',
            'PAN' => 'required',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->society = $request->society;
        $user->user_id = $request->user_id;
        $user->PAN = $request->PAN;
        $user->commission = 0;
        $user->role_id = 3;


        $user->save();

        return redirect()->route('guard.index')->with('message', 'Agent Created Successfully');
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
        $role = Roles::findOrFail(3);
        $societies = User::where('role_id', 2)->get();
        $title = 'Guard Edit';
        $edit = true;
        return view('admin.societyGuard.create', compact('role', 'member', 'edit', 'title', 'societies'));
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
            'email' => 'required|unique:users,email,' . $id,
            'user_id' => 'unique:users,user_id,' . $id,
            'society' => 'required',
            'PAN' => 'required',
        ]);

        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->society = $request->society;
        $user->user_id = $request->user_id;
        $user->PAN = $request->PAN;
        $user->commission = 0;

        $user->save();
        return redirect()->route('guard.index')->with('message', 'Agent Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('guard.index')->with('message', 'Agent Deleted Successfully');
    }

    public function status(Request $request)
    {
        $user = User::findOrFail($request->user_id);
        $user->status = $request->status;
        $user->save();

        return redirect()->back();
    }
}
