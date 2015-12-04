<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
        protected $fillable = ['title', 'description', 'copyright', 'keywords', 'site_url', 'email', 'created_at', 'update_at'];
}
