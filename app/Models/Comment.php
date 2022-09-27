<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'comments';

    protected $primaryKey = 'id';

    protected $fillable = ['user_id', 'text'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getLatest($count) {
        return self::latest()->take($count)->get();
    }

    public function earlierCommentCount($displayedCommentCount) {
        $earlierComments = Comment::count() - $displayedCommentCount;

        if ($earlierComments < 0) {
            $earlierComments = 0;
        }

        return $earlierComments;
    }
}
