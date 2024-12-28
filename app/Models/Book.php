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
 * Class Book
 * 
 * @property int $id
 * @property string $uuid
 * @property string $title
 * @property string|null $author
 * @property int|null $category_id
 * @property string|null $description
 * @property Carbon|null $published_date
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property int|null $deleted_by
 * 
 * @property Category|null $category
 * @property Collection|Content[] $contents
 *
 * @package App\Models
 */
class Book extends Model
{
	use SoftDeletes;
	protected $table = 'books';

	protected $casts = [
		'category_id' => 'int',
		'published_date' => 'datetime',
		'created_by' => 'int',
		'updated_by' => 'int',
		'deleted_by' => 'int'
	];

	protected $fillable = [
		'uuid',
		'title',
		'author',
		'category_id',
		'description',
		'published_date',
		'created_by',
		'updated_by',
		'deleted_by'
	];

	public function category()
	{
		return $this->belongsTo(Category::class);
	}

	public function contents()
	{
		return $this->hasMany(Content::class);
	}
}
