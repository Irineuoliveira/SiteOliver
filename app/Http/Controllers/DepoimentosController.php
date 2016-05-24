<?php

namespace oliver\Http\Controllers;

use Illuminate\Http\Request;
use oliver\Http\Requests;
use oliver\Depoimentos;

class DepoimentosController extends Controller
{
    
    public function buscar()
    {
     
        $dp = Depoimentos::where('ativo', 's')->orderBy('id','desc')->paginate(5);
        
        //dd($dp->toArray());
        
        
        
        
        
        
        
        
        
        
        
              
        return view('publico/depoimentos',['depoimentos'=>$dp]);    
        
    }
    
    
    
}
