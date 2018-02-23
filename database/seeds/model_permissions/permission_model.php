<?php
/**
 * Created by PhpStorm.
 * User: martian
 * Date: 2/23/2018
 * Time: 9:51 PM
 */
use \Spatie\Permission\Models\Permission;

$manage_permission_model_permission = new Permission();
$manage_permission_model_permission->name = 'Manage Permissions';
$manage_permission_model_permission->guard_name = 'web';
$manage_permission_model_permission->save();

$view_permission_model_permission = new Permission();
$view_permission_model_permission->name = 'View Permissions';
$view_permission_model_permission->guard_name = 'web';
$view_permission_model_permission->save();

$create_permission_model_permission = new Permission();
$create_permission_model_permission->name = 'Create Permissions';
$create_permission_model_permission->guard_name = 'web';
$create_permission_model_permission->save();

$update_permission_model_permission = new Permission();
$update_permission_model_permission->name = 'Update Permissions';
$update_permission_model_permission->guard_name = 'web';
$update_permission_model_permission->save();

$delete_permission_model_permission = new Permission();
$delete_permission_model_permission->name = 'Delete Permissions';
$delete_permission_model_permission->guard_name = 'web';
$delete_permission_model_permission->save();