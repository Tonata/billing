<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 22 Feb 2018 23:58:42 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class QuotationItem
 * 
 * @property int $idQuotation
 * @property string $description
 * @property int $qty
 * @property float $unitPrice
 * @property float $discount
 * @property float $vat
 * @property float $vatAmount
 * @property float $AmountExclVat
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property int $id
 * 
 * @property \App\Models\Quotation $quotation
 *
 * @package App\Models
 */
class QuotationItem extends Eloquent
{
	protected $casts = [
		'idQuotation' => 'int',
		'qty' => 'int',
		'unitPrice' => 'float',
		'discount' => 'float',
		'vat' => 'float',
		'vatAmount' => 'float',
		'AmountExclVat' => 'float'
	];

	protected $fillable = [
		'idQuotation',
		'description',
		'qty',
		'unitPrice',
		'discount',
		'vat',
		'vatAmount',
		'AmountExclVat'
	];

	public function quotation()
	{
		return $this->belongsTo(\App\Models\Quotation::class, 'idQuotation');
	}
}
