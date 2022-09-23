<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\MemberController;

class Member extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'kana',
        'email',
        'password',
        'tel',
        'zip',
	    'prefecture',
		'address',
        'address2',
        'memo',
    ];
}
