<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 22 Feb 2018 23:58:41 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Earning
 * 
 * @property string $name
 * @property float $amount
 * @property int $idSalary
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property int $id
 * 
 * @property \App\Models\Salary $salary
 *
 * @package App\Models
 */
class Earning extends Eloquent
{
	protected $casts = [
		'amount' => 'float',
		'idSalary' => 'int'
	];

	protected $fillable = [
		'name',
		'amount',
		'idSalary'
	];

	public function salary()
	{
		return $this->belongsTo(\App\Models\Salary::class, 'idSalary');
	}
}
