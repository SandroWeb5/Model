<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use App\Models\Faq as Banco;
use App\Models\Log;

class FaqController extends Controller
{
    public function __construct(){$this->middleware('auth');}

    public function index() {
        $registros = Banco::where('tipo','=','G')->orderBy('id','desc')->get();
        return view('admin.faq',compact('registros'));
    }
    /*Salvar*/
    public function save(Request $r) {
        $data = new Banco;
        /*Logs*/
        $logs['usuario'] = auth()->user()->name;
        $logs['email'] = auth()->user()->email;
        $logs['user_id'] = auth()->user()->id;
        $logs['evento'] = 'Criou um Aviso Geral';
        Log::create($logs);
        /*validação*/
        $data->pergunta = $r->input('aviso');
        $data->tipo = 'G';
        $data->resposta = '***';
        $data->user_id = auth()->user()->id;
        /**/
        $data->save();
        return redirect()->route('faq')->with('sucesso', 'ok');
    }
    /*Salvar*/
    public function delete($id) {
        $data = Banco::find($id);
        /*Logs*/
        $logs['usuario'] = auth()->user()->name;
        $logs['email'] = auth()->user()->email;
        $logs['user_id'] = auth()->user()->id;
        $logs['evento'] = 'Deletou um Aviso Geral';
        Log::create($logs);
        /**/
        $data->delete();
        return redirect()->route('faq')->with('delete', 'ok');
    }
}
