<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Category
 * 
 * @property int $id
 * @property string $uuid
 * @property string $name
 * @property string|null $description
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property int|null $deleted_by
 * 
 * @property Collection|Book[] $books
 *
 * @package App\Models
 */
class Category extends Model
{
	use SoftDeletes;
	protected $table = 'categories';

	protected $casts = [
		'created_by' => 'int',
		'updated_by' => 'int',
		'deleted_by' => 'int'
	];

	protected $fillable = [
		'uuid',
		'name',
		'description',
		'created_by',
		'updated_by',
		'deleted_by'
	];

	public function books()
	{
		return $this->hasMany(Book::class);
	}
}
