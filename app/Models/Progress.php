<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Progress extends Model
{
    protected static function booted()
    {
        static::saving(function ($progress) {
            if ($progress->chapter_id) {
                $chapter = \App\Models\Chapters::find($progress->chapter_id);
                if ($chapter) {
                    $progress->framework_id = $chapter->framework_id;
                }
            }
        });
    }
    protected $fillable = [
        'user_id',
        'framework_id',
        'chapter_id',
        'is_completed',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function chapter()
    {
        return $this->belongsTo(Chapters::class);
    }

    public function framework()
    {
        return $this->belongsTo(Frameworks::class, 'framework_id');
    }
}
