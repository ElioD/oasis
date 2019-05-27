<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ApiController extends Controller
{
    public function restaurantes($dia){

        $restaurantes = DB::table('centros_consumo as cc')
        ->join('centros_consumo_horarios as cch','cc.id','=','cch.centro_consumo_id')
        ->select('cc.id','cc.concepto_es','cch.hora_final','cch.hora_inicio','cc.nombre')
        ->where([['cc.categoria_id','=',2],['cch.dia','=',$dia]])->get();

        return $restaurantes;
    }


    public function bares($dia){
         $bares = DB::table('centros_consumo as cc')
        ->join('centros_consumo_horarios as cch','cc.id','=','cch.centro_consumo_id')
        ->select('cc.id','cc.concepto_es','cch.hora_final','cch.hora_inicio','cc.nombre')
        ->where([['cc.categoria_id','=',3],['cch.dia','=',$dia]])->get();

        return $bares;
    }


    public function show($id,$dia){
        $show = DB::table('centros_consumo as cc')
        ->join('centros_consumo_horarios as cch','cc.id','=','cch.centro_consumo_id')
        ->where([['cc.id','=',$id],['cch.dia','=',$dia]])->get();

        return $show;
    }
}