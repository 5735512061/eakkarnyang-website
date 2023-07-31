<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
	protected $table = 'brands';

	protected $fillable = [
    	'brand', 'status'
    ];

    protected $primaryKey = 'id';
}
