<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\LoanDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DateTime, DatePeriod, DateInterval;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

class EmiDetailsController extends Controller {
    public $model				=	'loans';
	public $sectionName			=	'loans';
	public $sectionNameSingular	=	'loans';

    public function __construct() {
		View::share('modelName',$this->model);
		View::share('sectionName',$this->sectionName);
		View::share('sectionNameSingular',$this->sectionNameSingular);
	}

    public function index() {
        $columns = [];
        $records = [];
        if (Schema::hasTable('emi_details')) {
            $DB = DB::table('emi_details')->select('*')->orderBy('clientid', 'DESC');
            $records = $DB->get();
    
            $columns = Schema::getColumnListing('emi_details');
        }
        
        return View::make("admin.$this->model.emi_details", compact('records', 'columns'));
    }
    
    public function process() {
        // Determine min and max dates
        $minDate = DB::table('loan_details')->min('first_payment_date');
        $maxDate = DB::table('loan_details')->max('last_payment_date');

        // Calculate number of months
        $start = new DateTime($minDate);
        $end = new DateTime($maxDate);
        $interval = new DateInterval('P1M');
        $period = new DatePeriod($start, $interval, $end);
        
        // Generate column names for each month
        $columns = [];
        
        // This loop iterates over each date in the $period variable, which is an instance of DatePeriod. The DatePeriod object represents a range of dates. It is constructed using a start date, an interval, and an end date.
        foreach ($period as $date) {
            $columns[] = $date->format('Y_M');
        }
        
        // Generate SQL query to create table dynamically
        // Execute raw SQL query & Check and delete if emi details table exist
        try {
            DB::statement('DROP TABLE IF EXISTS emi_details;');
            $query = "CREATE TABLE emi_details (
                clientid INT,
                " . implode(" DECIMAL(10,2), ", $columns) . " DECIMAL(10,2)
            );";

            DB::statement($query);
        } catch (\Exception $e) {
            Session::flash('error', 'Someing wrong happend. Please check Db connection');
            return Redirect(route('admin.loansDetails'));
        }

        // Process each row in loan_details table
        $loanDetails = LoanDetails::get()->toArray();
        

        foreach ($loanDetails as $loan) {
            $emiAmount = $loan['loan_amount'] / $loan['num_of_payment'];                        // used get per month emi 
            $emiAmount = round($emiAmount, 1);                                                  // round off the value by one
            $last_month_emi = $loan['loan_amount'] - $emiAmount*($loan['num_of_payment']-1);    // Used to get the last emi Amount

            $start_date = date('Y_M', strtotime($loan['first_payment_date']));                  // Used to get start date of customer loan
            $last_date = date('Y_M', strtotime($loan['last_payment_date']));                    // Used to get end date of customer loan

            $values = [];
            $k = 0;
            foreach ($columns as $col) {
                if ($col == $last_date ) {
                    $values[$col] = $last_month_emi;
                    $k = 0;
                } else if ($col == $start_date || $k == 1) {
                    $values[$col] = $emiAmount;
                    $k = 1;
                } else {
                    $values[$col] = 0.00;
                }
            }

            // Insert into emi_details table
            DB::table('emi_details')->insert([
                'clientid' => $loan['clientid'],
            ] + $values);
        }
        
        return Redirect(route('loans.process'));
    }
}
