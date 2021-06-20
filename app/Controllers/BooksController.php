<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourcePresenter;
use App\Entities\Book;

class BooksController extends ResourcePresenter
{
	protected $modelName = "App\Models\BookModel";

	/**
	 * Present a view of resource objects
	 *
	 * @return mixed
	 */
	public function index()
	{
		$books = $this->model->getAllBooks();
		$box['books'] = $books;

		return view('books/books', $box);
	}

	/**
	 * Present a view to present a specific resource object
	 *
	 * @param mixed $id
	 *
	 * @return mixed
	 */
	public function show($id = null)
	{
		//
	}

	/**
	 * Present a view to present a new single resource object
	 *
	 * @return mixed
	 */
	public function new()
	{
		return view('books/add_book');
	}

	/**
	 * Process the creation/insertion of a new resource object.
	 * This should be a POST.
	 *
	 * @return mixed
	 */
	public function create()
	{
		$name = $this->request->getPost('txtName');
		$rating = $this->request->getPost('txtRating');
		$publishedOn = $this->request->getPost('txtPublishedOn');

		$book = new Book();
		$book->name = $name;
		$book->rating = $rating;
		$book->publishedOn = $publishedOn;

		$this->model->save($book);

		return redirect()->to('/books');
	}

	/**
	 * Present a view to edit the properties of a specific resource object
	 *
	 * @param mixed $id
	 *
	 * @return mixed
	 */
	public function edit($id = null)
	{
		//
	}

	/**
	 * Process the updating, full or partial, of a specific resource object.
	 * This should be a POST.
	 *
	 * @param mixed $id
	 *
	 * @return mixed
	 */
	public function update($id = null)
	{
		//
	}

	/**
	 * Present a view to confirm the deletion of a specific resource object
	 *
	 * @param mixed $id
	 *
	 * @return mixed
	 */
	public function remove($id = null)
	{
		//
	}

	/**
	 * Process the deletion of a specific resource object
	 *
	 * @param mixed $id
	 *
	 * @return mixed
	 */
	public function delete($id = null)
	{
		//
	}
}
