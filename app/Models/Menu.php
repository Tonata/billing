<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 22 Feb 2018 23:58:42 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Menu
 * 
 * @property int $id
 * @property string $name
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $menu_items
 *
 * @package App\Models
 */
class Menu extends Eloquent
{
	protected $fillable = [
		'name'
	];

	public function menu_items()
	{
		return $this->hasMany(\App\Models\MenuItem::class);
	}
}
