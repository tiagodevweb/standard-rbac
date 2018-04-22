<?php

namespace Tdw\Standard\RBAC;

interface User
{
    /**
     * @param Role|string $role
     * @return self
     */
    public function assignRole($role);

    /**
     * @param Permission|string $permission
     * @return self
     */
    public function assignPermission($permission);

    /**
     * @param Role|string $role
     * @return bool
     */
    public function hasRole($role);

    /**
     * @param Permission|string $permission
     * @return bool
     */
    public function hasPermission($permission);

    /**
     * @return Collection
     */
    public function roles();

    /**
     * @return Collection
     */
    public function permissions();
}
