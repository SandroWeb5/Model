<?php
namespace App\Http\Controllers\Site;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Config;

class SiteController extends Controller
{
    public function index() {
    	$s = Config::find(1);
        return view('site.index', compact('s'));
    }
}
