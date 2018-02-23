<?php
/**
 * Created by PhpStorm.
 * User: martian
 * Date: 2/23/2018
 * Time: 3:48 AM
 */

use \Spatie\Permission\Models\Role;
use \Spatie\Permission\Models\Permission;

$client_role = new Role();
$client_role->name = 'Company';
$client_role->guard_name = 'web';
$client_role->save();