<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tavmeres;

class iranyitasController extends Controller
{
    public function index(){
        $utolsoAdatok = Tavmeres::orderBy("t_id","DESC")->limit(15)->get();
        $utolsoAdat = Tavmeres::orderBy("t_id","DESC")->first();
        $legkisebb = Tavmeres::min("cm");
        $db = Tavmeres::count();
        return view("welcome",["utolsoAdatok" => $utolsoAdatok,"utolsoAdat" => $utolsoAdat,"legkisebb" => $legkisebb,"db" => $db]);
    }
}
