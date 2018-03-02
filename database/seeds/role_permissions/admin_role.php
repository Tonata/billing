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

// System Users
//$admin_role->givePermissionTo(Permission::where('name', 'Manage Users')->first());
//$admin_role->givePermissionTo(Permission::where('name', 'Create Users')->first());
//$admin_role->givePermissionTo(Permission::where('name', 'Delete Users')->first());
//$admin_role->givePermissionTo(Permission::where('name', 'View Users')->first());
//$admin_role->givePermissionTo(Permission::where('name', 'Update Users')->first());

// System Permissions
$admin_role->givePermissionTo(Permission::where('name', 'Manage Permissions')->first());
$admin_role->givePermissionTo(Permission::where('name', 'Create Permissions')->first());
$admin_role->givePermissionTo(Permission::where('name', 'Delete Permissions')->first());
$admin_role->givePermissionTo(Permission::where('name', 'View Permissions')->first());
$admin_role->givePermissionTo(Permission::where('name', 'Update Permissions')->first());

// User Roles
$admin_role->givePermissionTo(Permission::where('name', 'Manage Roles')->first());
$admin_role->givePermissionTo(Permission::where('name', 'Create Roles')->first());
$admin_role->givePermissionTo(Permission::where('name', 'Delete Roles')->first());
$admin_role->givePermissionTo(Permission::where('name', 'View Roles')->first());
$admin_role->givePermissionTo(Permission::where('name', 'Update Roles')->first());

// Companies
$admin_role->givePermissionTo(Permission::where('name', 'Manage Companies')->first());
$admin_role->givePermissionTo(Permission::where('name', 'Create Companies')->first());
$admin_role->givePermissionTo(Permission::where('name', 'Delete Companies')->first());
$admin_role->givePermissionTo(Permission::where('name', 'View Companies')->first());
$admin_role->givePermissionTo(Permission::where('name', 'Update Companies')->first());

// Vat
$admin_role->givePermissionTo(Permission::where('name', 'Manage Vat')->first());
$admin_role->givePermissionTo(Permission::where('name', 'Create Vat')->first());
$admin_role->givePermissionTo(Permission::where('name', 'Delete Vat')->first());
$admin_role->givePermissionTo(Permission::where('name', 'View Vat')->first());
$admin_role->givePermissionTo(Permission::where('name', 'Update Vat')->first());



