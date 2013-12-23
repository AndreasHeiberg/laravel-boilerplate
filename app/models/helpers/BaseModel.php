<?php namespace Models;

use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Validation\Validator;
use \App;
use \Mockery;
use Illuminate\Support\MessageBag;

class BaseModel extends Eloquent {

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var Illuminate\Support\MessageBag
	 */
	public $errors;

	/**
	 * Validation rules.
	 *
	 * @var array
	 */
	protected $rules = [];

	/**
	 * Validator instance
	 * 
	 * @var Illuminate\Validation\Validators
	 */
	protected $validator;

	public function __construct(array $attributes = array(), Validator $validator = null)
	{
		parent::__construct($attributes);

		$this->validator = $validator ?: App::make('validator');
	}

	/**
	 * Listen for save event
	 */
	protected static function boot()
	{
		parent::boot();

		static::saving(function($model)
		{
			return $model->validate();
		});
	}

	/**
	 * Validates current attributes against rules
	 */
	public function validate()
	{
		$v = $this->validator->make($this->attributes, $this->rules);

		if ($v->passes())
		{
			return true;
		}

		$this->errors = $v->messages();

		return false;
	}

	public static function shouldReceive()
	{
		$calledClassParts = explode('\\', get_called_class());
		$calledClass = end($calledClassParts);

		$repo = 'Repositories\\' . $calledClass . 'RepositoryInterface';
		$mock = Mockery::mock($repo);
		
		App::instance($repo, $mock);

		return call_user_func_array([$mock, 'shouldReceive'], func_get_args());
	}

}