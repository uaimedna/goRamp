<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

class Orders extends Model
{
    use SoftDeletes;

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('company', function (Builder $builder) {
            $builder->join('users', 'users.id', '=', 'orders.user_id')
                    ->join('company', 'company.id', '=', 'users.company_id')
                    ->where('company.id', Auth::user()->company->id)
                    ->select('orders.name as name');
        });
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
