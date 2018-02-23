<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Admin role and permissions
         */

        require_once 'role_permissions/admin_role.php';


        /**
         * Company role and permissions
         */
        require_once 'role_permissions/company_role.php.php';

    }
}
