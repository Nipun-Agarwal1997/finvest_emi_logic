<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\LoanDetails;

class LoanDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/json/loans_details.json");
        $data = collect(json_decode($json));

        $data->each(function($val) {
            LoanDetails::create([
                "clientid"              => $val->clientid,
                "num_of_payment"        => $val->num_of_payment,
                "first_payment_date"    => $val->first_payment_date,
                "last_payment_date"     => $val->last_payment_date,
                "loan_amount"           => $val->loan_amount
            ]);
        });
    }
}
