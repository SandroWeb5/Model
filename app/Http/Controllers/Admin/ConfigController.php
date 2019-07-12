<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Config as Banco;
use App\Models\Log;

class ConfigController extends Controller
{
    public function __construct(){$this->middleware('auth');}

    /*EDITAR*/
    public function index(){
        $registro = Banco::find(1);
        return view('admin.config',compact('registro'));
    }

    /*Atualizar*/
    public function update(Request $r) {
        $data = Banco::find(1);
        /*Logs*/
        $logs['usuario'] = auth()->user()->name;
        $logs['email'] = auth()->user()->email;
        $logs['user_id'] = auth()->user()->id;
        $logs['evento'] = 'Atualizou a Configuração do site';
        Log::create($logs);
        /**/
        $data->titulo = $r->input('titulo');
        $data->descricao = $r->input('descricao');
        $data->chaves = $r->input('chaves');
        $data->email = $r->input('email');
        $data->fone1 = $r->input('fone1');
        $data->fone2 = $r->input('fone2');
        $data->whatsapp1 = $r->input('whatsapp1');
        $data->whatsapp2 = $r->input('whatsapp2');
        $data->endereço = $r->input('endereço');
        $data->cnpj = $r->input('cnpj');
        $data->contato = $r->input('contato');
        $data->slogan = $r->input('slogan');
        $data->youtube = $r->input('youtube');
        $data->twitter = $r->input('twitter');
        $data->instagram = $r->input('instagram');
        $data->facebook = $r->input('facebook');
        $data->google = $r->input('google');
        $data->dest1 = $r->input('dest1');
        $data->dest2 = $r->input('dest2');
        $data->dest3 = $r->input('dest3');
        $data->dest4 = $r->input('dest4');
        /**/
        $data->save();
        return redirect()->route('config')->with('sucesso', 'ok');
    } 
}
