<?php

namespace App;

use App\Scopes\TenantGlobalScope;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use TenantGlobalScope;
    protected $fillable = ['name'];

    /*public function scopeByAccount(Builder $query, $accountId) {
        return $query->where('account_id', $accountId);   
    }*/
}
