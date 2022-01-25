<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';

    public function getNews(): array
    {
        return \DB::select("SELECT `id`, `title`, `slug`, `author`, `description` FROM `{$this->table}`");
    }

    public function getNewsById(int $id)
    {
        return \DB::select("SELECT `id`, `title`, `slug`, `author`, `description` FROM `{$this->table}`
                            WHERE `id` = :id", ['id' => $id]);
    }
}
