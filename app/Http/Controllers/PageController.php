<?php

namespace App\Http\Controllers;
use App\Models\Developer;
use App\Models\Vacancy;
use App\Models\Tecnology;
use Illuminate\Support\Facades\DB;

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
        return view('developer.developerData', [
            'developer' => $developer]);
    }

    public function vacancy(Vacancy $vacancy){

        $userTecno = DB::table('tecnologies')
        ->join('tecnology_vacancy', 'tecnologies.id','=','tecnology_vacancy.tecnology_id')
        ->where('tecnology_vacancy.vacancy_id', '=', $vacancy->id)
           ->select('tecnologies.tecno')
           ->get();


        return view("vacancy", ['vacancy'=>$vacancy , 'userTecno'=>$userTecno]);
    }

    // public function skills(){
    //     return view('developer.skills');
    // }

}
