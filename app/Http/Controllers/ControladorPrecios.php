<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorPrecios extends Controller
{
    public function getIva($nombre, $precio){
        $IVA = config('constantes.iva');

        if(is_numeric($precio) && $precio>0){
            $totaPago = $precio + ($precio * $IVA);
            return 'El artículo ' . $nombre
            . ' sin IVA cuesta: ' . $precio
            . ' y el precio del IVA es de ' . ($precio * $IVA)
            . '. El total a pagar por el artículo es de: '. $totaPago;
        }

        else{
           return 'El valor ingresado es incorrecto. Debe ser un número mayor a 0';
        }


    }
}
