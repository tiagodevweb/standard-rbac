<?php

namespace Tdw\Standard\RBAC;

interface User
{
    /**
     * @param Role|string $role
     * @return self
     */
    public function attachRole($role);

    /**
     * @param Role|string $role
     * @return self
     */
    public function detachRole($role);

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
