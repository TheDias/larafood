<?php

namespace App\Tenant;

use App\Models\Tenant;

class ManagerTenant
{
  public function getTenantIdentify()
  {
    return auth()->check() ? auth()->user()->tenant_id : '';
  }

  Public function getTenant()
  {
    return auth()->check() ? auth()->user()->tenant : '';
  }

  public function isAdmin(): bool
  {
    return in_array(auth()->user->email, config('tenant.admins'));
  }
}
