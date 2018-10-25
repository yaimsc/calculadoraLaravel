<?php 

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request; 

class Controlador extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function calc(Request $request){
    	return view ("calc",['nombre' => $request->input("nombre")]);
    }

    public function operaciones(Request $request){
    	
    		$num1 = $request->input("num1");
    		$num2 = $request->input("num2"); 
            $nombre = $request->input("nombre");
            $boton = $request->input('boton'); 
            $error = "";

            switch ($boton) {
                case 'sumar':
                    $resultado = $num1 + $num2;
                    break;
                case 'restar':
                    $resultado = $num1 - $num2;
                    break;
                case 'multiplicar':
                    $resultado = $num1*$num2;
                    break;
                case 'dividir':
                    if($num1 || $num2 == 0){
                        $resultado = "#ERROR";
                        $error = "No se puede dividir entre 0";
                    }else{
                         $resultado = $num1 / $num2; 
                    }
                    break;
                default:
                    $resultado = "#ERROR";
                    break;
            }

            if($error == null){
                return view('calc', ['resultado' => $resultado, 'error' => false, 'nombre' => $nombre]);  
            }else{
                return view('calc', ['resultado' => $resultado, 'error' => $error, 'nombre' => $nombre]);  
            }

    		
    }
}
