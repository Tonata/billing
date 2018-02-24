<?php

use Illuminate\Database\Seeder;
use \Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Admin roles and permissions
         */
        $admin_permission = new Permission();
        $admin_permission->name = 'Administer roles & permissions';
        $admin_permission->guard_name = 'web';
        $admin_permission->save();

//        $company_permission = new Permission();
//        $company_permission->name = 'Manage Users';
//        $company_permission->guard_name = 'web';
//        $company_permission->save();


        /**
         * permission permissions
         */
        require_once 'model_permissions/permission_model.php';

        /**
         * role model permission
         */

        require_once 'model_permissions/role_model.php';

        /**
         * user permissions
         */

        require_once 'model_permissions/user_model.php';

        /**
         * company permissions
         */

        require_once 'model_permissions/company_model.php';
    }
}
