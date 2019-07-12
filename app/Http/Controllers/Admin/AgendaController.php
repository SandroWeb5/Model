<?php
namespace App\Http\Controllers\Admin;
use Yajra\Datatables\Datatables;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Agenda as Banco;
use App\Models\Log;


class AgendaController extends Controller
{
    public function __construct(){$this->middleware('auth');}

    /*Principal*/
    public function index() {
        return view('admin.agenda');
    }
    
    /*Dados Tabela*/
    public function getData() {
    	/**/
        $datas = Banco::select(['id', 'nome', 'email', 'fone'])->get();
        /**/
        return Datatables::of($datas)
        ->addColumn('action', function ($agenda) {
        return '
            <a href="#" class="edit btA" data-id="'.$agenda->id.'" data-toggle="modal" data-target="#Edit" data-tooltip="tooltip" data-placement="left" title="Editar"><i class="fas fa-edit orange Anime"></i>
            </a>
            <a href="#" class="delete btA" id="'.$agenda->id.'" data-tooltip="tooltip" data-placement="left" title="Deletar"><i class="fas fa-times-circle red Anime"></i>
            </a>';
        })
        ->make(true);
    }

    /*Salvar*/
    public function save(Request $r) {
        $data = new Banco;
        /*Logs*/
        $logs['usuario']    = auth()->user()->name;
        $logs['email']      = auth()->user()->email;
        $logs['user_id']    = auth()->user()->id;
        $logs['evento']     = 'Criou a Agenda de - '.$r->input('nome');
        Log::create($logs);
        /*validação*/
        $data->nome     = $r->input('nome');
        $data->email    = $r->input('email');
        $data->fone     = $r->input('fone');
        $data->obs      = $r->input('obs');
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
        $logs['usuario']    = auth()->user()->name;
        $logs['email']      = auth()->user()->email;
        $logs['user_id']    = auth()->user()->id;
        $logs['evento']     = 'Atualizou a Agenda de - '.$data['nome'];
        Log::create($logs);
        /*validação*/
        $data->nome     = $r->input('nome');
        $data->email    = $r->input('email');
        $data->fone     = $r->input('fone');
        $data->obs      = $r->input('obs');
        /**/
        $data->save();
        echo "Atualizado";
    }

    /*Deletar*/
    public function delete($id) {
        $data = Banco::find($id);
        /*Logs*/
        $logs['usuario']    = auth()->user()->name;
        $logs['email']      = auth()->user()->email;
        $logs['user_id']    = auth()->user()->id;
        $logs['evento']     = 'Deletou a Agenda de - '.$data['nome'];
        Log::create($logs);
        /**/
        $data->delete();
        echo "deletado";
    }
}
