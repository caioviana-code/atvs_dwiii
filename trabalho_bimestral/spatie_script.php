<?php

use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

$roleAdmin = Role::findOrCreate('admin');
$roleEditor = Role::findOrCreate('editor');
$roleRevisor = Role::findOrCreate('revisor');

$permissionViewNoticia = Permission::findOrCreate('viewNoticia');
$permissionCreateNoticia = Permission::findOrCreate('createNoticia');
$permissionUpdateNoticia = Permission::findOrCreate('updateNoticia');
$permissionDeleteNoticia = Permission::findOrCreate('deleteNoticia');

$permissionViewNoticia->assignRole($roleAdmin);
$permissionCreateNoticia->assignRole($roleAdmin);
$permissionUpdateNoticia->assignRole($roleAdmin);
$permissionDeleteNoticia->assignRole($roleAdmin);


$user = User::find(1);
$user->assignRole('admin');

$user = User::find(2);
$user->assignRole('editor');