<?php

namespace App\Models\Relations;

use App\Models\Order;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait BelongsToOrder
{
    /**
     * @return BelongsTo
     */
    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }
}
