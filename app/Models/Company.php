<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 22 Feb 2018 23:58:41 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Company
 * 
 * @property int $id
 * @property string $name
 * @property string $registration
 * @property string $email
 * @property string $bankAccNo
 * @property string $bankAccBranch
 * @property string $bankAccName
 * @property string $contactNumber
 * @property int $idUser
 * @property int $idDocument
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\User $user
 * @property \App\Models\Document $document
 * @property \Illuminate\Database\Eloquent\Collection $company_notes
 * @property \Illuminate\Database\Eloquent\Collection $employees
 * @property \Illuminate\Database\Eloquent\Collection $invoices
 * @property \Illuminate\Database\Eloquent\Collection $licenses
 * @property \Illuminate\Database\Eloquent\Collection $proformas
 * @property \Illuminate\Database\Eloquent\Collection $purchase_orders
 * @property \Illuminate\Database\Eloquent\Collection $quotations
 * @property \Illuminate\Database\Eloquent\Collection $vats
 *
 * @package App\Models
 */
class Company extends Eloquent
{
//	protected $casts = [
//		'idUser' => 'int',
//		'idDocument' => 'int'
//	];

	protected $fillable = [
		'name',
		'registration',
		'email',
		'bank_acc_no',
		'bank_acc_branch',
		'bank_acc_name',
		'contact_number',
        'vat_number',
        'license_expiry'
	];

	public function users()
	{
		return $this->hasMany(\App\User::class);
	}

	public function document()
	{
		return $this->belongsTo(\App\Models\Document::class);
	}

	public function company_notes()
	{
		return $this->hasMany(\App\Models\CompanyNote::class);
	}

	public function employees()
	{
		return $this->hasMany(\App\Models\Employee::class);
	}

	public function invoices()
	{
		return $this->hasMany(\App\Models\Invoice::class);
	}

//	public function licenses()
//	{
//		return $this->hasMany(\App\Models\License::class, 'holder');
//	}

	public function proformas()
	{
		return $this->hasMany(\App\Models\Proforma::class);
	}

	public function purchase_orders()
	{
		return $this->hasMany(\App\Models\PurchaseOrder::class);
	}

	public function quotations()
	{
		return $this->hasMany(\App\Models\Quotation::class);
	}

	public function vats()
	{
		return $this->hasMany(\App\Models\Vat::class);
	}
}
