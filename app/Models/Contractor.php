<?php

namespace App\Models;

use App\Models\Relations\BelongsToPlatform;
use App\Models\Relations\HasManyOrders;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contractor extends BaseModel
{
    use HasFactory, BelongsToPlatform, HasManyOrders;

    protected $appends=['orders_sum'];

    public function getOrdersSumAttribute()
    {
        return $this->orders()->sum('price');
    }
}
