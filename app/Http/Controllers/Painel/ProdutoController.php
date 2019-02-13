<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Painel\Product;
use App\Http\Requests\Painel\ProductFormRequest;

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
        $title = 'Cadastrar novo produto';

        $categorys = ['eletronicos', 'moveis', 'Limpeza', 'banho'];

        return view('painel.products.create-edit', compact('title', 'categorys'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductFormRequest $request)
    {
        // dd($request->all()); //Todos os campos
        // dd($request->only(['name', 'number'])); //campos selecionados
        // dd($request->except(['_token'])); // Esceto esses campos
        // dd($request->input(['name'])); //Somente um campo
        
        // Pega todos os dados que vem do formulário.
        $dataForm = $request->all();

        $dataForm['active'] = ( !isset($dataForm['active']) == '') ? 0 : 1;

        // $this->validate($request, $this->product->rules);

        // $messages = [
        //     'name.required' => 'O campo nome é de preenchimento obrigatório!',
        //     'number.numeric' => 'O campo número só pode ser preenchido com números!',
        //     'number.required' => 'O campo número é de preenchimento obrigatório!',           
        // ];

        // $validate = Validator($dataForm, $this->product->rules, $messages);
        // if($validate->fails()){
        //     return redirect()
        //             ->route('produtos.create')
        //             ->withErrors($validate)
        //             ->withInput();
        // }

        // Faz o cadastro
        $insert = $this->product->create($dataForm);

        if($insert)
            return redirect()->route('produtos.index');
        else
            return redirect()-back();
        
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
        // Recupera o produto pelo seu ID
        $product = $this->product->find($id);

        $title = "Editar produto: {$product->name}";

        $categorys = ['eletronicos', 'moveis', 'Limpeza', 'banho'];

        return view('painel.products.create-edit', compact('title', 'categorys', 'product'));
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
        return "Editando produto {$id}";
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
            
        $insert = $this->product->create([
                        'name'        => 'Chave de fenda',
                        'number'      => 4457,
                        'active'      => 1,
                        'category'    => 'eletronicos',
                        'description' => 'Aperta o seu anel'
                    ]);
        if($insert)
            return "Inserido com sucesso, ID:{$insert->id}";
        else
            return 'Falha ao inserir';

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

        // $prod = $this->product->find(1);
        // $delete = $prod->delete();

        // if($delete)
        //     return "Deletado com sucesso";
        // else
        //     return 'Falha ao deletar';
    }
}
