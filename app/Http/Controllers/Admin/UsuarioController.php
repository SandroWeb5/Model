<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use App\User as Banco;
use App\Models\Log;

class UsuarioController extends Controller
{
    public function __construct() { $this->middleware('auth'); }

    /*Principal*/
    public function index() {
        return view('admin.usuario');
    }
    
    /*Dados Tabela*/
    public function getData() {
    	/**/
        $datas = Banco::select(['id', 'name', 'email', 'perm', 'password', 'photo', 'status'])->get();
        /**/
        return Datatables::of($datas)
        ->addColumn('action', function ($usuario) {
            if($usuario->status == 'S'){$NotE = 'far fa-thumbs-up green';}else{$NotE = 'far fa-thumbs-down red';}
            if($usuario->status == 'S'){$StatuS = 'desativar';}else{$StatuS = 'ativar';}
        return '
            <a href="#" class="btA '.$StatuS.'" id="'.$usuario->id.'" data-tooltip="tooltip" data-placement="left" title="'.$StatuS.'"><i class="'.$NotE.' Anime"></i></a>
            <a href="#" class="edit btA" data-id="'.$usuario->id.'" data-toggle="modal" data-target="#Edit" data-tooltip="tooltip" data-placement="left" title="Editar"><i class="fas fa-edit orange Anime"></i></a>
            <a href="#" class="delete btA" id="'.$usuario->id.'" data-tooltip="tooltip" data-placement="left" title="Deletar"><i class="fas fa-times-circle red Anime"></i></a>';
        })
        ->make(true);
    }

    /*Salvar*/
    public function save(Request $r) {
        $data = new Banco;
        /*Logs*/
        $logs['usuario'] = auth()->user()->name;
        $logs['email'] = auth()->user()->email;
        $logs['user_id'] = auth()->user()->id;
        $logs['evento']  = 'Cadastrou o Usuario - '.$r->input('name');
        Log::create($logs);
        $Status     = $r->input('status');
        $Password   = $r->input('password');
        $Senha      = bcrypt($Password);
        if(isset($Status)){$data->status = 'S';}else{$data->status = 'N';}
        /**/
        $data->name     = $r->input('name');
        $data->email    = $r->input('email');
        $data->perm     = $r->input('perm');
        $data->password = $Senha;
        $data->photo    = 'user.jpg';
        /**/
        $data->save();
        echo "sucesso";
    }

    /*Exibir*/
    public function show($id) {
        $data = Banco::find($id);
        echo json_encode($data);
    }

    /*Atualizar*/
    public function update(Request $r, $id) {
        $data = Banco::find($id);
        /*Logs*/
        $logs['usuario'] = auth()->user()->name;
        $logs['email'] = auth()->user()->email;
        $logs['user_id'] = auth()->user()->id;
        $logs['evento'] = 'Atualizou o Usuario - '.$data['name'];
        Log::create($logs);
        /**/
        $S1 = $data->password;
        $S2 = $r->input('password');
        $S3 = bcrypt($r->input('password'));
        if($S1 == $S2 ){$Senha = $S1;}else{$Senha = $S3;}
        $data->name = $r->input('name');
        $data->email = $r->input('email');
        $data->perm = $r->input('perm');
        $data->password = $Senha;
        /**/
        $data->save();
        echo "Atualizado";
    }

    /*Deletar*/
    public function delete($id) {
        $data = Banco::find($id);
        /*Logs*/
        $logs['usuario'] = auth()->user()->name;
        $logs['user_id'] = auth()->user()->id;
        $logs['email'] = auth()->user()->email;
        $logs['evento'] = 'Deletou o Usuario - '.$data['name'];
        Log::create($logs);
        /**/
        $data->delete();
        echo "deletado";
    }

     /*Ativar*/
    public function ativar($id) {
        $data = Banco::find($id);
        /*Logs*/
        $logs['usuario'] = auth()->user()->name;
        $logs['user_id'] = auth()->user()->id;
        $logs['email'] = auth()->user()->email;
        $logs['evento'] = 'Ativou usuario - '.$data->name;
        Log::create($logs);
        /**/
        $data->status = 'S';
        $data->update();
        echo "Ativou";
    }

     /*Desativar*/
    public function desativar($id) {
        $data = Banco::find($id);
        /*Logs*/
        $logs['usuario'] = auth()->user()->name;
        $logs['user_id'] = auth()->user()->id;
        $logs['email'] = auth()->user()->email;
        $logs['evento'] = 'Desativou o usuario - '.$data->name;
        Log::create($logs);
        /**/
        $data->status = 'N';
        $data->update();
        echo "Desativou";
    }
}
