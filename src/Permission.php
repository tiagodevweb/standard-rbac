<?php

namespace Tdw\Standard\RBAC;

interface Permission
{
    /**
     * @param Role|string $role
     * @return self
     */
    public function assignRole($role);

    /**
     * @param User|string $user
     * @return self
     */
    public function assignUser($user);

    /**
     * @param Role|string $role
     * @return bool
     */
    public function hasRole($role);

    /**
     * @param User|string $user
     * @return bool
     */
    public function hasUser($user);

    /**
     * @return Collection
     */
    public function users();

    /**
     * @return Collection
     */
    public function roles();
}
