<?php

namespace App\Models\Notice;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    use HasFactory;

    protected $table= 'messages';

    protected $guarded = ['id', 'created_at','updated_at'];

    protected $fillable = [
        'name',
        'photo',
        'position',
        'message',
        'status',
        'user_id',
    ];
}
