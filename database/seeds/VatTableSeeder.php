<?php

use Illuminate\Database\Seeder;
use App\Models\Vat;

class VatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $vat = new Vat();
        $vat->name = "Test 1";
        $vat->percentage = 13.5;
        $vat->save();

        $vat_1 = new Vat();
        $vat_1->name = "Test 2";
        $vat_1->percentage = 20.3;
        $vat_1->save();
    }
}
