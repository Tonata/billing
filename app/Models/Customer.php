<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 22 Feb 2018 23:58:41 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Customer
 * 
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $contactNumber
 * @property string $postalAddress
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $accounts_receivables
 * @property \Illuminate\Database\Eloquent\Collection $invoices
 * @property \Illuminate\Database\Eloquent\Collection $proformas
 * @property \Illuminate\Database\Eloquent\Collection $purchase_orders
 * @property \Illuminate\Database\Eloquent\Collection $quotations
 *
 * @package App\Models
 */
class Customer extends Eloquent
{
	protected $fillable = [
		'name',
		'email',
		'contactNumber',
		'postalAddress'
	];

	public function accounts_receivables()
	{
		return $this->hasMany(\App\Models\AccountsReceivable::class, 'idCustomer');
	}

	public function invoices()
	{
		return $this->hasMany(\App\Models\Invoice::class, 'idCustomer');
	}

	public function proformas()
	{
		return $this->hasMany(\App\Models\Proforma::class, 'idCustomer');
	}

	public function purchase_orders()
	{
		return $this->hasMany(\App\Models\PurchaseOrder::class, 'idCustomer');
	}

	public function quotations()
	{
		return $this->hasMany(\App\Models\Quotation::class, 'idCustomer');
	}
}
