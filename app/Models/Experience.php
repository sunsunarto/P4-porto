<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $fillables = [
        'company', 'position', 'location', 'description', 'start_date', 'end_date', 'is_current', 'company_logo'
    ];

    protected function casts(): array
    {
        return [
            'start_date' => 'date',
            'end_date' => 'date',
            'is_current' => 'boolean'
        ];
    }
}
