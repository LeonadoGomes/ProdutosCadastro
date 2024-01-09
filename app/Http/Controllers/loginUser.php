<?php

namespace App\Http\Controllers;

use App\Models\Cadastro;
use Illuminate\Http\Request;


class loginUser extends Controller
{
    public function register()
    {
        return view('login.cadastroUser');
    }


    public function userregistration(Request $request)
    {
        $cadastro = new Cadastro;

        $cadastro->name = $request->name;
        $cadastro->surname = $request->surname;
        $cadastro->login = $request->login;
        $cadastro->password = $request->password;

        $cadastro->save();

        return redirect('/login/listagemDeUsuario')->with('success', 'Cadastro feito com sucesso!');
    }

    public function listregister()
    {
        $cadastro = Cadastro::all();

        return view('login.listagemDeUsuario', ['cadastro' => $cadastro]);
    }

    public function destroy($id)
    {

        Cadastro::findOrfail($id)->delete();
        return redirect('/login/listagemDeUsuario')->with('success', 'Cadastro deletado com sucesso!');
    }


    public function edit($id)
    {
        $cadastro = Cadastro::findOrFail($id);

        return view('login.edit', ['cadastro' => $cadastro]);
    }

    public function update(Request $request)
    {
        $data = $request->all();

        $cadastro = Cadastro::findOrFail($request->id)->update($data);
        return redirect('/login/listagemDeUsuario')->with('success', 'Cadastro editado com sucesso!');
    }
}
