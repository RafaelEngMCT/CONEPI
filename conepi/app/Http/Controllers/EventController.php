<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Epi;
use App\Models\Estoque;

class EventController extends Controller
{
    protected $auxid = "";
    //
    public function index() {
        return view('welcome');
    }

    public function cadastro() {
        return view('cadastrar');
    }

    public function consulta() {
        $esto = Estoque::all();
        return view('consulta',['esto'=>$esto]);
    }

    public function store(Request $request) {
        $senha_adm = "nrtec1245";
        
        $epi = new Epi;
        $esto = Estoque::where('ca','=',$request->ca)->first();

        if(EPi::find($request->id)){
            return redirect('/cadastrar')->with('msg',"Codigo de Barras já Cadastrado!");
        }else{    
        $epi->id = $request->id;
        $epi->epi = $request->epi;
        $epi->ca = $request->ca;
        $epi->proprietario = "Senai Barbacena";
        if($request->senha == $senha_adm ) {
        if(is_null($esto)) {
            $esto = new Estoque([
                'ca' => $request->ca,
                'epi' => $request->epi,
                'quantidade' => 1
            ]);
            $esto->save();
        } else {
            echo($esto->quantidade);
            $esto->quantidade = $esto->quantidade+1;
            $esto->where('ca', $request->ca)->update(['quantidade' => $esto->quantidade]);
        }
    
        
            $epi->save();
            return redirect('/cadastrar')->with('msg','Epi cadastrado com sucesso!');
        }
        else
        return redirect('cadastrar')->with('msg',"Senha incorreta!");
    }
    }

    public function show(){
        $search = request('search');
        $epi = EPI::findorFail($search);
        return view('events.show', ['epi'=>$epi]);
    }

    public function edit($id) {

        $epi = Epi::findOrFail($id);
        $this->auxid = $id;

        return view('events.edit', ['epi' => $epi]);

    }

    public function update(Request $request) {

        $data = request()->except(['_token','_method']);
        $epid= Epi::where('id',$this->auxid)->update($data);
        $epid->save();
        
        return redirect('/consulta')->with('msg', 'EPI editado com sucesso!');

    }
}