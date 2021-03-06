<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends \Spatie\Permission\Models\Permission
{
    public static function defaultPermissions()
{
    return [
        'view_users',
        'add_users',
        'edit_users',
        'delete_users',

        'view_roles',
        'add_roles',
        'edit_roles',
        'delete_roles',

        'view_posts',
        'add_posts',
        'edit_posts',
        'delete_posts',

        'view_categories',
        'add_categories',
        'edit_categories',
        'delete_categories',

        'view_tags',
        'add_tags',
        'edit_tags',
        'delete_tags',
    ];
}
}
