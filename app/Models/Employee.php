<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 22 Feb 2018 23:58:41 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Employee
 * 
 * @property int $id
 * @property string $name
 * @property string $lastName
 * @property \Carbon\Carbon $dob
 * @property string $status
 * @property string $jobTitle
 * @property int $idCompany
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\Company $company
 * @property \Illuminate\Database\Eloquent\Collection $salaries
 *
 * @package App\Models
 */
class Employee extends Eloquent
{
	protected $casts = [
		'idCompany' => 'int'
	];

	protected $dates = [
		'dob'
	];

	protected $fillable = [
		'name',
		'lastName',
		'dob',
		'status',
		'jobTitle',
		'idCompany'
	];

	public function company()
	{
		return $this->belongsTo(\App\Models\Company::class, 'idCompany');
	}

	public function salaries()
	{
		return $this->hasMany(\App\Models\Salary::class, 'idEmployee');
	}
}
