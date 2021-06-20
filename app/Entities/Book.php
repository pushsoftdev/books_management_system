<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Book extends Entity
{
	protected $datamap = [
		'publishedOn' => 'published_on'
	];
	protected $dates   = [
		'created_at',
		'updated_at',
		'deleted_at',
	];
	protected $casts   = [];
}
