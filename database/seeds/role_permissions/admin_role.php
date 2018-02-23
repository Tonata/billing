<?php
/**
 * Created by PhpStorm.
 * User: martian
 * Date: 2/23/2018
 * Time: 3:48 AM
 */
use \Spatie\Permission\Models\Role;
use \Spatie\Permission\Models\Permission;

$admin_role = new Role();
$admin_role->name = 'Admin';
$admin_role->guard_name = 'web';
$admin_role->save();
$admin_role->givePermissionTo(Permission::where('name', 'Administer roles & permissions')->first());

