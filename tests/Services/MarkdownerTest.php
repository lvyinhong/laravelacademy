<?php
/**
 * Created by PhpStorm.
 * User: lyh
 * Date: 2018/11/8
 * Time: 11:10 PM
 */

namespace Tests\Services;


use Tests\TestCase;

class MarkdownerTest extends TestCase
{
    protected $markdown;

    public function setUp()
    {
        $this->markdown = new \App\Services\Markdowner();
    }

    public function testSimpleParagraph()
    {
        $this->assertEquals(
            "<p>test</p>\n",
            $this->markdown->toHTML('test')
        );
    }
}