<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Chapters extends Model
{
    protected $table = 'chapters';

    protected $fillable = [
        'framework_id',
        'title',
        'slug',
        'order',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function framework()
    {
       return $this->belongsTo(Frameworks::class, 'framework_id');
    }
    

    public function sections(): HasMany
    {
        return $this->hasMany(Sections::class, 'chapter_id');
    }

    public function progress(): HasMany
    {
        return $this->hasMany(Progress::class);
    }
    

    // public function progress()
    // {
    //     return $this->hasMany(Progress::class);
    // }
}
