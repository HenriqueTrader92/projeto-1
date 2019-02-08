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
        $title = 'Titulo teste';
        $xss = '<script>alert("Ataque XSS);<script>';
        $var1 = '123';
        $arrayData = [1,2,3,4,5,6,7,8,9];

        return view('site.home.index', compact('title', 'xss', 'var1', 'arrayData'));
    }

    public function contato()
    { 
        return view('site.contact.index');
    }

    public function painel()
    { 
        return view('welcome');
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
