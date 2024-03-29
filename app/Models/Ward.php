<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ward extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded =[];

    public function constituency(): BelongsTo {
        return $this->belongsTo(Constituency::class);
    }

    public function county(): BelongsTo {
        return $this->belongsTo(County::class);
    }
}
