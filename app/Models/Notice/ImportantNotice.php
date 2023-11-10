<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImportantNotice extends Model
{
    use HasFactory;

    protected $table= 'important_notices';

    protected $guarded = ['id', 'created_at','updated_at'];

    protected $fillable = [
        'title',
        'description',
        'status',
        'user_id',
    ];
}
