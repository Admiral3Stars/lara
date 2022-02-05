<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Boolean;
use Database\Factories\CategoryFactory;
use Database\Factories\NewsFactory;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';
    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'author',
        'status',
        'description'
    ];

    public static $availableFields = [
        'id', 'title', 'author', 'status', 'description', 'created_at'
    ];

    protected $casts = [
        'display' => 'Boolean'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

//    public function getTitleAttribute($value)
//    {
//        return mb_strtoupper($value);
//    }


}
