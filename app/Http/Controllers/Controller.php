<?php declare(strict_types = 1);

namespace App\Http\Controllers;

use Faker\Factory;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getNews(): array
    {
        $faker = Factory::create();

        for ($i = 0; $i < 10; $i++) {
            $news[$i] = [
                'id' => $i,
                'title' => $faker->jobTitle(),
                'description' => $faker->text(maxNbChars: 250),
                'autor' => $faker->userName()
            ];
        }

        return $news;
    }

    public function getNewsById(Int $id): array
    {
        $faker = Factory::create();
        return [
            'id' => $id,
            'title' => $faker->jobTitle(),
            'description' => $faker->text(maxNbChars: 250),
            'autor' => $faker->userName()
        ];
    }

    public function getCategory(): array
    {
        $faker = Factory::create();

        for ($i = 0; $i < 10; $i++) {
            $news[$i] = [
                'id' => $i,
                'title' => $faker->jobTitle(),
                'description' => $faker->text(maxNbChars: 250),
                'autor' => $faker->userName()
            ];
        }

        return $news;
    }

    public function getCategoryById(Int $id): array
    {
        $faker = Factory::create();
        return [
            'id' => $id,
            'title' => $faker->jobTitle(),
            'description' => $faker->text(maxNbChars: 250),
            'autor' => $faker->userName()
        ];
    }
}
