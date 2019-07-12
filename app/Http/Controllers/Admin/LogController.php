<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Datatables;
use App\Models\Log as Banco;

class LogController extends Controller
{
	public function __construct() { $this->middleware('auth'); }

    /*Principal*/
    public function index() {
        return view('admin.log');
    }
    
    public function getData() {
        $datas = Banco::select(['id', 'usuario', 'email', 'evento', 'created_at'])->get();
        return Datatables::of($datas)->make(true);
    }
}
