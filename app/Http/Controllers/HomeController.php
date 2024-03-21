<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Society;
use App\Models\User;
Use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

         if(auth()->user()->role_id==1){
            $sale = Society::select('start_date', DB::raw('SUM(value) As commision'))
         ->where('created_at', '>', now()->subDays(30)->endOfDay())
         ->groupBy('start_date')
         ->get();

         $agents = User::select(DB::raw('COUNT(id) As agents'))
         ->where('role_id', 3)
         ->first();
         $tl = User::select(DB::raw('COUNT(id) As tls'))
         ->where('role_id', 2)
         ->first();
         $earn = Society::select(DB::raw('SUM(value) As value'), DB::raw('SUM(commision) As commision'))
         ->first();

         }elseif(auth()->user()->role_id==2){
            $id = auth()->user()->id;
            $sale = Society::Join('users', 'users.user_id', '=', 'societies.agent')->select('start_date', DB::raw('SUM(value) As commision'))
         ->where('societies.created_at', '>', now()->subDays(30)->endOfDay())
         ->where('users.society', $id)
         ->groupBy('start_date')
         ->get();

         $agents = User::select(DB::raw('COUNT(id) As agents'))
         ->where('role_id', 3)
         ->where('society', $id)
         ->first();
         $tl = 0;
         $earn =Society::Join('users', 'users.user_id', '=', 'societies.agent')->select(DB::raw('SUM(value) As value'), DB::raw('SUM(commision) As commision'))
         ->where('users.society', $id)
         ->first();

         }else{

            $id = auth()->user()->user_id;
        $sale = Society::select('start_date', DB::raw('SUM(value) As commision'))
         ->where('created_at', '>', now()->subDays(30)->endOfDay())
         ->where('agent', $id)
         ->groupBy('start_date')
         ->get();

         $agents =0;
         $tl = 0;
         $earn = Society::select(DB::raw('SUM(value) As value'), DB::raw('SUM(commision) As commision'))->where('agent', $id)
         ->first();

         }

        return view('admin.index', compact('sale','earn','tl','agents'));

    }
}
