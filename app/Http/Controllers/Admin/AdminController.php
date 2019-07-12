<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Log;
use App\Models\Agenda;
use App\Models\Faq;

class AdminController extends Controller
{
    public function __construct(){
		$this->middleware('auth');
	}

    public function index() {
        $logs = Log::count();
        $agendas = Agenda::count();
        $aviso = Faq::count();
        $users = User::where('status','=','S')->count();
        $avisos = Faq::where('tipo','=','G')->orderBy('id','desc')->get();
        $acoes = Log::where('email','=', auth()->user()->email)->count();

        $ultimo = Log::where('evento','=','Entrou no Sistema')
                    ->where('email','=', auth()->user()->email)
                    ->orderBy('id','desc')
                    ->first();

        return view('admin.admin',compact('users','logs','agendas', 'aviso', 'avisos', 'ultimo', 'acoes'));;
    }
}
