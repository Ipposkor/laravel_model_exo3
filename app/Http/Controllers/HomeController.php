<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        $users = DB::table('membres')->get();
        $mens= DB::table('membres')->where('genre' , "Homme")->get();
        $womens= DB::table('membres')->where('genre' , "Femme")->get();
        $mensfit= DB::table('membres')->where('genre' , "Homme")->whereBetween('age',[18,24])->get();
        $womensfit= DB::table('membres')->where('genre' , "Femme")->whereBetween('age',[18,24])->get();
        $nofit= DB::table('membres')->where('age','<',18)->orWhere('age','>',24)->get();
        return view('welcome', compact('users','mens','womens','mensfit','womensfit','nofit'));
    }
}
