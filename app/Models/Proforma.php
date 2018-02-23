<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 22 Feb 2018 23:58:42 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Proforma
 * 
 * @property int $id
 * @property \Carbon\Carbon $proformaDate
 * @property float $totalAmount
 * @property float $totalVat
 * @property float $totalAmountExclVat
 * @property int $idCustomer
 * @property int $idCompany
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\Company $company
 * @property \App\Models\Customer $customer
 * @property \Illuminate\Database\Eloquent\Collection $proforma_items
 *
 * @package App\Models
 */
class Proforma extends Eloquent
{
	protected $casts = [
		'totalAmount' => 'float',
		'totalVat' => 'float',
		'totalAmountExclVat' => 'float',
		'idCustomer' => 'int',
		'idCompany' => 'int'
	];

	protected $dates = [
		'proformaDate'
	];

	protected $fillable = [
		'proformaDate',
		'totalAmount',
		'totalVat',
		'totalAmountExclVat',
		'idCustomer',
		'idCompany'
	];

	public function company()
	{
		return $this->belongsTo(\App\Models\Company::class, 'idCompany');
	}

	public function customer()
	{
		return $this->belongsTo(\App\Models\Customer::class, 'idCustomer');
	}

	public function proforma_items()
	{
		return $this->hasMany(\App\Models\ProformaItem::class, 'idProforma');
	}
}
