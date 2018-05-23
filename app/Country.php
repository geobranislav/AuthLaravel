<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $tables='countries';

    protected $fillable = [
        'capital','name',
    ];
}
