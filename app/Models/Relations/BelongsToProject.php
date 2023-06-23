<?php

namespace App\Models\Relations;

use App\Models\Project;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait BelongsToProject
{
    /**
     * @return BelongsTo
     */
    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }
}
