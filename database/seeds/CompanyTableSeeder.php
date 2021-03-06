<?php

use Illuminate\Database\Seeder;
use App\Models\Company;
use App\Models\License;
use Carbon\Carbon;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
//        $start_date = Carbon::create(2018,02,27);
        $end_date = Carbon::create(2018,05,27);
        $end_date1 = Carbon::create(2018,9,27);

        $company_1 = new Company();
        $company_1->name = 'Deloitte';
        $company_1->registration = '12345677456';
        $company_1->email = 'info@del.com';
        $company_1->bank_acc_no = '09876543A';
        $company_1->bank_acc_branch = 'kudu';
        $company_1->bank_acc_name = 'Bank Winhoek';
        $company_1->contact_number = '061 223 9900';
        $company_1->vat_number = '23456789WQA';
        $company_1->license_expiry = $end_date;
        $company_1->save();

        $company_2 = new Company();
        $company_2->name = 'Komeho Investments';
        $company_2->registration = '09876543';
        $company_2->email = 'info@komeho.com';
        $company_2->bank_acc_no = '123456789';
        $company_2->bank_acc_branch = 'Windhoek Main';
        $company_2->bank_acc_name = 'FNB';
        $company_2->contact_number = '061 223 9900';
        $company_2->vat_number = '123005TY';
        $company_2->license_expiry = $end_date1;
        $company_2->save();

        $found = Company::find(2);
        $found->users()->createMany([
            ["name" => "Thomas Edison", "email"=> "thomas@komeho.com", "password" => "pass"],
            ["name" => "Maria Angula","email"=> "maria@komeho.com", "password" => "pass"],
        ]);
//
//        $license = new License();
//        $license->start_date = $start_date;
//        $license->end_date =  $end_date;
//        $license->save();
//        $company_1->licenses()->save($license);
    }
}
