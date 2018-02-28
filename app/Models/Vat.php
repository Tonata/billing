<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 22 Feb 2018 23:58:42 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Vat
 * 
 * @property string $name
 * @property float $percentage
 * @property int $idCompany
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property int $id
 * 
 * @property \App\Models\Company $company
 *
 * @package App\Models
 */
class Vat extends Eloquent
{
//	protected $table = 'vat';
//
//	protected $casts = [
//		'percentage' => 'float'
//	];

	protected $fillable = [
		'name',
		'percentage'
	];

//	public function company()
//	{
//		return $this->belongsTo(\App\Models\Company::class);
//	}
}
