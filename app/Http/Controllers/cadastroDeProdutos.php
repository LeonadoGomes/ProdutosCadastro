<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class cadastroDeProdutos extends Controller
{
    public function index()
    {

        return view('welcome');
    }

    public function cadastro()
    {
        return view('products.cadastro');
    }
    public function store(Request $request)
    {
        $products = new Products;

        $products->name = $request->name;
        $products->qtd = $request->qtd;
        $products->description = $request->description;
        $products->preco = $request->preco;

        $products->save();
        return redirect('/');
    }

    public function buscar()
    {

        $products = Products::all();

        return view('welcome', ['products' => $products]);
    }

    public function destroy($id)
    {
        Products::findOrfail($id)->delete();
        return redirect('/')->with('msg', 'Produto deletado');
    }

    public function edit($id)
    {
        $products =  Products::findOrfail($id);
        return view('products.edit', ['products' => $products]);
    }

    public function update(Request $request)
    {
        $data = $request->all();

        $products =  Products::findOrfail($request->id)->update($data);
        return redirect('/')->with('msg', 'Produto editado');
    }
}
