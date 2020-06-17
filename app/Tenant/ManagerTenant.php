<?php

namespace App\Tenant;

use App\Models\Tenant;

class ManagerTenant
{
  public function getTenantIdentify(): int
  {
    return auth()->user()->tenant_id;
  }

  Public function getTenant(): Tenant
  {
    return auth()->user()->tenant;
  }

  public function isAdmin(): bool
  {
    return in_array(auth()->user->email, config('tenant.admins'));
  }
}
