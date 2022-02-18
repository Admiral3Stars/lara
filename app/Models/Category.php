<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\CategoryFactory;
use Database\Factories\NewsFactory;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    public function news(): HasMany
    {
        return $this->hasMany(News::class, 'category_id', 'id');
    }

    public function getCategory(): array
    {
        return \DB::table($this->table)
            ->select(['id', 'title', 'description'])
            ->get()
            ->toArray();
    }

    public function getCategoryById(int $id)
    {
        return \DB::select("SELECT `id`, `title`, `description` FROM `{$this->table}`
                            WHERE `id` = :id", ['id' => $id]);
    }
}
