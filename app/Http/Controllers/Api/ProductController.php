<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    private $product;
    /*Criação da função construtora*/
    public function __construct(\App\Models\Product $product){
        
        $this->product = $product;

    }

    /*Criação da função index para retornar todos os dados da model product,
     e tratando diretamente o retorno em Json para que não seja necessário fazer nenhuma alteração no header*/
    public function index(){
        $products = $this->product->all();
        return response()->json($products);
    }

    /*Criação de Metodo Show, onde o usuário fará a requisição a partir de um GET com ID de produto especifico*/
    public function show($id){
        $product = $this->product->find($id);
        return response()->json($product);
    }

    /*Metodo Save, onde o usuário fará a requisição a partir de um POST passando os paramêtros para envio/cadastro de produto*/
    public function save(Request $request){
        $data = $request->all();
        $product = $this->product->create($data);

        return response()->json($product);
    }
}
