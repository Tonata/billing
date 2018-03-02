<?php
/**
 * Created by PhpStorm.
 * User: martian
 * Date: 3/2/2018
 * Time: 11:20 PM
 */
use \Spatie\Permission\Models\Permission;

$manage_quotation_model_permission = new Permission();
$manage_quotation_model_permission->name = 'Manage Quotations';
$manage_quotation_model_permission->guard_name = 'web';
$manage_quotation_model_permission->save();

$view_quotation_model_permission = new Permission();
$view_quotation_model_permission->name = 'View Quotations';
$view_quotation_model_permission->guard_name = 'web';
$view_quotation_model_permission->save();

$create_quotation_model_permission = new Permission();
$create_quotation_model_permission->name = 'Create Quotations';
$create_quotation_model_permission->guard_name = 'web';
$create_quotation_model_permission->save();

$update_quotation_model_permission = new Permission();
$update_quotation_model_permission->name = 'Update Quotations';
$update_quotation_model_permission->guard_name = 'web';
$update_quotation_model_permission->save();

$delete_quotation_model_permission = new Permission();
$delete_quotation_model_permission->name = 'Delete Quotations';
$delete_quotation_model_permission->guard_name = 'web';
$delete_quotation_model_permission->save();