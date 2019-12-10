<?php

namespace Akoval777\RequestToTs\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RequestToTs extends Model
{
    use SoftDeletes;

    protected $table = 'request_to_ts';
    protected $fillable = ['text'];
}