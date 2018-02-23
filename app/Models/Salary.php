<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 22 Feb 2018 23:58:42 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Salary
 * 
 * @property int $id
 * @property \Carbon\Carbon $salaryDate
 * @property int $idEmployee
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\Employee $employee
 * @property \Illuminate\Database\Eloquent\Collection $deductions
 * @property \Illuminate\Database\Eloquent\Collection $earnings
 *
 * @package App\Models
 */
class Salary extends Eloquent
{
	protected $casts = [
		'idEmployee' => 'int'
	];

	protected $dates = [
		'salaryDate'
	];

	protected $fillable = [
		'salaryDate',
		'idEmployee'
	];

	public function employee()
	{
		return $this->belongsTo(\App\Models\Employee::class, 'idEmployee');
	}

	public function deductions()
	{
		return $this->hasMany(\App\Models\Deduction::class, 'idSalary');
	}

	public function earnings()
	{
		return $this->hasMany(\App\Models\Earning::class, 'idSalary');
	}
}
