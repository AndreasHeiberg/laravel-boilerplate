<?php namespace Controllers\Api;

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
		return $this->user->paginate(10);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return $this->user->findOrFail($id);
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
			return Response::json(['error' => 'You do not have permission to edit this account.'], 403);
		}
		
		$user = $this->user->findOrFail($id);
		$user->update($this->input->all());

		if ($user->hasErrors())
		{
			return Response::json($user->errors, 400);
		}

		return $user;
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
			return Response::json(['error' => 'You do not have permission to delete this account.'], 403);
		}

		$user = $this->user->findOrFail($id);
		$user->forceDelete();

		return Response::json(['success' => 'Your account has been deleted.'])
	}

}