<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Bookmark
 * 
 * @property int $id
 * @property string $uuid
 * @property int $user_id
 * @property int $paragraph_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Paragraph $paragraph
 * @property User $user
 *
 * @package App\Models
 */
class Bookmark extends Model
{
	use SoftDeletes;
	protected $table = 'bookmarks';

	protected $casts = [
		'user_id' => 'int',
		'paragraph_id' => 'int'
	];

	protected $fillable = [
		'uuid',
		'user_id',
		'paragraph_id'
	];

	public function paragraph()
	{
		return $this->belongsTo(Paragraph::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
