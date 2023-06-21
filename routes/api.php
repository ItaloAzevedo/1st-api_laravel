<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/*Configurando rota de teste com retorno de uma mensagem para apresentação ao utilizar o metodo GET,
Injetando a classe Request do 'Illumination\Http\Request' e referenciando como a variavel '$request' na função*/
Route::get('/teste', function(Request $request){

    /*Trazendo em um dump de debug um valor do header especifico ('postman-token') 
    dd($request->headers->get('postman-token'));
    
    /*Trazendo em um dump de debug os valores de todos os headers da requisição por meio do metodo 'all()'
    dd($request->headers->all());*/

    /*Criando variável $response que irá instanciar um response do namespace definido 
    e passando como string o retorno do metodo 'json_encode' para formatação, onde no caso,
    o retorno trará como tipo de conteúdo HTML e não JSON*/
    $response = new \Illuminate\Http\Response(json_encode(['msg' => 'Minha primeira resposta de API']));

    //Tratando o header do response para qual tipo de conteúdo a ser definido no response (JSON) 
    $response->header('Content-Type', 'application/json');

    //Retornando a variável response
    return $response;

});