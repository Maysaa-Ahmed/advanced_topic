<?php

namespace App\Models;
use App\Models\Topic;
use Illuminate\Database\Eloquent\Relations\HasMany;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $fillable = [
        'category_name',
    ];
    public function topics(): HasMany
    {
        return $this->hasMany(Topic::class);
    }
}
