<?php namespace Models;

use \CURL;
use \File;
use \Image;
use Symfony\Component\HttpFoundation\File\File as SymfonyFile;

class Upload extends BaseModel {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'uploads';

	/**
	 * The attributes that can be set with Mass Assignment.
	 *
	 * @var array
	 */
	protected $fillable = ['tag', 'bucket', 'key', 'description'];

	public function uploadable()
	{
		return $this->morphTo();
	}

	/**
	 * Save a new model and return the instance.
	 *
	 * @param  array  $attributes
	 * @return \Illuminate\Database\Eloquent\Model|static
	 */
	public static function add($file, $tag = null, $description = null, $bucket = null)
	{
		$instance = new static(compact('tag', 'description'));

		$instance->upload($file, $bucket);

		$instance->save();

		return $instance;
	}

	public function upload($file, $bucket = null)
	{
		$bucket = $bucket ?: 'local'; // $this->config->get('uploader::default_provider');
		
		if (is_string($file))
		{
			$file = CURL::get($file);

			$extension = substr(strrchr($file->info['url'],'.'),1);
			$name = str_random(16).".{$extension}";
			$mime = $file->info['content_type'];

			$destination = storage_path()."/tmp";

			$file = File::put($destination.'/'.$name, $file);
			$file = new SymfonyFile($destination.'/'.$name);
		}

		if ($bucket == 'local')
		{
			$destination = '/uploads/'.str_random(16); // $this->config->get('uploader::local.destination');
			$name = method_exists($file, 'getClientOriginalName') ? $file->getClientOriginalName() : $file->getFilename();

			$file->move(public_path().$destination, $name);

			$this->bucket = 'local';
			$this->key = $destination.'/'.$name;
		}
	}

	/**
	 * Delete the model from the database.
	 *
	 * @return bool|null
	 */
	public function delete()
	{
		if ($this->bucket == 'local')
		{
			File::delete(public_path().'/'.$this->key);
		}

		return parent::delete();
	}

	/**
	 * Get a link to the file
	 *
	 * @param  string $expiration
	 * @return string
	 */
	public function link($size = null, $expiration = '+60 minutes') {
		if ($this->bucket == 'local')
		{
			$link = $this->key;
		}

		if ($size)
		{
			if ($size == 'micro' and $this->tag == 'profile-photo')
			{
				$size = ['width' => 30, 'height' => 30];
			}
			elseif ($size == 'small' and $this->tag == 'profile-photo')
			{
				$size = ['width' => 100, 'height' => 100];
			}
			elseif ($size == 'medium' and $this->tag == 'profile-photo')
			{
				$size = ['width' => 150, 'height' => 150];
			}
			elseif ($size == 'large' and $this->tag == 'profile-photo')
			{
				$size = ['width' => 350, 'height' => 350];
			}

			$method = isset($size['method']) ? $size['method'] : 'resizeCrop';

			$link = Image::path($link, $method, $size['width'], $size['height']);
		}

		return $link;
	}

}