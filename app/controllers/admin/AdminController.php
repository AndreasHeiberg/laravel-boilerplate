<?php namespace Controllers\Admin;

use Controllers\BaseController;

class AdminController extends BaseController {

	public function getIndex()
	{
		return $this->view->make('admin.index');
	}

}