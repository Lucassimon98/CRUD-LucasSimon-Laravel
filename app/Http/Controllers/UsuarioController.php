<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function index() {
        return view('index');
    }

    public function create() {
        return view('cadastro')
    }

    public function store(Request $request) {
        Usuario::create($request->all());
        return redirect()->route('index');
    }
}
