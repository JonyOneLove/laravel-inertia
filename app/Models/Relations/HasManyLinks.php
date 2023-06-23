<?php

namespace App\Models\Relations;

use App\Models\Contractor;
use App\Models\Link;
use App\Models\Project;
use Illuminate\Database\Eloquent\Relations\HasMany;

trait HasManyLinks
{
    /**
     * @return HasMany
     */
    public function links(): HasMany
    {
        return $this->hasMany(Link::class);
    }
}
