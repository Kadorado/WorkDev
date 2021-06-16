<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Developer;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class DeveloperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
 
       //obtiene el archivo que se ha subido
        $file=$request->file('curriculum');
        //nombra el archivo con la fecha la hora y la extension
        $name = "pdf_".time().".".$file->guessExtension();
        //asigna la ruta para guardarlo
        $route = public_path("curriculums/".$name);
        //guarda el archivo en la ruta especificada
        copy($file, $route);
             

        $dataDev = new Developer();
        $data = $request->user();
        $dataDev->user_id= $data['id'];
        $dataDev->fullName = $request->get('fullName');
        $dataDev->experience = $request->get('experience');
        $dataDev->about_me = $request->get('about_me');
        $dataDev->country = $request->get('country');
        $dataDev->githubProfile = $request->get('github');
        $dataDev->curriculum = "curriculums/".$name;

        $dataDev->save();
        $developer = Developer::where('user_id', $data['id'])->first();


        return redirect()->route('developerdata',['developer'=>$dataDev]);

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
