<?php

namespace App\Models;

use App\Models\Relations\BelongsToContractor;
use App\Models\Relations\BelongsToPlatform;
use App\Models\Relations\BelongsToProject;
use App\Models\Relations\HasManyLinks;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends BaseModel
{
    use HasFactory, BelongsToPlatform, BelongsToContractor, BelongsToProject, HasManyLinks;
}
