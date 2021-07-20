<?php

namespace App;
use App\User;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sns extends Model
{
    use SoftDeletes;

    protected $table = 'posts';
    protected $guarded = array('id');

    public static $rules = array(
        'body' => 'required',
    );
}

