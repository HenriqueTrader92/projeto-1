<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth'); // passa em todos

        // $this->middleware('auth')  // passa em todos que foram citados na exceção
        //    ->only([
        //        'empresa'
        //    ]);

        // $this->middleware('auth')     // Não passa nos que foram citados
        //     ->except([
        //         'index', 'empresa'
        //     ]);
    } 

    public function index()
    { 
        // $teste = 123;
        // $teste2 = 321;
        // $teste3 = 456;
        //  return view('site.home.teste', compact('teste', 'teste2', 'teste3'));

        return view('welcome');

    }

    public function empresa()
    { 
        return view('empresa');
    }

    public function categoria($id)
    { 
        return "Listagem dos posts da categoria: {$id}";
    }

    public function categoriaOp($id = 1)
    { 
        return "Listagem dos posts da categoria: {$id}";
    }
}
