<?php namespace Controllers;

class HomeController extends BaseController {

	public function getIndex()
	{
		return $this->view->make('home.index');
	}

	public function getOverview()
	{
		return $this->view->make('home.overview');
	}

	public function getGettingStarted()
	{
		return $this->view->make('home.getting-started');
	}

	public function getPricing()
	{
		return $this->view->make('home.pricing');
	}

	public function getAbout()
	{
		return $this->view->make('home.about');
	}

	public function getHelp()
	{
		return $this->view->make('home.help');
	}

}