<?php

namespace Tdw\Standard\RBAC;

interface Permission
{
    /**
     * @param Role|string $role
     * @return bool
     */
    public function hasRole($role);

    /**
     * @return mixed
     */
    public function roles();
}
