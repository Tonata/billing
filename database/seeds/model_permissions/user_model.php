<?php
/**
 * Created by PhpStorm.
 * User: martian
 * Date: 2/23/2018
 * Time: 9:48 PM
 */
use \Spatie\Permission\Models\Permission;

$manage_user_model_permission = new Permission();
$manage_user_model_permission->name = 'Manage Users';
$manage_user_model_permission->guard_name = 'web';
$manage_user_model_permission->save();

$view_user_model_permission = new Permission();
$view_user_model_permission->name = 'View Users';
$view_user_model_permission->guard_name = 'web';
$view_user_model_permission->save();

$create_user_model_permission = new Permission();
$create_user_model_permission->name = 'Create Users';
$create_user_model_permission->guard_name = 'web';
$create_user_model_permission->save();

$update_user_model_permission = new Permission();
$update_user_model_permission->name = 'Update Users';
$update_user_model_permission->guard_name = 'web';
$update_user_model_permission->save();

$delete_user_model_permission = new Permission();
$delete_user_model_permission->name = 'Delete Users';
$delete_user_model_permission->guard_name = 'web';
$delete_user_model_permission->save();
