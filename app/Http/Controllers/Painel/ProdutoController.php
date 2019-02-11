<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Painel\Product;

class ProdutoController extends Controller
{
    private $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
        $title = 'Listagem dos produtos';
    }

    public function index()
    {
        $title = 'Listagem dos produtos';
        $products = $this->product->all();
        return view('painel.products.index', compact('products', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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

    public function tests()
    {
        // $prod = $this->product;
        // $prod->name = 'nome do produto';
        // $prod->number = 1235;
        // $prod->active = true;
        // $prod->category = 'eletronicos';
        // $prod->description = 'Descricao do produto';
        // $insert = $prod->save();

        // if($insert)
        //     return 'Inserido com sucesso';
        // else
        //     return 'Falha ao inserir';
            
        // $insert = $this->product->create([
        //                 'name'        => 'Controle',
        //                 'number'      => 123665,
        //                 'active'      => false,
        //                 'category'    => 'eletronicos',
        //                 'description' => 'Botoes luminosos'
        //             ]);
        // if($insert)
        //     return "Inserido com sucesso, ID:{$insert->id}";
        // else
        //     return 'Falha ao inserir';

        // $prod = $this->product->find(2);
        // $prod->name = 'update';
        // $prod->number = 11;
        // $prod->active = 1;
        // $prod->category = 'eletronicos';
        // $prod->description = 'Desc update';
        // $insert = $prod->save();

        // if($insert)
        //     return "Inserido com sucesso";
        // else
        //     return 'Falha ao inserir';

        // $prod = $this->product->find(1);
        // $update = $prod->update([
        //                 'name'        => 'teste 17',
        //                 'number'      => 17,
        //                 'active'      => 2,
        //                 'category'    => 'eletronicos',
        //                 'description' => 'Botoes luminosos'
        // ]);

        // if($update)
        //     return "Inserido com sucesso";
        // else
        //     return 'Falha ao inserir';

        $prod = $this->product->find(1);
        $delete = $prod->delete();

        if($delete)
            return "Deletado com sucesso";
        else
            return 'Falha ao deletar';
    }
}
