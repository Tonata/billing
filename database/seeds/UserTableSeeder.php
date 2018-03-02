<?php

use Illuminate\Database\Seeder;
use App\User;
use \Spatie\Permission\Models\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $admin= new User();
        $admin->name = "Administrator";
        $admin->email = "admin@admin.com";
        $admin->password = "pass";
        $admin->remember_token = str_random(10);
        $admin->save();
        $admin->assignRole(Role::where('name', 'Admin')->first());

        $company = new User();
        $company->name = "Komeho Investments";
        $company->email = "info@komeho.com";
        $company->password = "pass";
        $company->remember_token = str_random(10);
        $company->save();
//        $admin->creator()->save($company);
        $company->assignRole(Role::where('name', 'Company')->first());



    }
}
