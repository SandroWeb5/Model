<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User as Banco;
use App\Models\Log;

class DadosController extends Controller
{
    public function __construct() {  $this->middleware('auth'); }

   	/*EDITAR*/
	public function index(){
		$id = auth()->user()->id;
        $registro = Banco::find($id);
		return view('admin.dados',compact('registro'));
	}

	/*ALTERAR*/
	public function update(Request $r){
		$id = auth()->user()->id;
		$data = Banco::find($id);

		$S1 = $data->password;
		$S2 = $r->input('password');
		$S3 = bcrypt($r->input('password'));
		if($S1 == $S2 ){$Senha = $S1;}else{$Senha = $S3;}

		if($r->hasFile('photo')){
			$dir = "adminlte/img/uploads/";
			$foto = $r->file('photo');
			$ex = $foto->guessClientExtension();
			$num = rand();
			$nomeImg = "Avatar_".$num.".".$ex;
			$foto->move($dir,$nomeImg);
		}else{
			$nomeImg = $data->photo;
		}
		$data->name = $r->input('name');
		$data->password = $Senha;
		$data->photo = $nomeImg;

		$data->save();
        /*Logs*/
        $logs['usuario'] = auth()->user()->name;
        $logs['email'] = auth()->user()->email;
        $logs['user_id'] = auth()->user()->id;
        $logs['evento'] = 'Atualizou seus Dados';
        Log::create($logs);
		return redirect()->route('dados')->with('sucesso', 'ok');
	}
}
