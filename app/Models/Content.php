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
 * Class Content
 * 
 * @property int $id
 * @property string $uuid
 * @property int $book_id
 * @property int|null $parent_id
 * @property string $level
 * @property string $title
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property int|null $deleted_by
 * 
 * @property Book $book
 * @property Content|null $content
 * @property Collection|Content[] $contents
 * @property Collection|Paragraph[] $paragraphs
 *
 * @package App\Models
 */
class Content extends Model
{
	use SoftDeletes;
	protected $table = 'contents';

	protected $casts = [
		'book_id' => 'int',
		'parent_id' => 'int',
		'created_by' => 'int',
		'updated_by' => 'int',
		'deleted_by' => 'int'
	];

	protected $fillable = [
		'uuid',
		'book_id',
		'parent_id',
		'level',
		'title',
		'created_by',
		'updated_by',
		'deleted_by'
	];

	public function book()
	{
		return $this->belongsTo(Book::class);
	}

	public function content()
	{
		return $this->belongsTo(Content::class, 'parent_id');
	}

	public function contents()
	{
		return $this->hasMany(Content::class, 'parent_id');
	}

	public function paragraphs()
	{
		return $this->hasMany(Paragraph::class);
	}
}
