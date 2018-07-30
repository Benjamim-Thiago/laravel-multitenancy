<?php
namespace App\Scopes;

use Illuminate\Database\Eloquent\Model;

trait TenantModels {
    protected static function boot() {
        parent::boot();
        static::addGlobalScope(new TenantScope());

        parent::creating(function(Model $model) {
            $accountId = \Auth::user()->account_id;
            $model->account_id =  $accountId;
        });
    }
}