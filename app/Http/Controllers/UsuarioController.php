<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function index() {
        $usuarios = Usuario::all();
        return view('index', ['usuarios'=>$usuarios]);
    }

    public function create() {
        return view('cadastro');
    }
    public function entrar() {
        return view('entrar');
    }

    public function store(Request $request) {
        Usuario::create($request->all());
        return redirect()->route('index');
    }
    
    public function testLogin(Request $request) {
        $data = Usuario::all()
        ->where('email', '=', $request->input('email'))
        ->where('senha', '=', $request->input('senha'))
        ->count();
        
        if($data > 0)
        {
            return view('sistema');
        } else {
            return redirect()->route('entrar');
        }
    }
}
