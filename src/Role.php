<?php

namespace Tdw\Standard\RBAC;

interface Role
{
    /**
     * @param User|string $user
     * @return self
     */
    public function assignUser($user);

    /**
     * @param Permission|string $permission
     * @return self
     */
    public function assignPermission($permission);

    /**
     * @param User|string $user
     * @return bool
     */
    public function hasUser($user);

    /**
     * @param Permission|string $permission
     * @return bool
     */
    public function hasPermission($permission);

    /**
     * @return Collection
     */
    public function users();

    /**
     * @return Collection
     */
    public function permissions();
}
