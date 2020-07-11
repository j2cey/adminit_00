<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AppPermission extends Model
{
    public static $list = [
        'Permission' => [
            'select-all' => ['permission-select-all', 1],
        ],

        /**
         * Sécurity
         */

        // Role
        'AppRole' => [
            'list' => ['role-list', 4],
            'create' => ['role-create', 2],
            'edit' => ['role-edit', 2],
            'delete' => ['role-delete', 1],
            'change_statut' => ['role-change_statut', 2],
            'restore_trash' => ['role-restore_trash', 2],
            'delete_trash' => ['role-delete_trash', 2],
        ],
        // User
        'User' => [
            'list' => ['user-list', 4],
            'create' => ['user-create', 2],
            'edit' => ['user-edit', 2],
            'delete' => ['user-delete', 1],
            'change_statut' => ['user-change_statut', 2],
            'change_acceslocal' => ['user-change_acceslocal', 2],
            'change_accesldap' => ['user-change_accesldap', 2],
            'restore_trash' => ['user-restore_trash', 2],
            'delete_trash' => ['user-delete_trash', 2],
        ],
        // State
        'State' => [
            'list' => ['state-list', 4],
            'create' => ['state-create', 1],
            'edit' => ['state-edit', 1],
            'delete' => ['state-delete', 1],
            'restore_trash' => ['state-restore_trash', 1],
            'delete_trash' => ['state-delete_trash', 1],
        ],
        // Recycle Bin
        'RecycleBin' => [
            'list' => ['trash-list', 4],
            'create' => ['trash-create', 2],
            'edit' => ['trash-edit', 2],
            'delete' => ['trash-delete', 1],
            'restore' => ['trash-restore', 2],
        ],
        /**
         * Settings
         */
        'Setting' => [
            'list' => ['setting-list', 1],
        ],

    ];
}
