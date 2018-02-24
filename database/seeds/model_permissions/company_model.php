<?php
/**
 * Created by PhpStorm.
 * User: martian
 * Date: 2/24/2018
 * Time: 10:11 PM
 */
use \Spatie\Permission\Models\Permission;

$manage_company_permissions = new Permission();
$manage_company_permissions->name = 'Manage Companies';
$manage_company_permissions->guard_name  = 'web';
$manage_company_permissions->save();

$create_company_permissions = new Permission();
$create_company_permissions->name = 'Create Companies';
$create_company_permissions->guard_name  = 'web';
$create_company_permissions->save();

$view_company_permissions = new Permission();
$view_company_permissions->name = 'View Companies';
$view_company_permissions->guard_name  = 'web';
$view_company_permissions->save();

$update_company_permissions = new Permission();
$update_company_permissions->name = 'Update Companies';
$update_company_permissions->guard_name  = 'web';
$update_company_permissions->save();

$delete_company_permissions = new Permission();
$delete_company_permissions->name = 'Delete Companies';
$delete_company_permissions->guard_name  = 'web';
$delete_company_permissions->save();


