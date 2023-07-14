<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Contact extends Model
{
    use HasFactory;
    protected $table='contacts';

    protected $fillable=[
        'name',
        'mobile',
        'email',
        'group'

    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
