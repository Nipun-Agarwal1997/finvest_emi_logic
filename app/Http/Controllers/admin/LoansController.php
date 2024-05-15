<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\LoanDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class LoansController extends Controller
{
    public $model				=	'loans';
	public $sectionName			=	'loans';
	public $sectionNameSingular	=	'admin';

    public function __construct() {
		View::share('modelName',$this->model);
		View::share('sectionName',$this->sectionName);
		View::share('sectionNameSingular',$this->sectionNameSingular);
	}

    public function index(Request $request) {
        $DB = LoanDetails::select('*');
        if ($request->all()) {
            // If we want to apply filter this condition we will use for dynamic appending
        }
        $DB->orderBy('clientid', 'DESC');
        $records = $DB->get();

        return View::make("admin.$this->model.index", compact('records'));
        
    }
}
