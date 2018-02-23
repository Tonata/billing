<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 22 Feb 2018 23:58:42 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Quotation
 * 
 * @property int $id
 * @property \Carbon\Carbon $quotationDate
 * @property float $totalAmount
 * @property float $totalVat
 * @property float $totalAmountExclVat
 * @property int $idCompany
 * @property int $idCustomer
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\Company $company
 * @property \App\Models\Customer $customer
 * @property \Illuminate\Database\Eloquent\Collection $quotation_items
 *
 * @package App\Models
 */
class Quotation extends Eloquent
{
	protected $table = 'quotation';

	protected $casts = [
		'totalAmount' => 'float',
		'totalVat' => 'float',
		'totalAmountExclVat' => 'float',
		'idCompany' => 'int',
		'idCustomer' => 'int'
	];

	protected $dates = [
		'quotationDate'
	];

	protected $fillable = [
		'quotationDate',
		'totalAmount',
		'totalVat',
		'totalAmountExclVat',
		'idCompany',
		'idCustomer'
	];

	public function company()
	{
		return $this->belongsTo(\App\Models\Company::class, 'idCompany');
	}

	public function customer()
	{
		return $this->belongsTo(\App\Models\Customer::class, 'idCustomer');
	}

	public function quotation_items()
	{
		return $this->hasMany(\App\Models\QuotationItem::class, 'idQuotation');
	}
}
