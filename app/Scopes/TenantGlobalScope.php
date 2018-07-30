<?php
namespace App\Scopes;

trait TenantGlobalScope {
    protected static function boot() {
        parent::boot();
        static::addGlobalScope(new TenantScope());
    }
}