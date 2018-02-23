<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 22 Feb 2018 23:58:41 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Document
 * 
 * @property int $id
 * @property string $description
 * @property string $url
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $companies
 *
 * @package App\Models
 */
class Document extends Eloquent
{
	protected $fillable = [
		'description',
		'url'
	];

	public function companies()
	{
		return $this->hasMany(\App\Models\Company::class, 'idDocument');
	}
}
