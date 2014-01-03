<?php namespace Controllers;

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
		$users = $this->user->paginate(10);

		return $this->view->make('users.index', compact('users'));
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

		$canEdit = $this->auth->user()->id == $id;

		return $this->view->make('users.show', compact('user', 'canEdit'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		if ($this->auth->user()->id !== $id)
		{
			$this->notify->success('You do not have permission to edit this account.')->flash();

			return $this->redirect->back();
		}

		$user = $this->user->findOrFail($id);
		
		return $this->view->make('users.edit', compact('user'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		if ($this->auth->user()->id !== $id)
		{
			$this->notify->success('You do not have permission to edit this account.')->flash();

			return $this->redirect->back();
		}

		$user = $this->user->findOrFail($id);
		$user->update($this->input->all());

		if ($user->hasErrors())
		{
			return $this->redirect->back()->withErrors($user->errors);
		}

		return $this->redirect->route('users.show', [$id]);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		if ($this->auth->user()->id !== $id)
		{
			$this->notify->success('You do not have permission to delete this account.')->flash();

			return $this->redirect->back();
		}

		$user = $this->user->findOrFail($id);
		$user->forceDelete();

		$this->notify->success('Your account has been deleted.')->flash();

		return $this->redirect->route('login');
	}

}