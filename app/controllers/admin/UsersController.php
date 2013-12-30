<?php namespace Controllers\Admin;

use Controllers\BaseController;
use Models\User;

class UsersController extends BaseController {

	/**
	 * The user instance.
	 *
	 * @var Models\User
	 */
	protected $user;

	/**
	 * Create a BaseController instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();

		$this->user = new User;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = $this->user->paginate(20);

		return $this->view->make('admin.users.index', compact('users'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$user = $this->user->findOrFail($id);

		return $this->view->make('admin.users.show', compact('user'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = $this->user->findOrFail($id);
		
		return $this->view->make('admin.users.edit', compact('user'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		if ( ! $this->user->delete($id))
		{
			$this->notify->success('The account could not be deleted.')->flash();

			return $this->redirect->back();
		}

		$this->notify->success('The account has been deleted.')->flash();

		return $this->redirect->route('login');
	}

}