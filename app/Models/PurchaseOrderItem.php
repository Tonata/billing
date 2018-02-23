<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 22 Feb 2018 23:58:42 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class PurchaseOrderItem
 * 
 * @property int $idPurchaseOrder
 * @property string $description
 * @property int $qty
 * @property float $unitPrice
 * @property float $discount
 * @property float $vatAmount
 * @property float $vat
 * @property float $amountExclVat
 * @property int $id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\PurchaseOrder $purchase_order
 *
 * @package App\Models
 */
class PurchaseOrderItem extends Eloquent
{
	protected $casts = [
		'idPurchaseOrder' => 'int',
		'qty' => 'int',
		'unitPrice' => 'float',
		'discount' => 'float',
		'vatAmount' => 'float',
		'vat' => 'float',
		'amountExclVat' => 'float'
	];

	protected $fillable = [
		'idPurchaseOrder',
		'description',
		'qty',
		'unitPrice',
		'discount',
		'vatAmount',
		'vat',
		'amountExclVat'
	];

	public function purchase_order()
	{
		return $this->belongsTo(\App\Models\PurchaseOrder::class, 'idPurchaseOrder');
	}
}
