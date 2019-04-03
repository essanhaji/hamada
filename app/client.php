<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    protected $client = ['first_name', 'last_name', 'phone', 'email'];
}
