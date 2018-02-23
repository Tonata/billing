<?php
/**
 * Created by PhpStorm.
 * User: martian
 * Date: 2/23/2018
 * Time: 9:49 PM
 */

use \Spatie\Permission\Models\Permission;

$manage_role_model_permission = new Permission();
$manage_role_model_permission->name = 'Manage Roles';
$manage_role_model_permission->guard_name = 'web';
$manage_role_model_permission->save();

$view_role_model_permission = new Permission();
$view_role_model_permission->name = 'View Roles';
$view_role_model_permission->guard_name = 'web';
$view_role_model_permission->save();

$create_role_model_permission = new Permission();
$create_role_model_permission->name = 'Create Roles';
$create_role_model_permission->guard_name = 'web';
$create_role_model_permission->save();

$update_role_model_permission = new Permission();
$update_role_model_permission->name = 'Update Roles';
$update_role_model_permission->guard_name = 'web';
$update_role_model_permission->save();

$delete_role_model_permission = new Permission();
$delete_role_model_permission->name = 'Delete Roles';
$delete_role_model_permission->guard_name = 'web';
$delete_role_model_permission->save();
