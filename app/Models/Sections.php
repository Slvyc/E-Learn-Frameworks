<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sections extends Model
{
    protected $fillable = [
        'framework_id',
        'chapter_id',
        'title',
        'content',
        'code_sample',
        'order',
    ];

    public function framework()
    {
        return $this->belongsTo(Frameworks::class);
    }

    public function chapter()
    {
        return $this->belongsTo(Chapters::class);
    }

}
