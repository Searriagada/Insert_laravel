<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proyecto;

class proyectoController extends Controller
{
    public function vistaInsertProyecto(){
        return view('proyecto/InsertProyecto'); //View .blade
    }

    public function ListadoProyecto(){
        $proyecto = Proyecto::all();
        return view('proyecto/ListProyecto',[
            'proyecto' => $proyecto
        ]);
    }

    public function InsertProyecto(Request $request){
        $proyecto = new Proyecto;
        $proyecto->VCH_NOMBRE_PROYECTO =$request->nombre;
        $proyecto->DATE_FECINI_PROYECTO=$request->fecha_inicio;
        $proyecto->VCH_ESTADO_PROYECTO=$request->estado;
        $proyecto->VCH_RESPONSABLE_PROYECTO=$request->responsable;
        $proyecto->INT_MONTO_PROYECTO=$request->monto;
        $proyecto->created_by=$request->create_by;
        $proyecto->save();
        return "Proyecto ingresado con éxito";
    }
}
