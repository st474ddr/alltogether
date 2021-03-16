<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $fillable = [
        'topic',
        'reservation_date',
        'reservation_time',
        'remark'
    ];

    public function users()
    {
        return $this->belongsTo('App\Model\User');
    }
}
