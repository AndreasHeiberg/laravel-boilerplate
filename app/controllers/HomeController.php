<?php

class HomeController extends BaseController {

	public function getIndex()
	{
		return View::make('home.index');
	}

	public function getOverview()
	{
		return View::make('home.overview');
	}

	public function getGettingStarted()
	{
		return View::make('home.getting-started');
	}

	public function getPricing()
	{
		return View::make('home.pricing');
	}

	public function getAbout()
	{
		return View::make('home.about');
	}

	public function getHelp()
	{
		return View::make('home.help');
	}

}