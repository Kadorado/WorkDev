<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Tecnology;

class TecnologyController extends Controller
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
        //obtiene la lista de tecnologias
        $tecnologies = DB::table('tecnologies')
            ->select('tecnologies.tecno', 'tecnologies.id')
            ->get(); 
         //verifica si el usuario ya tiene sus datos llenos
         $id_developer = DB::table('users')
            ->join('developers', 'users.id', '=', 'developers.user_id')
            ->where('developers.user_id','=',$userId)
            ->select('developers.id')
            ->get();

        if(!empty($id_developer[0]->id)){
            //obtiene las tecnologias del usuario actual
             $userTecno = DB::table('tecnologies')
                 ->join('developer_tecnology', 'tecnologies.id','=','developer_tecnology.tecnology_id')
                 ->where('developer_tecnology.developer_id', '=', $userId)
                 ->select('tecnologies.tecno','developer_tecnology.tecnology_id')
                 ->get();
                 return view('developer.tech', [
                     'userTecno' => $userTecno,
                     'tecnologies' => $tecnologies,
                    ]);
                 }
         else{
             $userTecno="mensaje de error";
                 return view('developer.tech', [
                    'userTecno' => $userTecno,
                    'tecnologies' => $tecnologies,
                 ]);
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
        //obtiene id usuario
        $userId = Auth::user();
        $tec = $request->get('tech');
        $tecno = Tecnology::find($tec);
        $tecno->developer()->attach($userId);

        return redirect()->action([TecnologyController::class, 'index']);


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