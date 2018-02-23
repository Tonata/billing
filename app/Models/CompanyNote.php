<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 22 Feb 2018 23:58:41 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CompanyNote
 * 
 * @property string $quotationNote
 * @property string $proformaNote
 * @property string $invoiceNote
 * @property string $purchaseOrderNote
 * @property int $idCompany
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property int $idCompanyNotes
 * 
 * @property \App\Models\Company $company
 *
 * @package App\Models
 */
class CompanyNote extends Eloquent
{
	protected $primaryKey = 'idCompanyNotes';

	protected $casts = [
		'idCompany' => 'int'
	];

	protected $fillable = [
		'quotationNote',
		'proformaNote',
		'invoiceNote',
		'purchaseOrderNote',
		'idCompany'
	];

	public function company()
	{
		return $this->belongsTo(\App\Models\Company::class, 'idCompany');
	}
}
