<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 22 Feb 2018 23:58:42 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class InvoiceItem
 * 
 * @property int $idInvoice
 * @property string $description
 * @property int $qty
 * @property float $unitPrice
 * @property float $discount
 * @property float $vatAmount
 * @property float $vat
 * @property float $vatAmountExclVat
 * @property int $id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\Invoice $invoice
 *
 * @package App\Models
 */
class InvoiceItem extends Eloquent
{
	protected $casts = [
		'idInvoice' => 'int',
		'qty' => 'int',
		'unitPrice' => 'float',
		'discount' => 'float',
		'vatAmount' => 'float',
		'vat' => 'float',
		'vatAmountExclVat' => 'float'
	];

	protected $fillable = [
		'idInvoice',
		'description',
		'qty',
		'unitPrice',
		'discount',
		'vatAmount',
		'vat',
		'vatAmountExclVat'
	];

	public function invoice()
	{
		return $this->belongsTo(\App\Models\Invoice::class, 'idInvoice');
	}
}
