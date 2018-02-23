<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 22 Feb 2018 23:58:42 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ProformaItem
 * 
 * @property int $idProforma
 * @property string $description
 * @property int $qty
 * @property float $unitPrice
 * @property float $discount
 * @property float $vatAmount
 * @property float $vat
 * @property float $amountExclVat
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property int $id
 * 
 * @property \App\Models\Proforma $proforma
 *
 * @package App\Models
 */
class ProformaItem extends Eloquent
{
	protected $casts = [
		'idProforma' => 'int',
		'qty' => 'int',
		'unitPrice' => 'float',
		'discount' => 'float',
		'vatAmount' => 'float',
		'vat' => 'float',
		'amountExclVat' => 'float'
	];

	protected $fillable = [
		'idProforma',
		'description',
		'qty',
		'unitPrice',
		'discount',
		'vatAmount',
		'vat',
		'amountExclVat'
	];

	public function proforma()
	{
		return $this->belongsTo(\App\Models\Proforma::class, 'idProforma');
	}
}
