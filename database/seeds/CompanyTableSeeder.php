<?php

use Illuminate\Database\Seeder;
use App\Models\Company;

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
        $company_1 = new Company();
        $company_1->name = 'Deloitte';
        $company_1->registration = '12345677456';
        $company_1->email = 'info@del.com';
        $company_1->bank_acc_no = '123456789';
        $company_1->bank_acc_branch = 'kudu';
        $company_1->bank_acc_name = 'Bank Winhoek';
        $company_1->contact_number = '061 223 9900';
        $company_1->vat_number = '23456789';
        $company_1->save();
    }
}
