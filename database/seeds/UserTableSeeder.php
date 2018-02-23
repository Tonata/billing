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
        $admin->email = "tonata93@gmail.com";
        $admin->password = "password";
        $admin->remember_token = str_random(10);
        $admin->save();
        $admin->assignRole(Role::where('name', 'Admin')->first());

        $company = new User();
        $company->name = "Company A";
        $company->email = "company@company.com";
        $company->password = "company";
        $company->remember_token = str_random(10);
        $company->save();
        $admin->creator()->save($company);
        $company->assignRole(Role::where('name', 'Company')->first());

    }
}
