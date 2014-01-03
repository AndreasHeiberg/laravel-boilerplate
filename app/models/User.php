<?php namespace Models;

use Andheiberg\Auth\Models\User as AuthUser;

class User extends AuthUser {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = array('email', 'password', 'first_name', 'last_name', 'profile_photo');

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');

	public function uploads()
	{
		return $this->morphMany('Models\Upload', 'uploadable');
	}

	public function getNameAttribute($value)
	{
		return "{$this->first_name} {$this->last_name}";
	}

	public function addProfilePhoto($file)
	{
		if ($file == null)
		{
			return false;
		}

		$previous = $this->profilePhoto;

		if ($previous)
		{
			$previous->delete();
		}

		$upload = Upload::add($file, 'profile-photo', "Profile photo of {$this->name}");
		$this->uploads()->save($upload);

		return true;
	}

	public function getProfilePhotoAttribute($value)
	{
		return $this->uploads()->where('tag', 'profile-photo')->first();
	}

	public function setProfilePhotoAttribute($value)
	{
		return $this->addProfilePhoto($value);
	}

}