<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 22 Feb 2018 23:58:41 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Deduction
 * 
 * @property string $name
 * @property float $amount
 * @property int $idSalary
 * @property int $id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\Salary $salary
 *
 * @package App\Models
 */
class Deduction extends Eloquent
{
	public $incrementing = false;

	protected $casts = [
		'amount' => 'float',
		'idSalary' => 'int',
		'id' => 'int'
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
