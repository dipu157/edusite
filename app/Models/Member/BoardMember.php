<?php

namespace App\Models\Member;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BoardMember extends Model
{
    use HasFactory;

    protected $table= 'board_members';

    protected $guarded = ['id', 'created_at','updated_at'];

    protected $fillable = [
        'full_name',
        'position',
        'photo',
        'email',
        'mobile',
        'dob',
        'gender',
        'blood_group',
        'naional_id',
        'status',
        'user_id',
    ];
}
