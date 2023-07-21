<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        // Aqui você pode criar a lógica...
        // Verificar se o usuário existe...
        // Buscar dados de um usuário, etc.

        $ingredientes = [
            'receita' => [
                'farinha',
                'ovos',
                'Leite',
                'Fermento'
            ]
        ];

        return view('bemvindo', ['ingredientes' => $ingredientes]);
    }
}
