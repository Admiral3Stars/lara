<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\News;
use Database\Factories\CategoryFactory;
use Database\Factories\NewsFactory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class NewsTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testContactsAvailable()
    {
        $response = $this->get('/contacts');

        $response->assertStatus(200);
    }

    public function testContactsForm()
    {
        $responseData = [
            'name' => 'Ivan',
            'phone' => '+79001112233',
            'email' => 'admin@l.ru',
            'text' => 'Some text'
        ];
        $response = $this->post(route('contacts.store'), $responseData);
        $response->assertJson($responseData);
        $response->assertStatus(200);
    }

    public function testNewsAvailable()
    {
        $response = $this->get('/news');

        $response->assertStatus(200);
    }

    public function testNewsShow()
    {
        $response = $this->get(route('news.show', ['id' => mt_rand(1, 10)]));

        $response->assertStatus(200);
    }

    public function testNewsAdminAvailable()
    {
        $response = $this->get(route('admin.news.index'));

        $response->assertStatus(200);
    }

    public function testNewsCreateAdminAvailable()
    {
        $response = $this->get(route('admin.news.create'));

        $response->assertStatus(200);
    }

    public function testNewsAdminCreated()
    {
        $category = Category::factory()->create();
        $responseData = News::factory()->definition();

        dd($responseData + ['category_id' => $category->id]);
//        $responseData = [
//            'title' => 'Some title',
//            'author' => 'Admin',
//            'status' => 'DRAFT',
//            'description' => 'Some description'
//        ];
        $response = $this->post(route('admin.news.store'), $responseData);
        //$response->assertJson($responseData);
        $response->assertStatus(200);
    }
}
