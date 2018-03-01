<?php

use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $customer_1 = new Customer();
        $customer_1->name = "Dr Amelia South";
        $customer_1->email = "asouth@yahoo.com";
        $customer_1->contact_number = "+264615004343";
        $customer_1->postal_address = "P. O. Box 400 Oranjemund";
        $customer_1->physical_address = "23 ABC Street, Wonderland";
        $customer_1->save();

        $customer_2 = new Customer();
        $customer_2->name = "Tulonga Iyambo";
        $customer_2->email = "tulonga@gmail.com";
        $customer_2->contact_number = "+264615004343";
        $customer_2->postal_address = "P. O. Box 2842 Windhoek";
        $customer_2->physical_address = "11 Howard Street, Southland";
        $customer_2->save();

        $customer_3 = new Customer();
        $customer_3->name = "John Snow";
        $customer_3->email = "johnsnow@yahoo.com";
        $customer_3->contact_number = "+264615004343";
        $customer_3->postal_address = "P. O. Box 1847 Windhoek";
        $customer_3->physical_address = "1 ABC Street, Wonderland";
        $customer_3->save();
    }
}
