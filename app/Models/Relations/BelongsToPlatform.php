<?php

namespace App\Models\Relations;

use App\Models\Platform;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait BelongsToPlatform
{
    /**
     * @return BelongsTo
     */
    public function platform(): BelongsTo
    {
        return $this->belongsTo(Platform::class);
    }

}
