<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function create(){
        return view('cliente.create');
    }
    
    public function store(Request $request){
       
        $lib= new Cliente();
        
        $lib->codigo=$request->codigo;
        $lib->domicilo=$request->domicilo;
        $lib->telefono=$request->telefono;
        $lib->numsocial=$request->numsocial;
         $lib->save();
    
       return($request);
    
         return redirect()->route('cliente.show', $lib->id);
        }
        
        
        public function index(){
        
            $lib = cliente::orderBy('id', 'desc')->get();
            return view('cliente.listar', compact('lib'));
                                
        }
     
        public function destroy (cliente $cliente){
                   
            $cliente->delete();
            return redirect()->route('cliente.index');
        }   
        
        
        public function edit(cliente $cliente){
               
            return view('cliente.edit',compact('cliente'));
        
          }
        
        
          public function update(Request $request, cliente $cliente){
                   
           
            $cliente->codigo = $request->codigo;
            $cliente->domicilo = $request->domicilo;
            $cliente->telefono = $request->telefono;
            $cliente->numsocial = $request->numsocial;
            $cliente->save();
         
            return redirect()->route('cliente.index');
         
          }
          
        
          public function show ($id){
        
            $lib = cliente::findOrFail($id);
        
            
            return view('cliente.show', compact('lib'));
          
        
        
          }
    
    
    
}
