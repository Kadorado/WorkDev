<?php

namespace App\Http\Controllers;
use App\Models\Developer;


use Illuminate\Http\Request;

class PageController extends Controller
{
    public  function home(){
        return view("welcome");
    }

    public function nosotros(){
        return view('nosotros');
    }

    public function companydata(){
        return view('companydate');
    }

    public function developerdata(Developer $developer){
        return view('developerData', [
            'developer' => $developer]);
    }


}
