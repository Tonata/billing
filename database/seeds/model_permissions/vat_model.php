<?php
/**
 * Created by PhpStorm.
 * User: martian
 * Date: 2/28/2018
 * Time: 3:32 AM
 */
use \Spatie\Permission\Models\Permission;

$manage_vat_model_permission = new Permission();
$manage_vat_model_permission->name = 'Manage Vat';
$manage_vat_model_permission->guard_name = 'web';
$manage_vat_model_permission->save();

$view_vat_model_permission = new Permission();
$view_vat_model_permission->name = 'View Vat';
$view_vat_model_permission->guard_name = 'web';
$view_vat_model_permission->save();

$create_vat_model_permission = new Permission();
$create_vat_model_permission->name = 'Create Vat';
$create_vat_model_permission->guard_name = 'web';
$create_vat_model_permission->save();

$update_vat_model_permission = new Permission();
$update_vat_model_permission->name = 'Update Vat';
$update_vat_model_permission->guard_name = 'web';
$update_vat_model_permission->save();

$delete_vat_model_permission = new Permission();
$delete_vat_model_permission->name = 'Delete Vat';
$delete_vat_model_permission->guard_name = 'web';
$delete_vat_model_permission->save();
