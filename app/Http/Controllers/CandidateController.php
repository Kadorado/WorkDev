<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCandidates($id){

        $developers = DB::table('developers')
        ->join('developer_vacancy', 'developers.user_id','=','developer_vacancy.developer_id')
        ->where('developer_vacancy.vacancy_id', '=', $id)
        ->get();
        return view("Vacancy.candidatos", ['candidates'=>$developers]);
    }
}
