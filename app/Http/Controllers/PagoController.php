<?php

namespace App\Http\Controllers;
use App\Models\Pago;
use Illuminate\Http\Request;

class PagoController extends Controller
{
    public function create(){
        return view('pago.create');
    }
    
    public function store(Request $request){
       
        $pag= new Pago();
        
        $pag->numero=$request->numero;
        $pag->concepto=$request->concepto;
        $pag->cantidad=$request->cantidad;
        $pag->fechapago=$request->fechapago;
         $pag->save();
    
       return($request);
    
         return redirect()->route('pago.show', $pag->id);
        }
        
        
        public function index(){
        
            $pag = pago::orderBy('id', 'desc')->get();
            return view('pago.listar', compact('pag'));
                                
        }
     
        public function destroy (pago $pago){
                   
            $pago->delete();
            return redirect()->route('pago.index');
        }   
        
        
        public function edit(pago $pago){
               
            return view('pago.edit',compact('pago'));
        
          }
        
        
          public function update(Request $request, pago $pago){
                   
           
            $pago->numero = $request->numero;
            $pago->concepto = $request->concepto;
            $pago->cantidad = $request->cantidad;
            $pago->fechapago = $request->fechapago;
            $pago->save();
         
            return redirect()->route('pago.index');
         
          }
          
        
          public function show ($id){
        
            $pag = pago::findOrFail($id);
        
            
            return view('pago.show', compact('pag'));
          
        
        
          }
    
}
