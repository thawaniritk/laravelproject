<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
	protected $table = "images";
    protected $fillable = ["image", "created_at", "updated_at"];
}
