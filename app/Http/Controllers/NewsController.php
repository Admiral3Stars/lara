<?php declare(strict_types = 1);

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{

    public function index()
    {
        $news = News::query()->select(News::$availableFields)->get();

        return view('news.index', [
            'newsList' => $news
        ]);


    }

    public function show(News $id)
    {
        return view('news.show', [
            'news' => $id
        ]);
    }
}
