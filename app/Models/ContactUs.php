<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'message',
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
