<?php namespace Controllers;

use \Controller;
use \App;
use \View;
use \Redirect;
use \Input;
use \Notify;
use \Auth;

class BaseController extends Controller {

	/**
	 * The view instance.
	 *
	 * @var Illuminate\View\Environment
	 */
	protected $view;

	/**
	 * The redirect instance.
	 *
	 * @var Illuminate\Routing\Redirector
	 */
	protected $redirect;

	/**
	 * The input instance.
	 *
	 * @var Illuminate\Http\Request
	 */
	protected $input;

	/**
	 * The notify instance.
	 *
	 * @var Prologue\Alerts\AlertsMessageBag
	 */
	protected $notify;

	/**
	 * The auth instance.
	 *
	 * @var Andheiberg\Auth\Auth
	 */
	protected $auth;

	/**
	 * Create a BaseController instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->view = App::make('view');
		$this->redirect = App::make('redirect');
		$this->input = App::make('request');
		$this->notify = App::make('alerts');
		$this->auth = App::make('auth');
	}

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = $this->view->make($this->layout);
		}
	}

}