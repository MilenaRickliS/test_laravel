<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaisController extends Controller
{
    public function index(){
        $paises = [
            ['nome' => 'Brasil', 'capital' => 'Brasilia'],
            ['nome' => 'Argentina', 'capital' => 'Buenos Aires'],
            ['nome' => 'Chile', 'capital' => 'Santiago'],
        ];
        return view('paises.index', compact('paises'));
    }
    public function show($nome){

        $p = [
            'nome' => $nome,
            'capital' => 'Desconhecida',
        ];

        switch($nome){
            case 'Brasil':
                $p['capital'] = 'Brasilia';
                break;
            case 'Argentina':
                $p['capital'] ='Buenos Aires';
                break;
            case 'Chile':
                $p['capital'] = 'Santiago';
                break;
            // default:
            //     $p['capital'] = 'não encontrado';
        }

        return view('paises.show', compact('p'));
    }
}
