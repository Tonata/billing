<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 22 Feb 2018 23:58:42 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class MenuItem
 * 
 * @property int $id
 * @property int $menu_id
 * @property string $title
 * @property string $url
 * @property string $target
 * @property string $icon_class
 * @property string $color
 * @property int $parent_id
 * @property int $order
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $route
 * @property string $parameters
 * 
 * @property \App\Models\Menu $menu
 *
 * @package App\Models
 */
class MenuItem extends Eloquent
{
	protected $casts = [
		'menu_id' => 'int',
		'parent_id' => 'int',
		'order' => 'int'
	];

	protected $fillable = [
		'menu_id',
		'title',
		'url',
		'target',
		'icon_class',
		'color',
		'parent_id',
		'order',
		'route',
		'parameters'
	];

	public function menu()
	{
		return $this->belongsTo(\App\Models\Menu::class);
	}
}
