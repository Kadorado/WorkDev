<?php

namespace App\Http\Controllers;
use App\Models\Developer;
use App\Models\Vacancy;
use App\Models\Tecnology;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DeveloperController;



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

    public function dashboard(){
        return view("dashboard");
    }

    public function vacancy(Vacancy $vacancy){

        $userTecno = DB::table('tecnologies')
        ->join('tecnology_vacancy', 'tecnologies.id','=','tecnology_vacancy.tecnology_id')
        ->where('tecnology_vacancy.vacancy_id', '=', $vacancy->id)
           ->select('tecnologies.tecno')
           ->get();
        return view("vacancy", ['vacancy'=>$vacancy , 'userTecno'=>$userTecno]);
    }


}
