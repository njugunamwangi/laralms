<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Role as ModelsRole;

class Role extends ModelsRole
{
    use HasFactory;

    const ADMIN = 1;
    const SCHOOL = 2;
    const TUTOR = 3;
    const STUDENT = 4;

}
