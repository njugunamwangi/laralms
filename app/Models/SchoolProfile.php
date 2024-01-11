<?php

namespace App\Models;

use App\Observers\SchoolProfileObserver;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SchoolProfile extends Model
{
    use HasFactory;

    protected $guarded =[];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function county(): BelongsTo {
        return $this->belongsTo(County::class);
    }

    public function constituency(): BelongsTo {
        return $this->belongsTo(Constituency::class);
    }

    public function ward(): BelongsTo {
        return $this->belongsTo(Ward::class);
    }

    public static function booted()
    {
        parent::booted();

        self::observe(SchoolProfileObserver::class);
    }
}
