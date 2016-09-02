<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


use App\Usuario;
use App\Http\Requests\UsuarioRequest;


use App\Http\Controllers\User;

class ControllerUsuario extends Controller
{
    public function novo() {
        return view('formulario');
    }
    
     public function adiciona(UsuarioRequest $request) {
        Usuario::create($request->all());
        
        Usuario::on('mysql2')->insert($request->only('nome','cep','rua','cidade','bairro'));
         Usuario::on('mysql3')->insert($request->only('nome','cep','rua','cidade','bairro'));
       // return redirect()->action('ControllerUsuario@listagem')->withInput($request->only('name'));
    }
    
    public function listagem() {
        
        // $usuarios = new Usuario();
         //$usuarios->setConnection('mysql2');
         //$teste=$usuarios->get();
         //$conec=DB::connection('mysql2');
         //$teste=$conec->table('usuarios')->get();
        
        $user = Usuario::on('mysql3')->get();
       
        //$user= Usuario::all();
         return view('listagem')->with('usuarios',$user);
        
    }
}
