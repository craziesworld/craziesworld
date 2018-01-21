<?php
/**
 * Created by PhpStorm.
 * User: crazy
 * Date: 2018/1/21
 * Time: 21:39
 */

namespace Tests\Unit\Model;

use App\Model\Notebook;
use Tests\TestCase;

class NotebookTest extends TestCase
{
    public function testConstruct()
    {
        $this->assertEquals(1, 1);
        return 1;
    }

    /**
     * @depends testConstruct
     * @param int $id
     */
    public function testArticles(int $id)
    {
        $this->assertEquals($id, 1);
    }

    /**
     * @depends testConstruct
     * @param int $id
     */
    public function testUser(int $id)
    {
        $this->assertEquals($id, 1);
    }
}
