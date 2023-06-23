<?php

namespace App\Models;

use App\Models\Relations\BelongsToContractor;
use App\Models\Relations\BelongsToOrder;
use App\Models\Relations\BelongsToProject;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends BaseModel
{
    use HasFactory, BelongsToOrder, BelongsToProject, BelongsToContractor;
}
