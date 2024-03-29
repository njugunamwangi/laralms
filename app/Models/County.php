<?php

namespace App\Models;

use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class County extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded =[];

    public static function getForm(): array {
        return [
            TextInput::make('county')
                ->required()
                ->maxLength(255),
            TextInput::make('county_code')
                ->required()
                ->maxLength(255),
        ];
    }

    public function constituencies(): HasMany {
        return $this->hasMany(Constituency::class);
    }

    public function wards(): HasMany {
        return $this->hasMany(Ward::class);
    }
}
