<?php
/**
 * Created by PhpStorm.
 * User: martian
 * Date: 2/23/2018
 * Time: 3:48 AM
 */

use \Spatie\Permission\Models\Role;
use \Spatie\Permission\Models\Permission;


$company_role = new Role();
$company_role->name = 'Company';
$company_role->guard_name = 'web';
$company_role->save();

// Company Users
$company_role->givePermissionTo(Permission::where('name', 'Manage Users')->first());
$company_role->givePermissionTo(Permission::where('name', 'Create Users')->first());
$company_role->givePermissionTo(Permission::where('name', 'Delete Users')->first());
$company_role->givePermissionTo(Permission::where('name', 'View Users')->first());
$company_role->givePermissionTo(Permission::where('name', 'Update Users')->first());

// System Permissions
$company_role->givePermissionTo(Permission::where('name', 'Manage Permissions')->first());
$company_role->givePermissionTo(Permission::where('name', 'Create Permissions')->first());
$company_role->givePermissionTo(Permission::where('name', 'Delete Permissions')->first());
$company_role->givePermissionTo(Permission::where('name', 'View Permissions')->first());
$company_role->givePermissionTo(Permission::where('name', 'Update Permissions')->first());

// User Roles
$company_role->givePermissionTo(Permission::where('name', 'Manage Roles')->first());
$company_role->givePermissionTo(Permission::where('name', 'Create Roles')->first());
$company_role->givePermissionTo(Permission::where('name', 'Delete Roles')->first());
$company_role->givePermissionTo(Permission::where('name', 'View Roles')->first());
$company_role->givePermissionTo(Permission::where('name', 'Update Roles')->first());