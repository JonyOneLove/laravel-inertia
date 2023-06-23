<?php

namespace App\Models\Relations;

use App\Models\Link;
use App\Models\Order;
use Illuminate\Database\Eloquent\Relations\HasMany;

trait HasManyOrders
{
    /**
     * @return HasMany
     */
    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }
}
