<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortalController extends Controller
{
    //

    public $sites = [
        'https://www.ajpmotos.com/pt/modelos/enduro/pr4-enduro-pro-125/',
        'https://www.sym.pt/pt/models/nh-t.html',
        'http://www.motoespinha.pt/motos/Beta/Enduro/RR-125-2T-/1567/',
        'https://www.yamaha-motor.eu/gb/en/products/motorcycles/hyper-naked/mt-125/',
        'https://www.youtube.com/?hl=pt-PT&gl=PT'
    ];

    public function mostraSite(){
        $a = count($this->sites);
        return view('sites', ['sites' => $this->sites, 'numero' => $a]);
    }

    public function processarFormulario(Request $request){
        $nome = $request -> nome;
        $idade = $request -> idade;
        $marcafav = $request -> marcafav;
        $carta = $request -> carta;
        return view('formenv',['nome'=>$nome,'idade'=>$idade,'marcafav'=>$marcafav,'carta'=>$carta]);
    }
}
