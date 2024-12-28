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
 * Class Paragraph
 * 
 * @property int $id
 * @property string $uuid
 * @property int $content_id
 * @property string $language
 * @property string $content
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property int|null $deleted_by
 * 
 * @property Collection|Bookmark[] $bookmarks
 *
 * @package App\Models
 */
class Paragraph extends Model
{
	use SoftDeletes;
	protected $table = 'paragraphs';

	protected $casts = [
		'content_id' => 'int',
		'created_by' => 'int',
		'updated_by' => 'int',
		'deleted_by' => 'int'
	];

	protected $fillable = [
		'uuid',
		'content_id',
		'language',
		'content',
		'created_by',
		'updated_by',
		'deleted_by'
	];

	public function content()
	{
		return $this->belongsTo(Content::class);
	}

	public function bookmarks()
	{
		return $this->hasMany(Bookmark::class);
	}
}
