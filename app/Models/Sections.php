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
        'content2',
        'content3',
        'content4',
        'code_sample',
        'code_sample2',
        'code_sample3',
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
