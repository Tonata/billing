<?php
/**
 * Created by PhpStorm.
 * User: martian
 * Date: 2/28/2018
 * Time: 11:59 PM
 */
use \Spatie\Permission\Models\Permission;

$manage_invoice_model_permission = new Permission();
$manage_invoice_model_permission->name = 'Manage Invoices';
$manage_invoice_model_permission->guard_name = 'web';
$manage_invoice_model_permission->save();

$view_invoice_model_permission = new Permission();
$view_invoice_model_permission->name = 'View Invoices';
$view_invoice_model_permission->guard_name = 'web';
$view_invoice_model_permission->save();

$create_invoice_model_permission = new Permission();
$create_invoice_model_permission->name = 'Create Invoices';
$create_invoice_model_permission->guard_name = 'web';
$create_invoice_model_permission->save();

$update_invoice_model_permission = new Permission();
$update_invoice_model_permission->name = 'Update Invoices';
$update_invoice_model_permission->guard_name = 'web';
$update_invoice_model_permission->save();

$delete_invoice_model_permission = new Permission();
$delete_invoice_model_permission->name = 'Delete Invoices';
$delete_invoice_model_permission->guard_name = 'web';
$delete_invoice_model_permission->save();