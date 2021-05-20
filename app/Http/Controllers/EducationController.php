<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Education;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         //obtiene el id del usuario actual
         $userId = Auth::id();
         //verifica si el usuario ya tiene sus datos llenos
         $id_developer = DB::table('users')
         ->join('developers', 'users.id', '=', 'developers.user_id')
         ->where('developers.user_id','=',$userId)
         ->select('developers.id')
         ->get();
         if(!empty($id_developer[0]->id)){
            //obtiene la educacion del usuario actual
             $userEducation = DB::table('education')
                 ->join('developer_education', 'education.id','=','developer_education.education_id')
                 ->where('developer_education.developer_id', '=', $userId)
                 ->select('education.nameEducation', 'education.level','developer_education.education_id')
                 ->get();
                 return view('developer.education', [
                     'userEducation' => $userEducation]);
                 }
         else{
             $userEducation="mensaje de error";
                 return view('developer.education', [
                 'userEducation' => $userEducation]);
             };
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $education = array(
            "Administración y Negocios",
            "Arquitectura",
            "Artes Visuales",
            "Ciencia",
            "Ciencias Ambientales",
            "Ciencias de la Salud",
            "Ciencias Económicas",
            "Ciencias Políticas",
            "Ciencias Sociales",
            "Comunicación Social",
            "Derecho",
            "Diseño Gráfico",
            "Diseño Industrial",
            "Diseño UI/UX",
            "Ingeniería Civil",
            "Ingeniería Eléctrica",
            "Ingeniería Electrónica",
            "Ingeniería Industrial",
            "Ingeniería Mecánica",
            "Ingeniería Mecatrónica",
            "Ingeniería Química",
            "Ingeniería Sistemas",
            "Marketing y Públicidad",
            "Otra",
            "Profesional en ventas",
            "Psícología"
        );
        $level =array(
            "Sin estudios",
            "Bachiller",
            "Técnico/Tecnologo",
            "Carrera tecnológica",
            "Profesional",
            "Especialización",
            "Maestría",
            "Doctorado"
        ) ;

        return view('developer.editEducation',[
            'education' => $education,
            'level' => $level,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {  
        //obtiene los campos de la tabla education
        $education = DB::table('education')->get();

        return view('developer.editEducation',[
            'education' => $education
        ]);
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
