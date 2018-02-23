<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 22 Feb 2018 23:58:42 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class PurchaseExpense
 * 
 * @property int $idPurchaseExpense
 * @property \Carbon\Carbon $dateOfPurchase
 * @property string $description
 * @property string $name
 * @property float $amountExclVat
 * @property float $vatAmount
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class PurchaseExpense extends Eloquent
{
	protected $primaryKey = 'idPurchaseExpense';

	protected $casts = [
		'amountExclVat' => 'float',
		'vatAmount' => 'float'
	];

	protected $dates = [
		'dateOfPurchase'
	];

	protected $fillable = [
		'dateOfPurchase',
		'description',
		'name',
		'amountExclVat',
		'vatAmount'
	];
}
