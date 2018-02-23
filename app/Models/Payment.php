<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 22 Feb 2018 23:58:42 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Payment
 * 
 * @property \Carbon\Carbon $paymentDate
 * @property float $amount
 * @property int $idAccountsReceivable
 * @property int $id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\AccountsReceivable $accounts_receivable
 *
 * @package App\Models
 */
class Payment extends Eloquent
{
	protected $casts = [
		'amount' => 'float',
		'idAccountsReceivable' => 'int'
	];

	protected $dates = [
		'paymentDate'
	];

	protected $fillable = [
		'paymentDate',
		'amount',
		'idAccountsReceivable'
	];

	public function accounts_receivable()
	{
		return $this->belongsTo(\App\Models\AccountsReceivable::class, 'idAccountsReceivable');
	}
}
