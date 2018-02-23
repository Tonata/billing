<?php

use Illuminate\Database\Seeder;
use \Spatie\Permission\Models\Role;
use \Spatie\Permission\Models\Permission;

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
        require_once 'role_permissions/company_role.php';

    }
}
