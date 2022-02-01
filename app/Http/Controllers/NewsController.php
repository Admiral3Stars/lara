<?php declare(strict_types = 1);

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\{Category,News,User};

class NewsController extends Controller
{

    public function index()
    {
        $model = new News();
        $news = $model->getNews();

        return view('news.index', [
            'newsList' => $news
        ]);


    }

    public function show(int $id)
    {
        if ($id > 10) {
            abort(404);
        }
        $model = new News();
        return view('news.show', [
            'news' => $model->getNewsById($id)[0]
        ]);
    }
}
