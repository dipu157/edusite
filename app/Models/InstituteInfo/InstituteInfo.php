<?php

namespace App\Models\InstituteInfo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstituteInfo extends Model
{
    use HasFactory;

    protected $table= 'institute_infos';

    protected $guarded = ['id', 'created_at','updated_at'];

    protected $fillable = [
        'name',
        'logo',
        'email',
        'address',
        'city',
        'state',
        'post_code',
        'phone_no',
        'country',
        'website',
    ];
}
