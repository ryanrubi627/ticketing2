<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class client_page extends Model
{
    protected $table = 'posts';

    public $primaryKey = 'id';

    public $timestamps = true;
}
