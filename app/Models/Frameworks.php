<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Frameworks extends Model
{
    protected $table = 'frameworks';

    protected $fillable = [
        'name',
        'language',
        'tech_stack',
        'slug',
        'description',
        'logo',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function chapters(): HasMany
    {
        return $this->hasMany(Chapters::class, 'framework_id');
    }

    public function sections(): HasMany
    {
        return $this->hasMany(Sections::class);
    }

    public function progress(): HasMany
    {
        return $this->hasMany(Progress::class, 'framework_id');
    }
}
