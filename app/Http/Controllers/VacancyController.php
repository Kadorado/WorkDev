<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;
use App\Models\Vacancy;

class VacancyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data=$request->user();

        $id_recrutier = DB::table('users')
        ->join('recruiters', 'users.id', '=', 'recruiters.user_id')
        ->where('recruiters.user_id','=',$data['id'])
        ->select('recruiters.id')
        ->get();

        $vacantes = DB::table('vacancies')
            ->join('recruiters', 'vacancies.recrutier_id', '=', 'recruiters.id')
            ->where('recrutier_id','=',$id_recrutier[0]->id)
            ->select('vacancies.*')
            ->get();
        return view('Vacancy.index', ['vacantes' => $vacantes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Vacancy.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->user();

        $id_recrutier = DB::table('users')
        ->join('recruiters', 'users.id', '=', 'recruiters.user_id')
        ->where('recruiters.user_id','=',$data['id'])
        ->select('recruiters.id')
        ->get();


        $new_vacancy = new Vacancy();
        $new_vacancy->recrutier_id= $id_recrutier[0]->id;
        $new_vacancy->Title= $request->get('title');
        $new_vacancy->ExperienceRequire= $request->get('experience');
        $new_vacancy->Salary= $request->get('salary');
        $new_vacancy->Location= $request->get('location');
        $new_vacancy->currency= $request->get('currency');
        $new_vacancy->DescriptionVacancy= $request->get('descriptionjob');
        $new_vacancy->state= $request->get('state');

        $new_vacancy->save();
        return redirect('/vacante');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
