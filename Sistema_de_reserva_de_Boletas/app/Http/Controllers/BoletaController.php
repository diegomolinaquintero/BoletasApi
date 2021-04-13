<?php

namespace App\Http\Controllers;

use App\Models\Boletas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\BoletaResourcerResource;

class BoletaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $boletas = Boletas::all();
        return response()->json($boletas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'puesto'=>'required',
            'user_id'=>'required',
        ]);
            if ($validator->fails()){
                return response()->json('Faltan datos',409);
            }
            $boleta = Boletas::create($request->all());
        return response()->json([$boleta],201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $boleta = Boletas::findOrFail($id);
        return response()->json($boleta);
    }
    public function showbyuser($id)
    {

        $boleta = Boletas::where('user_id', $id)->get();
        if (empty(($boleta))){
            return response()->json('Usuario no asigando a boleta',409);
        }
        return response()->json($boleta);
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
        $validator = Validator::make($request->all(),[
            'puesto'=>'required',
            'user_id'=>'required',
        ]);
            if ($validator->fails()){
                return response()->json('Faltan datos',409);
            }
            $boleta = Boletas::findOrFail($id);
            $boleta->update($request->all());
        
        return response()->json([$boleta],201);
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
