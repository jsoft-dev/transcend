<?php

use Illuminate\Database\Eloquent\Model;

class Connection extends Model
{
    protected $fillable = [
        'label',
        'api_key',
        'customer_id',
    ];
}
