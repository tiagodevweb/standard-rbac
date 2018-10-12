<?php

namespace Tdw\Standard\RBAC;

interface Role
{
    /**
     * @param Permission|string $permission
     * @return self
     */
    public function assignPermission($permission);

    /**
     * @param Permission[]|string[] $permissions
     * @return self
     */
    public function assignPermissions(array $permissions);

    /**
     * @param Permission|string $permission
     * @return self
     */
    public function revokePermission($permission);

    /**
     * @param Permission[]|string[] $permissions
     * @return self
     */
    public function revokePermissions(array $permissions);

    /**
     * @param Permission[]|string[] $permissions
     * @return self
     */
    public function syncPermissions(array $permissions);

    /**
     * @param Permission|string $permission
     * @return bool
     */
    public function hasPermission($permission);

    /**
     * @return mixed
     */
    public function permissions();
}
