<?php

namespace App\Models\Member;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teachers extends Model
{
    use HasFactory;

    protected $table= 'teachers';

    protected $guarded = ['id', 'created_at','updated_at'];

    protected $fillable = [
        'institute_id',
        'full_name',
        'position',
        'class_department',
        'photo',
        'email',
        'mobile',
        'dob',
        'joining_date',
        'gender',
        'blood_group',
        'naional_id',
        'status',
        'user_id',
    ];
}
