<?php

namespace App\Models;

use CodeIgniter\Model;

class BookModel extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'books';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'App\Entities\Book';
	protected $useSoftDeletes       = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['name', 'rating', 'published_on'];

	public function getAllBooks()
	{
		return $this->findAll();
	}
}
