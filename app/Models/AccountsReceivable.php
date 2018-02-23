<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 22 Feb 2018 23:58:41 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class AccountsReceivable
 * 
 * @property int $id
 * @property float $totalAmount
 * @property float $totalAmountPaid
 * @property float $balance
 * @property int $idCustomer
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\Customer $customer
 * @property \Illuminate\Database\Eloquent\Collection $payments
 *
 * @package App\Models
 */
class AccountsReceivable extends Eloquent
{
	protected $table = 'accounts_receivable';

	protected $casts = [
		'totalAmount' => 'float',
		'totalAmountPaid' => 'float',
		'balance' => 'float',
		'idCustomer' => 'int'
	];

	protected $fillable = [
		'totalAmount',
		'totalAmountPaid',
		'balance',
		'idCustomer'
	];

	public function customer()
	{
		return $this->belongsTo(\App\Models\Customer::class, 'idCustomer');
	}

	public function payments()
	{
		return $this->hasMany(\App\Models\Payment::class, 'idAccountsReceivable');
	}
}
