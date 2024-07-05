<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class JobListing extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'salary'];

    public function employer(): BelongsTo
    {
        return $this->belongsTo(Employer::class);
    }
}
