<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Skill;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $skills = DB::table('skills')
            ->select('skills.skillName', 'skills.id')
            ->get();

        return view('developer.skills', ['skills' => $skills]);
       
        //return view('developer.skills');


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //obtiene el string con las habilidades seleccionadas y lo convierte en una lista
        $userSkills = explode(',',$request->get('userSkills'));
        $userId = Auth::id();
        foreach($userSkills as $skill){    
            $skill = Skill::find($skill);
            $skill-> developers()->attach($userId);
        }

 
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
        //obtiene el id del usuario actual
        $id = Auth::id();
        $userSkills = DB::table('skills')
                ->join('developer_skill', 'skills.id','=','developer_skill.id')
                ->where('developer_skill.user_id', '=', $id)
                ->select('skills.skillName')
                ->get()
                    ;
                return view('developer.skills', ['Userskills' => $userSkills]);
       
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
