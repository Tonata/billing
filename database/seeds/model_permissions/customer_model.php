<?php
/**
 * Created by PhpStorm.
 * User: martian
 * Date: 2/28/2018
 * Time: 11:58 PM
 */
use \Spatie\Permission\Models\Permission;

$manage_customer_model_permission = new Permission();
$manage_customer_model_permission->name = 'Manage Customers';
$manage_customer_model_permission->guard_name = 'web';
$manage_customer_model_permission->save();

$view_customer_model_permission = new Permission();
$view_customer_model_permission->name = 'View Customers';
$view_customer_model_permission->guard_name = 'web';
$view_customer_model_permission->save();

$create_customer_model_permission = new Permission();
$create_customer_model_permission->name = 'Create Customers';
$create_customer_model_permission->guard_name = 'web';
$create_customer_model_permission->save();

$update_customer_model_permission = new Permission();
$update_customer_model_permission->name = 'Update Customers';
$update_customer_model_permission->guard_name = 'web';
$update_customer_model_permission->save();

$delete_customer_model_permission = new Permission();
$delete_customer_model_permission->name = 'Delete Customers';
$delete_customer_model_permission->guard_name = 'web';
$delete_customer_model_permission->save();