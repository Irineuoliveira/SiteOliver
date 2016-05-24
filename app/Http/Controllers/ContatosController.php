<?php

namespace oliver\Http\Controllers;

use Illuminate\Http\Request;
use oliver\Http\Requests;
use oliver\Http\Requests\ContatoRequest;
use oliver\Contato;

class ContatosController extends Controller
{
    public function gravar(ContatoRequest $request)
    {
       $input = $request->all(); 
       Contato::create($input);
       
       return redirect('contato');
        
    }
    
    
}
