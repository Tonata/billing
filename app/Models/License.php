<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 22 Feb 2018 23:58:42 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class License
 * 
 * @property \Carbon\Carbon $startDate
 * @property \Carbon\Carbon $endDate
 * @property int $idCompany
 * @property int $id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\Company $company
 *
 * @package App\Models
 */
class License extends Eloquent
{
	protected $casts = [
		'idCompany' => 'int'
	];

	protected $dates = [
		'startDate',
		'endDate'
	];

	protected $fillable = [
		'startDate',
		'endDate',
		'idCompany'
	];

	public function company()
	{
		return $this->belongsTo(\App\Models\Company::class);
	}
}
