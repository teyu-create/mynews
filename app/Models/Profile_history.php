<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile_history extends Model
{
    use HasFactory;
    
    protected $table = 'profilehistories';

    protected $guarded = array('id');

    public static $rules = array(
        'profile_id' => 'required',
        'edited_at' => 'required',
    );
}
