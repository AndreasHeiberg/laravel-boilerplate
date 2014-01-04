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
		$showActive = $this->input->input('activated');

		if ($showActive == '1')
		{
			$users = $this->user->active()->paginate(10);
		}
		elseif ($showActive == '0')
		{
			$users = $this->user->deactivated()->paginate(10);
		}
		else
		{
			$users = $this->user->paginate(10);
		}

		return $this->view->make('admin.users.index', compact('users'));
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
		$user = $this->user->findOrFail($id);
		$user->update($this->input->all());

		if ($user->hasErrors())
		{
			return $this->redirect->back()->withErrors($user->errors);
		}

		return $this->redirect->route('admin.users.show', [$id]);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$user = $this->user->findOrFail($id);
		$user->forceDelete();

		$this->notify->success('The account has been deleted.')->flash();

		return $this->redirect->route('admin.users.index');
	}

	/**
	 * Deactivate user
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function deactivate($id)
	{
		$user = $this->user->findOrFail($id);

		if ( ! $user->deactivate())
		{
			$this->notify->success('The account could not be deactivated.')->flash();

			return $this->redirect->back();
		}

		$this->notify->success('The account has been deactivated.')->flash();

		return $this->redirect->route('admin.users.index');
	}

	/**
	 * Activate user
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function activate($id)
	{
		$user = $this->user->findOrFail($id);

		if ( ! $user->activate())
		{
			$this->notify->success('The account could not be activated.')->flash();

			return $this->redirect->back();
		}

		$this->notify->success('The account has been activated.')->flash();

		return $this->redirect->route('admin.users.index');
	}

}