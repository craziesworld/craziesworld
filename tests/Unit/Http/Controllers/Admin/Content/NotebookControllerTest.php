<?php
/**
 * Created by PhpStorm.
 * User: crazy
 * Date: 2018/1/21
 * Time: 22:00
 */

namespace Tests\Unit\Http\Controllers\Admin\Content;

use App\Http\Controllers\Admin\Content\NotebookController;
use App\Model\User;
use Session;
use Tests\TestCase;

class NotebookControllerTest extends TestCase
{

    public function testIndex()
    {
    }

    public function testStore()
    {
        $name = 'new bag';
        $description = 'Tell a story about a schoolbag';
        Session::start();
        $csrfToken = csrf_token();
        $response = $this->actingAs(factory(User::class)->create())
            ->withSession(['_token'=>$csrfToken])
            ->json('POST', action('Admin\Content\NotebookController@store'), [
                '_token' => $csrfToken,
                'name' => $name,
                'description' => $description,
            ]);

        $response->assertStatus(200);
        $response->assertJson([
            'name' => $name,
            'description' => $description,
        ]);
    }

    public function testShow()
    {

    }

    public function testUpdate()
    {

    }

    public function testDestroy()
    {

    }
}
