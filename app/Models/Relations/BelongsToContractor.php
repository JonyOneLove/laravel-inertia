<?php

namespace App\Models\Relations;

use App\Models\Contractor;
use App\Models\Project;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait BelongsToContractor
{
    /**
     * @return BelongsTo
     */
    public function contractor(): BelongsTo
    {
        return $this->belongsTo(Contractor::class);
    }
}
