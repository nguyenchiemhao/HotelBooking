<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class RoomType extends Model
{
    //
    use SoftDeletes;
    protected $table = 'room_types';
    public $timestamp = true;
}
