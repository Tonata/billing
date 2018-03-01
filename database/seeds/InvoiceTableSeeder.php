<?php

use Illuminate\Database\Seeder;
use App\Models\Invoice;
use App\Models\InvoiceItem;
use App\Models\Company;
use App\Models\Customer;
use Carbon\Carbon;

class InvoiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $date = Carbon::create(2018,05,27);
        $end_date = Carbon::create(2018,05,27);

//        $invitem_1 = new InvoiceItem();
//        $invitem_1->description = "test items";
//        $invitem_1->unit_price  = 30.00;
//        $invitem_1->qty = 3;
//        $invitem_1->vat_amount = 92.20;
//        $invitem_1->vat = 2.20;
//        $invitem_1->amount_excl_vat = 90.00;
//        $invitem_1->save();

        $inv_1 = new Invoice();
        $inv_1->invoice_date = $date;
        $inv_1->total_amount = 289.40;
        $inv_1->total_vat = 4.40;
        $inv_1->total_amount_excl_vat = 285.00;
        $company = Company::find(1);
        $customer = Customer::find(2);
        $inv_1->company()->associate($company);
        $inv_1->customer()->associate($customer);
        $inv_1->save();

        $found = Invoice::find(1);
        $found->invoice_items()->createMany(
           [
               [
                   'description' => 'test items',
                   'unit_price' => 30.00,
                   'qty' => 3,
                   'vat_amount' => 92.20,
                   'vat' => 2.20,
                   'amount_excl_vat' => 90.00,
               ],
               [
                   'description' => 'more items',
                   'unit_price' => 65.00,
                   'qty' => 3,
                   'vat_amount' => 197.20,
                   'vat' => 2.20,
                   'amount_excl_vat' => 195.00,
               ],
           ]
        );


//        $company_1 = new Company();
//        $company_1->name = 'Tonata Holdings';
//        $company_1->registration = '12345677456';
//        $company_1->email = 'info@tonata.com';
//        $company_1->bank_acc_no = '09876543A';
//        $company_1->bank_acc_branch = 'kudu';
//        $company_1->bank_acc_name = 'Bank Winhoek';
//        $company_1->contact_number = '061 223 9900';
//        $company_1->vat_number = '23456789WQA';
//        $company_1->license_expiry = $end_date;
//        $company_1->invoices()->associate($inv_1);
//        $company_1->save();
//
//
//        $customer_2 = new Customer();
//        $customer_2->name = "Maxwell Iyambo";
//        $customer_2->email = "max@gmail.com";
//        $customer_2->contact_number = "+264615004343";
//        $customer_2->postal_address = "P. O. Box 2842 Windhoek";
//        $customer_2->physical_address = "30 Smith Street, Dorado Park";
//        $customer_2->invoices()->associate($inv_1);
//        $customer_2->save();



//        $invitem_2 = new InvoiceItem();
//        $invitem_2->description = "more items";
//        $invitem_2->unit_price  = 65.00;
//        $invitem_2->qty = 3;
//        $invitem_2->vat_amount = 197.20;
//        $invitem_2->vat = 2.20;
//        $invitem_2->amount_excl_vat = 195.00;
//        $invitem_2->save();

//        $inv_1 = new Invoice();
//        $inv_1->invoice_date = $date;
//        $inv_1->total_amount = 289.40;
//        $inv_1->total_vat = 4.40;
//        $inv_1->total_amount_excl_vat = 285.00;
//        $inv_1->save();
//        $inv_1->company()->save($company_1);
//        $inv_1->customer()->save($customer_2);
//        $inv_1->invoice_items()->save($invitem_2);
//        $inv_1->invoice_items()->save($invitem_1);


//        factory(App\Models\Invoice::class, 2)->create->each(function ($inv){
//            $inv->invoice_items()->save((App\Models\InvoiceItem::class)->make());
//            $inv->invoice_items()->save((App\Models\InvoiceItem::class)->make());
//        });

    }
}
