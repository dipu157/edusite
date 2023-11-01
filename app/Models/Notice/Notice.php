<?php

namespace App\Models\Notice;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    use HasFactory;

    protected $table= 'notices';

    protected $guarded = ['id', 'created_at','updated_at'];

    protected $fillable = [
        'institute_id',
        'title',
        'attachment',
        'short_description',
        'description',
        'notice_date',
        'expiry_date',
        'type',
        'confidentiality',
        'receiver',
        'status',
        'user_id',
    ];
}
