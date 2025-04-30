<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'legal_concerns',
        'is_read',
        'type',
        'date',
        'additional_info',
    ];

    protected $casts = [
        'is_read' => 'boolean',
        'date' => 'datetime',
    ];

    public function scopeUnread($query)
    {
        return $query->where('is_read', false);
    }

    public function markAsRead()
    {
        $this->is_read = true;
        $this->save();
    }
}
