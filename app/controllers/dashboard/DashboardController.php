<?php namespace Controllers\Dashboard;

use Controllers\BaseController;

class DashboardController extends BaseController {

	public function getIndex()
	{
		return $this->view->make('dashboard.index');
	}

}